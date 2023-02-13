<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','App\Http\Controllers\CrudController@show');
Route::get('delete/{id}','App\Http\Controllers\CrudController@destroy');
Route::get('add','App\Http\Controllers\CrudController@create');
Route::post('submit','App\Http\Controllers\CrudController@store');
Route::get('edit/{id}','App\Http\Controllers\CrudController@edit');
Route::post('update/{id}','App\Http\Controllers\CrudController@update');
Route::get('detail/{id}','App\Http\Controllers\CrudController@detail');