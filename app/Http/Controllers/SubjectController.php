<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    
    public function index()
    {
        $subjects = Subject::orderBy('id','asc')->paginate(12);
        return view('subjects.index', compact('subjects'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('subjects.create');
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
            'Sname'
           
        ]);
        
        Subject::create($request->post());

        return redirect()->route('subjects.index')->with('success','Data has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\school  $school
    * @return \Illuminate\Http\Response
    */
    public function show(Subject $subject)
    {
        return view('subjects.show',compact('subject'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\School  $school
    * @return \Illuminate\Http\Response
    */
    public function edit(Subject $subject)
    {
        return view('subjects.edit',compact('subject'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\school $school
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'Sname'
        ]);
        
        $subject->fill($request->post())->save();

        return redirect()->route('subjects.index')->with('success','Data Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Schoool $school
    * @return \Illuminate\Http\Response
    */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subjects.index')->with('success','Data has been deleted successfully');
    }
}
