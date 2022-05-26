<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\Order;

class ReviewController extends Controller
{
    public function historyOrderIndex(Request $request)
    {
        $order = Order::where('user_id',Auth::user()->id)->get();
        return view('historypage',compact('order'));
    }
    public function insertReview(Request $request){
        
       

        $review = new Review(); 
        $review->order_id = $request->order_id;
        $review->user_id = Auth::user()->id;
        $review->review = $request->review;
        $review->rating = $request->star;

        

       
        $review->save();



        return redirect('/dashboard/history');
    }

    
}
