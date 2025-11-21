<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
    $data_customer = \App\Models\customers::all();
    return view('index',compact('data_customer'));
}


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Email'=>'required|email',
            'Address'=>'required',
            'PhoneNumber'=>'required',
            'Gender'=>'required',
            'Birthday'=>'required|date'
        ]);

        Customer::create([

            'Name'=>$request->Name,
            'Email'=>$request->Email,
            'Address'=>$request->Address,
            'PhoneNumber'=>$request->PhoneNumber,
            'Gender'=>$request->Gender,
            'Birthday'=>$request->Birthday,
        ]);

        return redirect()->route('customer.index')
        ->with('success','Customer created successfully');
    }
}