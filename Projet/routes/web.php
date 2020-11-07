<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//USER ROUTE//
Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
Route::get('/user/adds','App\Http\Controllers\AddsController@index')->middleware('auth');
Route::get('/user/adds/create','App\Http\Controllers\AddsController@create')->middleware('auth');
Route::get('/user/adds/{id}','App\Http\Controllers\AddsController@show')->middleware('auth');
Route::post('/adds','App\Http\Controllers\AddsController@store')->middleware('auth');
Route::delete('/adds/{id}','App\Http\Controllers\AddsController@destroy')->middleware('auth');
Route::get('/user/adds/edit/{id}','App\Http\Controllers\AddsController@edit')->middleware('auth');
Route::post('/update','App\Http\Controllers\AddsController@update')->middleware('auth');
Route::get('/user/profile/{id}','App\Http\Controllers\EmployeurController@edit')->middleware('auth');
Route::post('/profile/update','App\Http\Controllers\EmployeurController@update')->middleware('auth');
Route::delete('/profile/{id}','App\Http\Controllers\EmployeurController@destroy')->middleware('auth');
Route::post('/update/password','App\Http\Controllers\EmployeurController@updatePassword')->middleware('auth');

//ADMIN//

Route::get('/admin','App\Http\Controllers\AdminController@index')->middleware('admin');
Route::delete('/admin/user/{id}','App\Http\Controllers\AdminController@destroy')->middleware('admin');
Route::get('/admin/user/create','App\Http\Controllers\AdminController@create')->middleware('admin');
Route::post('/admin/user','App\Http\Controllers\AdminController@store')->middleware('admin');
Route::get('/admin/user/edit/{id}','App\Http\Controllers\AdminController@edit')->middleware('admin');
Route::post('/admin/user/update','App\Http\Controllers\AdminController@update')->middleware('admin');
Route::post('/admin/user/update/password', 'App\Http\Controllers\AdminController@updatePassword')->middleware('admin');

Auth::routes();

