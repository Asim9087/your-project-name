<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function add_category()
    {
        return view('addcategory');
    }

    function insert_category(Request $req)
    {
        $category = new Category();
        $category->category_name = $req['category_name'];
        $category->company = $req['company'];
        $category->save();
        $category = Category::all();
        return view('showcategory',['category'=>$category]);
        // $customer = Category::all();
        // return view('showcategory');

    }

    function edit($id)
    {
        $category = Category::where('id',$id)->first();
    return view('updatecategory',['category'=>$category]);
    }

    function update_category(Request $req)
    {
        $id = $req->id;
        $category_name = $req->input('category_name');
        $company = $req->input('company');
        $category = Category::where('id',$id)->update(['category_name'=>$category_name,'company'=>$company,]);
        
        if($category)

        // return view('showcategory');
        echo '<h1>update succefuuly</h1>';
   }
    }

