<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Wishlist;

class WishlistShow extends Component
{

    public function removeWishlistItem(int $WishlistId)
    {
      Wishlist::where('user_id',auth()->user()->id)->where('id',$WishlistId)->delete();
      $this->emit('wishlistAddedUpdated');
      $this->dispatchBrowserEvent('message',[
        'text'=> 'WishList Item Remove Successfull',
        'type' => 'success',
        'status'  => '200'
      ]);
    }

    public function render()
    {
        $Wishlist = Wishlist::where('user_id',auth()->id())->get();
        return view('livewire.frontend.wishlist-show',[
            'Wishlist' => $Wishlist
        ]);
    }
}
