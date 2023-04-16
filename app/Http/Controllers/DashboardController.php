<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Director;
use App\Models\Classroom;
use App\Models\Psychologist;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function count()
    {
        $students = Student::count();
        $libraries = Library::count();
        $classrooms = Classroom::count();
        $teachers = Teacher::count();
        $psychologists = Psychologist::count();
        $directors = Director::count();
        $subjects = Subject::count();
        return view('dashboard',compact('students','libraries','classrooms','teachers','psychologists','directors','subjects'));
        
    }
}
