<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    
    public function index()
    {
        $libraries = Library::orderBy('id','asc')->paginate(10);
        return view('libraries.index', compact('libraries'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('libraries.create');
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
            'BookTitle'=> 'required',
            'Author'=> 'required',
            'Edition'=> 'required',
            'BookCopies'=> 'required',
            'BookSubject',
        ]);
        
        Library::create($request->post());

        return redirect()->route('libraries.index')->with('success','Data has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\school  $school
    * @return \Illuminate\Http\Response
    */
    public function show(Library $library)
    {
        return view('libraries.show',compact('library'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\School  $school
    * @return \Illuminate\Http\Response
    */
    public function edit(Library $library)
    {
        return view('libraries.edit',compact('library'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\school $school
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Library $library)
    {
        $request->validate([
            'BookTitle'=> 'required',
            'Author'=> 'required',
            'Edition'=> 'required',
            'BookCopies'=> 'required',
            'BookSubject',
        ]);
        
        $library->fill($request->post())->save();

        return redirect()->route('libraries.index')->with('success',' Data Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Schoool $school
    * @return \Illuminate\Http\Response
    */
    public function destroy(Classroom $classroom)
    {
        $library->delete();
        return redirect()->route('libraries.index')->with('success','Data has been deleted successfully');
    }
}
