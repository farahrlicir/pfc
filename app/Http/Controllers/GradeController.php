<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
          $data =  Grade::all();
          //$student = Student::all();
       // $grades = Grade::orderBy('id','asc')->paginate(5);
      // return view('grades.index', compact('grades'));
      return view('grades.index',['data'=>$data]);
      
	
    }

 
    public function create()
    {
        return view('grades.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'FirstName'=> 'required',
            'LastName'=> 'required',
            'level'=> 'required',
            'class'=> 'required',
            'Arabicnote'=>'required',
            'RemarqueA',
            'Mathnote'=>'required',
            'RemarqueM',
            'Frenchnote'=>'required',
            'RemarqueF',
            'Islamicnote'=>'required',
            'RemarqueI',
            'Technonote'=>'required',
            'RemarqueT',
            'Civicnote'=>'required',
            'RemarqueC',
            'HistoryGeonote'=>'required',
            'RemarqueH',
            'Englishnote'=>'required',
            'RemarqueE',
            'Fullnote'=>'required',
            'RemarqueFull',
            'Arabicteacher'=>'required',
            'Englishteacher'=>'required',
            'frenchteacher'=>'required',
            'date'=>'required|date',
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
            'FirstName'=> 'required',
            'LastName'=> 'required',
            'level'=> 'required',
            'class'=> 'required',
            'Arabicnote'=>'required',
            'RemarqueA',
            'Mathnote'=>'required',
            'RemarqueM',
            'Frenchnote'=>'required',
            'RemarqueF',
            'Islamicnote'=>'required',
            'RemarqueI',
            'Technonote'=>'required',
            'RemarqueT',
            'Civicnote'=>'required',
            'RemarqueC',
            'HistoryGeonote'=>'required',
            'RemarqueH',
            'Englishnote'=>'required',
            'RemarqueE',
            'Fullnote'=>'required',
            'RemarqueFull',
            'Arabicteacher'=>'required',
            'Englishteacher'=>'required',
            'frenchteacher'=>'required',
            'date'=>'required|date',
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
