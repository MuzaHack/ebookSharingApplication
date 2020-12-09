<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/subview/master', 'App\Http\Controllers\ebookController@index'); 

Route::get('/subview/nav', 'App\Http\Controllers\navController@index'); 

Route::get('/subview/about', 'App\Http\Controllers\aboutController@index'); 

Route::get('/subview/list', 'App\Http\Controllers\booklistController@index'); 
