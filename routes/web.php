<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get ('/customer_data','App\Http\Controllers\CustomerController@index');