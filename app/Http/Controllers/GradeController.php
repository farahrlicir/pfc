<?php

namespace App\Http\Controllers;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
         //$data =  Grade::all();
          $student = Student::all();
          $grades = Grade::all();
          return view('grades.index', compact('grades'));
      // return view('grades.index',['data'=>$data]);
   
     
	
    }

 
    public function create()
    {
        return view('grades.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'Arabicnote',
            'RemarqueA',
            'Mathnote'=>'numeric|min:0|max:10',
            'RemarqueM',
            'Frenchnote',
            'RemarqueF',
            'Islamicnote',
            'RemarqueI',
            'Technonote',
            'RemarqueT',
            'Civicnote',
            'RemarqueC',
            'HistoryGeonote',
            'RemarqueH',
            'Englishnote',
            'RemarqueE',
            'Fullnote',
            'RemarqueFull',
        ]);
        
        Grade::create($request->post());

        return redirect()->route('grades.index')->with('success','Company has been created successfully.');
    }


    public function show(Grade $grade)
    {
        return view('grades.show',compact('grade'));
    }

   
    public function edit(Grade $grade)
    {
        return view('grades.edit',compact('grade'));
    }

    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'Arabicnote',
            'RemarqueA',
            'Mathnote',
            'RemarqueM',
            'Frenchnote',
            'RemarqueF',
            'Islamicnote',
            'RemarqueI',
            'Technonote',
            'RemarqueT',
            'Civicnote',
            'RemarqueC',
            'HistoryGeonote',
            'RemarqueH',
            'Englishnote',
            'RemarqueE',
            'Fullnote',
            'RemarqueFull',
        ]);
        
        $grade->fill($request->post())->save();

        return redirect()->route('grades.index')->with('success','Company Has Been updated successfully');
    }

 
    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect()->route('grades.index')->with('success','Company has been deleted successfully');
    }
}
