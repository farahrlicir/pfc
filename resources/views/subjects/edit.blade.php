@extends('master')


@section('title')
Subject-edit
@stop

@section('main')
 <div class="bg-white">
  <div>
    <h2 class="text-center font-extrabold">***Update Subject's Info***</h2>
    <br><br>
    
     <br><br>
 </div>


 <form action="{{ route('subjects.update',$subject->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
     
        <div>
           <label for="Sname" class="block mb-2 text-sm font-medium text-black ">Select a Subject</label>
           <select id="Sname" name="Sname" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" value="{{old('Sname')}}">
           <option  value="English" {{$subject->Sname == "English" ? 'selected' : ''}}>English</option>
           <option value="math" {{$subject->Sname == "math" ? 'selected' : ''}}>math</option>
           <option value="french" {{$subject->Sname == "french" ? 'selected' : ''}}>french</option>
           <option value="science" {{$subject->Sname == "science" ? 'selected' : ''}}>science</option>
           <option value="Art" {{$subject->Sname == "Art" ? 'selected' : ''}}>Art</option>
           <option value="islamic" {{$subject->Sname == "islamic" ? 'selected' : ''}}>islamic</option>
           <option value="music" {{$subject->Sname == "music" ? 'selected' : ''}}>music</option>
           <option value="history" {{$subject->Sname == "history" ? 'selected' : ''}}>history</option>
           <option value="geography" {{$subject->Sname == "geography" ? 'selected' : ''}}>geography</option>
           <option value="arabic" {{$subject->Sname == "arabic" ? 'selected' : ''}}>arabic</option>
           <option value="technology" {{$subject->Sname == "technology" ? 'selected' : ''}}>technology</option>
           <option value="graphic design" {{$subject->Sname == "arabic" ? 'selected' : ''}}>graphic design</option>
           </select>
           </div>
   </div>
    
    <div class="flex space-x-4">
      <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
      <a href="{{ route('subjects.index') }}" class="bg-gray-200 border-black border-2 p-2 rounded-full "> Back</a>
     </div>
  </form>
 </div>
@stop
