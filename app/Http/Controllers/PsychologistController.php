<?php

namespace App\Http\Controllers;

use App\Models\Psychologist;
use Illuminate\Http\Request;

class PsychologistController extends Controller
{
    public function index()
    {
        $psychologists = Psychologist::orderBy('id','asc')->paginate(10);
        return view('psychologists.index', compact('psychologists'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('psychologists.create');
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
            'name' => 'required|min:4',
            'phonenumber' => 'required|numeric',
        ]);
        
        Psychologist::create($request->post());

        return redirect()->route('psychologists.index');
        $request->session()->flash('status','Data has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function show(Psychologist $psychologist)
    {
        return view('psychologists.show',compact('psychologist'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Psychologist  $company
    * @return \Illuminate\Http\Response
    */
    public function edit(Psychologist $psychologist)
    {
        return view('psychologists.edit',compact('psychologist'));
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
            'name' => 'required|min:4',
            'phonenumber' => 'required|numeric',
        ]);
        
        $psychologist->fill($request->post())->save();

        return redirect()->route('psychologists.index')->with('success','Data Has Been updated successfully');
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
        return redirect()->route('psychologists.index')->with('success','Data has been deleted successfully');
    }
}

