<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\User;
use App\Models\Role;

class DashboardController extends Controller
{
   public function index()
   {
        if(Auth::user()->user_role_id == 2){
          return view('userdash');
        }
        elseif(Auth::user()->user_role_id ==3){
          return view('professionaldashboard');
        }elseif(Auth::user()->user_role_id == 1){
              $order = Order::all();
              
              
              // $order = Order::findOrFail(1);
              return view('dashboard', compact('order'));

     }
     //   if(Auth::user()->user_role->role=='User'){
     //        return view('userdash');
     //   }elseif(Auth::user()->user_role->role=='Professional'){
     //        return view('professionaldashboard');
     //   }elseif(Auth::user()->user_role->role=='Admin'){
     //    return view('dashboard');
   }
}
