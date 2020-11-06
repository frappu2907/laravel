<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//EMPLOYEUR ROUTE//

//ROUTE SHOW ALL THE PRODUCTS
Route::get('/user/adds','App\Http\Controllers\AddsController@index')->middleware('auth');
//ROUTE CREATE NEW PRODUCT
Route::get('/user/adds/create','App\Http\Controllers\AddsController@create')->middleware('auth');
//ROUTE SHOW A SINGLE PRODUCT
Route::get('/user/adds/{id}','App\Http\Controllers\AddsController@show')->middleware('auth');
//ROUTE POST A NEW PRODUCTS//
Route::post('/adds','App\Http\Controllers\AddsController@store')->middleware('auth');
//ROUTE DELETE
Route::delete('/adds/{id}','App\Http\Controllers\AddsController@destroy')->middleware('auth');

//ROUTE FORM UPDATE//
Route::get('/user/adds/edit/{id}','App\Http\Controllers\AddsController@edit')->middleware('auth');
Route::post('/update','App\Http\Controllers\AddsController@update')->middleware('auth');

//ROUTE DASHBOARD USER//
Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');

//ROUTE TO FORM UPDATE//
Route::get('/user/profile/{id}','App\Http\Controllers\EmployeurController@edit');
Route::post('/profile/update','App\Http\Controllers\EmployeurController@update')->middleware('auth');


//ROUTE DELETE ACCOUNT EMPLOYEUR//
Route::delete('/profile/{id}','App\Http\Controllers\EmployeurController@destroy')->middleware('auth');

//ROUTE UPDATE PASSWORD EMPLOYEUR//
Route::post('/update/password','App\Http\Controllers\EmployeurController@updatePassword')->middleware('auth');



Auth::routes();

