<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\University;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    
    function viewform()
    {
        return view('student');
    }

    function getdata(Request $req)
    {
        
        $student = new Student();
        $student->name = $req['name'];
        $student->lastname = $req['lastname'];
        $student->email = $req['email'];
        $student->surname = $req['surname'];
        $student->country = $req['country'];
        $student->save();
        $students = Student::all();
        return view('studentprofile',['students'=>$students]);    
    }

   function edit($id)
   {
    $student = Student::where('id',$id)->first();
    return view('studentupdate',['student'=>$student]);
   }

   function update(Request $req)
   {
           $id = $req->id;
           $name = $req->input('name');
           $lastname = $req->input('lastname');
           $email = $req->input('email');
           $surname = $req->input('surname');
           $country = $req->input('country');

           $isupdate = Student::where('id',$id)->update(['name'=>$name,'lastname'=>$lastname,'email'=>$email,'surname'=>$surname,'country'=>$country,]);


        if($isupdate)

        // return view('student');
        echo '<h1>update succefuuly</h1>';
   }
    
   function delete_data($id)
   {
        $delete_data = Student::where('id',$id)->delete();
        if($delete_data)
        return view('student');    
        // return $id;
   }

    function get_data()
    {
    // return University::where('student_id',3)->first();   
    }    
}
