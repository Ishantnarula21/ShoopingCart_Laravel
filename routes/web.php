<?php

use App\Http\Controllers\Icontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Icontroller::class, 'welcome']);
Route::get('MenCollection', [Icontroller::class, 'men']);
Route::get('WomenCollection', [Icontroller::class, 'women']);
Route::get('KidsCollection', [Icontroller::class, 'kids']);

Route::get('Contact', function () {
    return view('Contact');
});
Route::get('userlogin', function () {
    return view('Login');
});
Route::get('register', function () {
    return view('register');
});

Route::get('Final_cart', [Icontroller::class, 'Final_cart']);
Route::get('Remove/{id}', [Icontroller::class, 'remove']);
Route::get('/{categoryname}', [Icontroller::class, 'categorydisplay']);
Route::post('sessionform', [Icontroller::class, 'sessionForm']);
Route::post('finalcart/{id}', [Icontroller::class, 'finalcart']);
Route::post('register', [Icontroller::class, 'register']);
Route::get('Addtocart/{id}', [Icontroller::class, 'addtocart']);
