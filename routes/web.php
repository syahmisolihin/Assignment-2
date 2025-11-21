<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::get('/',[CustomerController::class,'index'])
->name('customer.index');

Route::get('/create',[CustomerController::class,'create'])
->name('customer.create');

Route::get('/store',[CustomerController::class,'store'])
->name('customer.store');


//Route::post('/','App\Http\Controllers\CustomerController@create');

//Route::get ('/view','App\Http\Controllers\CustomerController@index');