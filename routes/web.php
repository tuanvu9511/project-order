<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoCustumerController;
use Illuminate\Http\Request;
use app\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.orders.orderDetailView');
})->name('orderView');
Route::get('/addneworder',function(){
    return view('pages.orders.addNeworder');
})->name('addNewOrder');
Route::get('/abc',[InfoCustumerController::class,'index']);
Route::post('/testdd',function(Request $request){
    return $request->all();
})->name('testdd');