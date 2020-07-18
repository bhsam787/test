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

Route::get('/','CustomerController@index');
Route::get('/create','CustomerController@create');
Route::Post('/store','CustomerController@store');
Route::get('/show','CustomerController@show');
Route::get('/edit/{id}/customer','CustomerController@edit');
Route::post('/update/{id}/customer','CustomerController@update');
Route::get('/delete/{id}/customer','CustomerController@destroy');

Route::resource('/customer','CustomerResourceController');
