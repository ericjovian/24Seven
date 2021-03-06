<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/myprofile', [OrderController::class, 'myprofile'])->name('dashboard.index');
    Route::get('/dashboard/membership', [MembershipController::class, 'index'])->name('dashboard.membership');
    Route::get('/dashboard/history', [ReviewController::class, 'historyOrderIndex'])->name('dashboard.history');
    Route::put('/dashboard/membership', [MembershipController::class, 'updateMember'])->name('dashboard.updatemember');
    Route::post('/dashboard/myprofile', [OrderController::class, 'insert'])->name('insertOrder');
    Route::post('/dashboard/history', [ReviewController::class, 'insertReview'])->name('insertReview');
    Route::get('/dashboard/professional', [OrderController::class, 'orderprofessional'])->name('joblist');
    Route::put('/dashboard/professional', [OrderController::class, 'updateStatusOrder'])->name('update.status');
    Route::put('/dashboard', [OrderController::class, 'updateOrderPayment'])->name('updateOrderStatus');
});

// // for users
// Route::group(['middleware' => ['auth']], function() { 
//     Route::get('/dashboard/myprofile', [DashboardController::class, 'myprofile'])->name('dashboard.myprofile');
// });

// // // for blogwriters
// Route::group(['middleware' => ['auth']], function() { 
//     Route::get('/dashboard/postcreate', [DashboardController::class, 'postcreate'])->name('dashboard.postcreate');
// });

require __DIR__.'/auth.php';
