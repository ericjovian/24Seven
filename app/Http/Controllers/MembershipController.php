<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    public function index()
    {
        
     return view('membership');
    }

    public function updateMember(Request $request)
    
    {
        
    $user= User::findOrFail(Auth::user()->id);
    $user->isUserSubscribed = 1;
    $user->creditCard = $request->credit_card;
    
    $user->save();

    // $orders = Order::where('user_id',auth()->user()->id)->get()
    // foreach($orders as $order){
    //     $order->price =5;
    //     $order->save();
    // }
    
        
     return view('membership');
    }
}
