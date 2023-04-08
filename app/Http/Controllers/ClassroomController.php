<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::orderBy('id','asc')->paginate(10);
        return view('classrooms.index', compact('classrooms'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('classrooms.create');
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
            'Name' => 'required',
            'Capacity' => 'required',
        ]);
        
        Classroom::create($request->post());

        return redirect()->route('classrooms.index')->with('success','has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\school  $school
    * @return \Illuminate\Http\Response
    */
    public function show(Classroom $classroom)
    {
        return view('classrooms.show',compact('classroom'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\School  $school
    * @return \Illuminate\Http\Response
    */
    public function edit(Classroom $classroom)
    {
        return view('classrooms.edit',compact('classroom'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\school $school
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Classroom $classroom)
    {
        $request->validate([
            'Name' => 'required',
            'Capacity' => 'required',
        ]);
        
        $classroom->fill($request->post())->save();

        return redirect()->route('classrooms.index')->with('success',' Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Schoool $school
    * @return \Illuminate\Http\Response
    */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classrooms.index')->with('success',' has been deleted successfully');
    }
}
