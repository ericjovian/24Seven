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
        $table = new Order();
        $table->user_id = Auth::user()->id;
        $table->time = $request->time;
        $table->plate_num = $request->plate_num;
        $table->location = $request->location;
        $table->price = $request->price;
        $table->save();

        return redirect('/dashboard')->with('success', 'User successfully added');
    }
}