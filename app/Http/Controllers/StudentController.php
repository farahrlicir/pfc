<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    
    public function index()
    {
        $students = Student::first()->paginate(10);
        return view('students.index',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'FirstName'=> 'required',
            'LastName'=> 'required',
            'Gender'=> 'required',
            'Dateofbirth'=> 'required',
            'placeofbirth'=> 'required',
            'adresse'=> 'required',
            'nationality'=> 'required',
            'bloodgroup'=> 'required',
            'disease'=> 'required',
            'level'=> 'required',
            'class'=> 'required',
            'MotherName'=> 'required',
            'MotherProfession'=> 'required',
            'PhoneNumberM'=> 'required|numeric|max:10|unique',
            'FullAddressM'=> 'required',
            'FatherName'=> 'required',
            'FatherProfession'=> 'required',
            'PhoneNumberF'=> 'required|numeric|max:10|unique',
            'FullAddressF'=> 'required',
            'FamilySituation'=> 'required',
            'Remarque'
        ]);
  
        $input = $request->all();
  
        if ($photo = $request->file('photo')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }
    
        Student::create($input);
     
        return redirect()->route('students.index')
                        ->with('success','Data has been created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'FirstName',
            'LastName',
            'Gender',
            'Dateofbirth',
            'placeofbirth',
            'adresse',
            'nationality',
            'bloodgroup',
            'disease',
            'level',
            'class',
            'MotherName',
            'MotherProfession',
            'PhoneNumberM'=> 'numeric|max:10|unique',
            'FullAddressM',
            'FatherName',
            'FatherProfession',
            'PhoneNumberF'=> 'numeric|max:10|unique',
            'FullAddressF',
            'FamilySituation',
            'Remarque'
        ]);
  
        $input = $request->all();
  
        if ($photo = $request->file('photo')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }else{
            unset($input['photo']);
        }
          
        $student->update($input);
    
        return redirect()->route('students.index')
                        ->with('success','Data has been  updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
     
        return redirect()->route('students.index')
                        ->with('success','Data has been  deleted successfully');
    }
   

 


}
