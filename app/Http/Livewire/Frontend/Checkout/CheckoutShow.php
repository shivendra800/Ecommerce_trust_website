<?php

namespace App\Http\Livewire\Frontend\Checkout;

use App\Models\Cart;
use App\Models\Order;
use App\Mail\OrderMail;
use Livewire\Component;
use App\Models\Orderitem;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class CheckoutShow extends Component
{
       public $carts, $totalProductAmount=0;

       public $fullname,$email,$phone,$pincode,$address ,$payment_mode= NULL, $payment_id= NULL;


       protected $listeners = [

        'validationForAll',
        'transactionEmit' => 'paidOnlineOrder'

       ];

       public function paidOnlineOrder($value)
       {
                    $this->payment_id = $value;
                    $this->payment_mode = 'Paid By Paypal';
                    $codOrder = $this->placeOrder();
                    if($codOrder)
                    {

                     Cart::where('user_id',auth()->user()->id)->delete();

                     session()-> flash('message','Order Place Successfull');
                      $this->dispatchBrowserEvent('message',[
                         'text' => 'Order Place Successfull',
                         'type' => 'success',
                         'status' => 200
                      ]);

                      return redirect()->to('thank-you');
                    }
                    else
                    {
                     $this->dispatchBrowserEvent('message',[
                     'text' => 'Something Went Wrong!',
                     'type' => 'error',
                     'status' => 404
                 ]);
                    }

       }

       public function validationForAll()
       {
          $this->validate();
       }

       public function rules()
       {
          return [
                'fullname' => 'required|string|max:121',
                'email' => 'required|email|max:121',
                'phone' => 'required|string|max:10|min:10',
                'pincode' => 'required|string|max:6|min:6',
                'address' => 'required|string|max:500',
          ];
       }

       public function placeOrder()
       {
           $this->validate();

          $order = Order::create([
            'user_id' => auth()->user()->id,
            'tracking_no' =>'Tracking-'.Str::random(10),
            'fullname' => $this->fullname,
            'email'=> $this->email,
            'phone'=> $this->phone,
            'pincode'=> $this->pincode,
            'address'=> $this->address,
            'status_message'=> 'in progress',
            'payment_mode'=> $this->payment_mode,
            'payment_id'=> $this->payment_id,
          ]);

          foreach($this->carts as $cartItem)
        {
            $orderItem = Orderitem::create([

                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'product_color_id' => $cartItem->product_color_id,
                'quantity' => $cartItem->quantity ,
                'price' => $cartItem->product->selling_price,
              ]);
                if($cartItem->product_color_id != NULL)
                {
                    $cartItem->productColor()->where('id',$cartItem->product_color_id)->decrement('quantity',$cartItem->quantity);
                }
                else
                {
                    $cartItem->product()->where('id',$cartItem->product_id)->decrement('quantity',$cartItem->quantity);
                }
        }

        $this->sendOrderConfirmationMail($order);
               return $order;


            }

       public function codOrder()
       {

          $this->payment_mode = 'Cash On Delivery';
           $codOrder = $this->placeOrder();
           if($codOrder)
           {

            Cart::where('user_id',auth()->user()->id)->delete();

            session()-> flash('message','Order Place Successfull');
             $this->dispatchBrowserEvent('message',[
                'text' => 'Order Place Successfull',
                'type' => 'success',
                'status' => 200
             ]);

             return redirect()->to('thank-you');
           }
           else
           {
            $this->dispatchBrowserEvent('message',[
            'text' => 'Something Went Wrong!',
            'type' => 'error',
            'status' => 404
        ]);
           }
       }

    public function totalProductAmount()
    {
        $this->totalProductAmount =0;
        $this->carts = Cart::where('user_id',auth()->user()->id)->get();
        foreach($this->carts as $cartItem)
        {
            $this->totalProductAmount += $cartItem->product->selling_price * $cartItem->quantity;
        }
               return $this->totalProductAmount;
    }
    public function render()
    {
        $this->fullname = auth()->user()->name;
        $this->email = auth()->user()->email;

        $this->totalProductAmount =  $this->totalProductAmount();
        return view('livewire.frontend.checkout.checkout-show',[
            'totalProductAmount' => $this->totalProductAmount
        ]);
    }

    public function sendOrderConfirmationMail($order)
    {
               Mail::to($order->email)->send(new OrderMail($order));
    }
}
