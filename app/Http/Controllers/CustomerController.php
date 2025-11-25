<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
       
        $query = Customer::query();

       
        if ($request->gender) {
            $query->where('gender', $request->gender);
        }

        
        if ($request->born_after_2000) {
            $query->whereYear('birthday', '>', 2000);
        }

       
        $data_customer = $query->get();

        return view('index', compact('data_customer'));
    }
}
