<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers =Teacher::orderBy('id','asc')->paginate(12);
        return view('teachers.index', compact('teachers'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Tphoto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'TFirstName'=>'max:30',
            'TLastName',
            'TGender',
            'TDateofbirth',
            'Tplaceofbirth',
            'Tadresse',
            'Tnationality',
            'Tphonenumber'=>'unique:teachers',
            'Tdisease',
            'Tbloodgroup',
            'Tlevel',
            'Tclass',
            'Tdatework',
            'Sname',
        ]);
  
        $input = $request->all();
        
        if ($Tphoto = $request->file('Tphoto')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $Tphoto->getClientOriginalExtension();
            $Tphoto->move($destinationPath, $profileImage);
            $input['Tphoto'] = "$profileImage";
        }
    
        Teacher::create($input);
     
        return redirect()->route('teachers.index')
                        ->with('success','Data has been created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show',compact('teacher'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit',compact('teacher'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'Tphoto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'TFirstName'=>'max:30',
            'TLastName',
            'TGender',
            'TDateofbirth',
            'Tplaceofbirth',
            'Tadresse',
            'Tnationality',
            'Tphonenumber',
            'Tdisease',
            'Tbloodgroup',
            'Tlevel',
            'Tclass',
            'Tdatework',
            'Sname',
        ]);
  
        $input = $request->all();
  
        if ($Tphoto = $request->file('Tphoto')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $Tphoto->getClientOriginalExtension();
            $Tphoto->move($destinationPath, $profileImage);
            $input['Tphoto'] = "$profileImage";
        }else{
            unset($input['Tphoto']);
        }
          
        $teacher->update($input);
    
        return redirect()->route('teachers.index')
                        ->with('success','Data has been  updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
     
        return redirect()->route('teachers.index')
                        ->with('success','Data has been  deleted successfully');
    }
}
