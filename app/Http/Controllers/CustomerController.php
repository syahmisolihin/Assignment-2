<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
    $data_customer = \App\Models\customer::all();
    return view('index',compact('data_customer'));
}
}
