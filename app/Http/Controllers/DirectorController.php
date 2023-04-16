<?php

namespace App\Http\Controllers;
use App\Models\Director;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
    
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
            $directors = Director::orderBy('id','desc')->paginate(5);
            return view('directors.index', compact('directors'));
        }
    
        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
            return view('directors.create');
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
                'fullname'=>'required',
                'phonenum'=>'required',
                'email',
                'address'=>'required',
            ]);
            
            Director::create($request->post());
    
            return redirect()->route('directors.index')->with('success','Data has been created successfully.');
        }
    
        /**
        * Display the specified resource.
        *
        * @param  \App\director  $director
        * @return \Illuminate\Http\Response
        */
        public function show(Director $director)
        {
            return view('directors.show',compact('director'));
        }
    
        /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\Director  $director
        * @return \Illuminate\Http\Response
        */
        public function edit(Director $director)
        {
            return view('directors.edit',compact('director'));
        }
    
        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\director $director
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request, Director $director)
        {
            $request->validate([
                'fullname'=>'required',
                'phonenum'=>'required',
                'email',
                'address'=>'required',
            ]);
            
            $director->fill($request->post())->save();
    
            return redirect()->route('directors.index')->with('success','Data Has Been updated successfully');
        }
    
        /**
        * Remove the specified resource from storage.
        *
        * @param  \App\Director  $director
        * @return \Illuminate\Http\Response
        */
        public function destroy(Director $director)
        {
            $director->delete();
            return redirect()->route('directors.index')->with('success','Data has been deleted successfully');
        }
}
