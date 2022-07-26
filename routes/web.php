<?php

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

// use app\Http\Controllers\WelcomeController;

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/medicines', 'MedicineController@index')->name('medicines.index');
Route::get('/medicines/{product}', 'MedicineController@show')->name('medicines.show');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/medicines', function () {
//     return view('medicines');
// });

// Route to Cart
// Route to Medicine Description

// Optionally
// Route to Login
// Route to Contact