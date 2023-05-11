<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
  
        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contacting us. we will contact you shortly.']);
    }
  
}
