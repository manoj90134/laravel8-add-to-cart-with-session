<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\productcontroller;

// use session;

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

// Route::get('/', function () {
//     return view('welcome');
// });

    route::get('/',[productcontroller::class,'cart'])->name('cart_home');
    route::post('add_to_cart',[productcontroller::class,'add_to_cart'])->name('addtocart');
    
    route::get('cart_page',[productcontroller::class,'cart_page'])->name('cart_page');

    route::get('cart_remove/{id}',[productcontroller::class,'cart_remove'])->name('cart_remove');


