<?php

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

Route::get('hello', function () {
    return view('welcome');
});

//rute baris
Route::get('hello', function () {
    echo "<h1>Hello World !!!</h1>";
});

//rute baru mengarah ke controller 
Route::get('hellocontroller', 'HelloController@index');

//resource untuk memanggil seluruh fungsi yang ada di controller, tanpa pakai 'php@index'
Route::resource('product', 'ProductController');
