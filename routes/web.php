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

Route::get('/', 'HomeController@index')->middleware('auth');
Route::get('/collecting-order-step-1', 'HomeController@showClients')->middleware('auth');
Route::get('/collecting-order-step-2', 'HomeController@showWarehouse')->middleware('auth');
Route::get('/collecting-order-delete', 'HomeController@deleteOrder')->middleware('auth');
