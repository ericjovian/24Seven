<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class DashboardController extends Controller
{
   public function index()
   {
        if(Auth::user()->user_role_id == 2){
          $Order = Order::findOrFail(1);
          dd($Order);
          return view('userdash',compact('Order'));
        }
        elseif(Auth::user()->user_role_id ==3){
          return view('professionaldashboard');
        }elseif(Auth::user()->user_role_id == 1){
              return view('dashboard');
     }
     //   if(Auth::user()->user_role->role=='User'){
     //        return view('userdash');
     //   }elseif(Auth::user()->user_role->role=='Professional'){
     //        return view('professionaldashboard');
     //   }elseif(Auth::user()->user_role->role=='Admin'){
     //    return view('dashboard');
   }
   

   public function myprofile()
   {
    return view('myprofile');
   }

   public function postcreate()
   {
    return view('postcreate');
   }
}
