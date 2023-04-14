<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        $students = Student::first()->paginate(10);
    
        return view('parents.index',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
