<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function userreview($order_item_id )
    {
        $order = Review::where('order_item_id',Auth::user()->id)->where('id',$order_item_id )->first();

        if($order)
        {
            return view('frontend.review.index',compact('order'));
        }
        // else
        // {
        //     return redirect()->back()->with('message',' NO Order Found');
        // }
    }
}
