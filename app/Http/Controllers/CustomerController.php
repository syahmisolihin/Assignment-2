<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        // Start query
        $query = Customer::query();

        // Filter by gender
        if ($request->gender) {
            $query->where('gender', $request->gender);
        }

        // Filter by birthday (born after 2000)
        if ($request->born_after_2000) {
            $query->whereYear('birthday', '>', 2000);
        }

        // Get all filtered/unfiltered results
        $data_customer = $query->get();

        return view('index', compact('data_customer'));
    }
}
