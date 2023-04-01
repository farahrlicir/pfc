<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
   
   public function create()
   {
       $data = Student::get();
       return view('student.create',compact('data'));
   }

   public function edit()
   {
    return view('student.edit');
   }

   public function delete()
   {
    return view('student.delete');
   }

   public function list()
   {
    return view('student.list');
   }
   

}
