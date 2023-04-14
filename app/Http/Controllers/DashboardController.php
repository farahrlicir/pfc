<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function count()
    {
        $students = Student::count();
        $libraries = Library::count();
        $classrooms = Classroom::count();
        return view('dashboard',compact('students','libraries','classrooms'));
        
    }
}
