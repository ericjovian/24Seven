<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
     /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function myprofile()
    {
     return view('myprofile');
    }
    public function insert(Request $request){
        
        if (Auth::user()->isUserSubscribed){
            $price = 5;
        }else{
            $price = $request->price;
        }

        $table = new Order();
        $table->user_id = Auth::user()->id;
        $table->time = $request->time;
        $table->plate_num = $request->plate_num;
        $table->car_model = $request->car_model;
        $table->location = $request->location;
        $table->price = $price;
        $table->save();



        return redirect('/dashboard')->with('success', 'User successfully added');
    }
    public function orderprofessional()
    {
        $order = Order::where('status','Waiting for Professional')->get();
        
     return view('joblist',compact('order'));
    }

    public function updateStatusOrder(Request $request)
    {
     $order = Order::findOrFail($request->order_id);
     $order->status = 'Accepted';
     $order->professional_id = Auth::user()->id;
     $order->save();
     return redirect('/dashboard');
    }
}