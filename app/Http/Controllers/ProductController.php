<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product_form()
    {
        $category = Category::all();
        return view('addproduct',['category'=> $category]);
    }

    function add_product(Request $req)
        {
            $product = new Product();
            $product->category_id = $req['category_id'];
            $product->productname = $req['productname'];
            $product->product_description = $req['product_description'];
            $product->save();
            if($product){
            return redirect(route('product_form'))->with('success', 'Product Add Successfully');
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
                return "update succefuuly";
            }

        }
}
