<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//USER ROUTE//
Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
Route::get('/user/adds','App\Http\Controllers\AddsController@index');
Route::get('/user/adds/create','App\Http\Controllers\AddsController@create');
Route::get('/user/adds/{id}','App\Http\Controllers\AddsController@show');
Route::post('/adds','App\Http\Controllers\AddsController@store');
Route::delete('/adds/{id}','App\Http\Controllers\AddsController@destroy');
Route::get('/user/adds/edit/{id}','App\Http\Controllers\AddsController@edit');
Route::post('/update','App\Http\Controllers\AddsController@update');
Route::get('/user/profile/{id}','App\Http\Controllers\EmployeurController@edit');
Route::post('/profile/update','App\Http\Controllers\EmployeurController@update');
Route::delete('/profile/{id}','App\Http\Controllers\EmployeurController@destroy');
Route::post('/update/password','App\Http\Controllers\EmployeurController@updatePassword');

//ADMIN//

Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::delete('/admin/user/{id}','App\Http\Controllers\AdminController@destroy');
Route::get('/admin/user/create','App\Http\Controllers\AdminController@create');
Route::post('/admin/user','App\Http\Controllers\AdminController@store');
Route::get('/admin/user/edit/{id}','App\Http\Controllers\AdminController@edit');
Route::post('/admin/user/update','App\Http\Controllers\AdminController@update');
Route::post('/admin/user/update/password', 'App\Http\Controllers\AdminController@updatePassword');

Auth::routes();

