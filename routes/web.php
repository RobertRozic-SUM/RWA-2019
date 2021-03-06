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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Middleware auth - logiran
// Middleware admin - admin
Route::middleware('auth', 'admin')->get('/home', 'HomeController@index')->name('home');
Route::get('/rezervacije', function () {
    return view('rezervacije');
});

Route::resource('cars', 'CarController');
Route::resource('brands', 'BrandController');
//Route::get('cars', 'CarController@index');
