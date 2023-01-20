<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Auth;

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
  return view('auth.login');
});
// Route::get('search',[CartController::class,'search'])->name('search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/**Product */
Route::resource('products', ProductController::class);

Route::get('cart_add/{card}' , [CartController::class, 'store'])->name('cart_add'); // ADDTOCART

// Route::resource('cart', CartController::class);
Route::get('cart', [CartController::class, 'index'])->name('cart');


// Route::get('searc')
Route::get('search',[ProductController::class,'search'])->name('search');
//Route::post('/search',[ProductController::class,'search']);