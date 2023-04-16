<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::orderBy('id','asc')->paginate(30);
        return view('schools.index', compact('schools'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('schools.create');
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
            'schoolname' => 'required',
            'schooladresse' => 'required',
            'phonenum' => 'required',
            'faxnum',
            'website',
            'email'
        ]);
        
        School::create($request->post());

        return redirect()->route('schools.index')->with('success','Data has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\school  $school
    * @return \Illuminate\Http\Response
    */
    public function show(School $school)
    {
        return view('schools.show',compact('school'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\School  $school
    * @return \Illuminate\Http\Response
    */
    public function edit(School $school)
    {
        return view('schools.edit',compact('school'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\school $school
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, School $school)
    {
        $request->validate([
            'schoolname' => 'required',
            'schooladresse' => 'required',
            'phonenum' => 'required',
            'faxnum',
            'website',
            'email'
        ]);
        
        $school->fill($request->post())->save();

        return redirect()->route('schools.index')->with('success','Data Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Schoool $school
    * @return \Illuminate\Http\Response
    */
    public function destroy(School $school)
    {
        $school->delete();
        return redirect()->route('schools.index')->with('success','Data has been deleted successfully');
    }
}
