<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
    function list(Request $req)
    {
        $product = Product::all();
        $order =  Order::all();
        return view('addorder',compact('product','order'));
    }
    function insert(Request $request)
    {
            $a =json_encode($request->data);
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->ordercode =$request['ordercode'];
            $order->address = $request['address'];
            $order->item = $a;
            $order->save();
    
            if($order)
            {
                return back()->with('success','order booked');
            }
            else
            {
                return back()->with('success','order not booked');
            }
    } 

}
