<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request){
       $student= new Student();
       $student->first_name=$request->first_name;
       $student->last_name=$request->last_name;
       $student->roll=$request->roll;
       $student->email=$request->email;
       $student->phone=$request->phone;
       $student->save();
       return back()->with('message','succces');

    }
}
