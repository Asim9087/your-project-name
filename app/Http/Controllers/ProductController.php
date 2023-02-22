<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    function list(Request $req)
    {
        $id = $req->id;
        $single = Product::find($id);
        $product =Product::select('products.id','products.category_id','products.productname', 'products.product_description', 'categories.category_name')
        ->join('categories', 'categories.id', '=', 'products.category_id')
        ->get();
        $category = Category::all();
        return view('addproduct',compact('product','category','single'));
    }

    function insert(Request $req)
        {
            $product = new Product();
            $product->category_id = $req['category_id'];
            $product->productname = $req['productname'];
            $product->product_description = $req['product_description'];
            $product->save();
            if($product)
            {
                return back()->with('success','product add succefully');
            }
            else
            {
                return redirect(route('product_form'))->with('unsuccess', 'Product did not add');
            }
        }
        
    function retrive_product()
        {
            $product =Product::select('products.id', 'products.productname', 'products.product_description', 'categories.category_name')
        	->join('categories', 'categories.id', '=', 'products.category_id')
        	->get();
            return view('productview',['product'=> $product]);
        }
        function edit_product($id)
        {
            $category = Category::all();
            $product = Product::where('id',$id)->first(); 
            return view('editproduct',['product'=> $product,'category'=>$category]);
        }
        function update_product(Request $req)
        {
            $id = $req->id;
            $productname = $req->input('productname');
            $product_description = $req->input('product_description');
            $category_id = $req->input('category_id');
            
            $isupdate = Product::where('id',$id)->update(['productname'=>$productname,'product_description'=>$product_description,'category_id'=>$category_id,]);
        
            if($isupdate)
            {
                // return redirect(route('edit_product',['id' => $id]))->with('success', 'Product update succefully');
                return  redirect()->route('product.list')->with('success','category update succefully');
            }
            else
            {
                return redirect(route('edit_product',['id' => $id]))->with('unsuccess', 'Product not update');
            }

        }

        function delete($id)
        {
            // dd($id);
            $delete_data = Product::where('id',$id)->delete();
            // dd($delete_data);
            if($delete_data)
            {
                return  redirect()->route('product.list')->with('success','category delete succefuuly');
            }  
            else
            {
                return "not deletd";
            }  
    
        }




}
