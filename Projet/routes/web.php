<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    return view('user');
});

//ROUTE SHOW ALL THE PRODUCTS
Route::get('/user/adds','App\Http\Controllers\AddsController@index');
//ROUTE CREATE NEW PRODUCT
Route::get('/user/adds/create','App\Http\Controllers\AddsController@create');
//ROUTE SHOW A SINGLE PRODUCT
Route::get('/user/adds/{id}','App\Http\Controllers\AddsController@show');
//ROUTE POST A NEW PRODUCTS//
Route::post('/adds','App\Http\Controllers\AddsController@store');
//ROUTE DELETE
Route::delete('/adds/{id}','App\Http\Controllers\AddsController@destroy');
//ROUTE FORM UPDATE//
Route::get('/user/adds/edit/{id}','App\Http\Controllers\AddsController@edit');
//ROUTE UPDATE//
Route::post('/update','App\Http\Controllers\AddsController@update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
