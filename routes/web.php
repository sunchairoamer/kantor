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
Route::get('/dashboard', 'DashboardController@index');

Route::get('/','ContactFormController@home');
Route::post('send/email','ContactFormController@sendemail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
