<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $table->time = $request->time;
        $table->plate_num = $request->plate_num;
        $table->location = $request->location;
        $table->save();

        return redirect('/dashboard')->with('success', 'User successfully added');
    }
}