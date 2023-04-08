<?php

namespace App\Http\Controllers;

use App\Models\Psychologist;
use Illuminate\Http\Request;

class PsychologistController extends Controller
{
    public function index()
    {
        $psychologists = Psychologist::orderBy('id','desc')->paginate(2);
        return view('psychologist.index', compact('psychologists'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('psychologist.create');
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
            'name' => 'required',
            'phonenumber' => 'required',
        ]);
        
        Psychologist::create($request->post());

        return redirect()->route('psychologists.index');
        $request->session()->flash('status','has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function show(Psychologist $psychologist)
    {
        return view('psychologist.show',compact('psychologist'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Psychologist  $company
    * @return \Illuminate\Http\Response
    */
    public function edit(Psychologist $psychologist)
    {
        return view('psychologist.edit',compact('psychologist'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\psychologist  $company
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Psychologist $psychologist)
    {
        $request->validate([
            'name' => 'required',
            'phonenumber' => 'required',
        ]);
        
        $psychologist->fill($request->post())->save();

        return redirect()->route('psychologist.index')->with('success',' Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Psychologist  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Psychologist $psychologist)
    {
        $psychologist->delete();
        return redirect()->route('psychologists.index')->with('success',' has been deleted successfully');
    }
}

