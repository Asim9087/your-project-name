<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function list(Request $req)
    {     
        $id = $req->id;
        $single = Category::find($id);
        $category = Category::all();
        return view('addcategory',compact('category','single'));
    }

    function insert(Request $req)
    {
        $category = new Category();
        $category->category_name = $req['category_name'];
        $category->company = $req['company'];
        $category->save();
        return back()->with('success','category add succefully');

    }

    function edit(Request $req)
    {
        $single = Category::where('id',$id)->first();
        return  redirect()->route('category.list',compact('single'));
    }

    function update_category(Request $req)
    {
        $id = $req->id;
        $category_name = $req->input('category_name');
        $company = $req->input('company');
        $category = Category::where('id',$id)->update(['category_name'=>$category_name,'company'=>$company,]);
        
        if($category)
        return  redirect()->route('category.list')->with('success','category update succefully');
        echo '<h1>update succefuuly</h1>';
   }


    function delete($id)
    {
        // dd($id)
        $delete_data = Category::where('id',$id)->delete();
        if($delete_data)
        {
            return  redirect()->route('category.list')->with('success','category delete succefuuly');
        }    

    }

}

