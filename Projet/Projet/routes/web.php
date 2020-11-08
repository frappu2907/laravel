<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

//ROUTE INDEX 
Route::get('/', 'App\Http\Controllers\viewController@index');
//ROUTE SEARCH
Route::get('/search','App\Http\Controllers\viewController@search');


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

//ADMIN ADS//
Route::get('/admin/ads','App\Http\Controllers\AdminController@indexAds')->middleware('admin');
Route::get('/admin/ads/{id}','App\Http\Controllers\AdminController@showAds')->middleware('admin');
//Bug with the Delete NEED TO CHECK ASAP
Route::delete('/admin/ad/delete/{id}','App\Http\Controllers\AdminController@destroyAd')->middleware('admin');
Route::get('/admin/create/ad','App\Http\Controllers\AdminController@createAd')->middleware('admin');
Route::post('/admin/ad','App\Http\Controllers\AdminController@storeAd')->middleware('admin');
Route::get('/admin/ad/edit/{id}','App\Http\Controllers\AdminController@editAd')->middleware('admin');
Route::post('/admin/ad/update','App\Http\Controllers\AdminController@updateAd')->middleware('admin');

Auth::routes();

