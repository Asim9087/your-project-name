<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Customer;

class CustomerController extends Controller
{
    function index()
    {
        return view('customer');
        // return Customer::find(5)->getdevices;
    }
    function insert_data(Request $req)
    {
        $customer = new Customer();
        $customer->customer_name = $req['name'];
        $customer->city = $req['city'];
        $customer->phone = $req['phone'];
        $customer->save();

        if($customer)
        {
            return view('customerview');
        }
    }
    function fetch_data() 
    {

        $cust = new Customer();
        // $customer = Customer::all();
        
        $cust = Customer::where('id',3)->get();       
        return view('customerview',['customer'=>$cust]);

    }
    
}
