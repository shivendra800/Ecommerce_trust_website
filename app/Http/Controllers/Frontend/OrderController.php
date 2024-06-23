<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10);
        return view('frontend.orders.index',compact('orders'));
    }

    public function show($orderId)
    {
        $order = Order::where('user_id',Auth::user()->id)->where('id',$orderId)->first();
        if($order)
        {
            return view('frontend.orders.view',compact('order'));
        }
        else
        {
            return redirect()->back()->with('message',' NO Order Found');
        }

    }

    public function cancleOrder($orderId)
    {
        $order = Order::find($orderId);
        $order->status_message = "cancelled";
        $order->canceled_date = DB::raw('CURRENT_DATE');
        $order->save();
        return redirect()->back()->with('message','Order has Been Cancled');
     //   return redirect('frontend.orders.view')->with('message','Order has Been Cancled');
    }
}
