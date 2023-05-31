@extends('master')


@section('title')
 School's-info
@stop

@section('main')

<div class="bg-white">
     
      
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p class=" text-green-800 font-bold px-2 bg-green-200 border-green-600  border-y-2 border-x-2 w-fit">{{ $message }}</p>
    </div>
   @endif
   <br><br>

 @foreach ($schools as $school)
    <div class="">
        <div class="flex w-full bg-blue-100 justify-center items-center">
        <img src="/img/schooltable.svg" alt="">
        </div><br><br><br>
        <div class="grid grid-cols-3 ">
             <span><p class="font-bold text-lg ">Name <span class="font-light">{{ $school->schoolname}}</span></p></span><br>
             <span><p class="font-bold text-lg ">Address <span class="font-light">{{ $school->schooladresse}}</span></p></span><br>
             <span><p class="font-bold text-lg ">Num <span class="font-light">{{ $school->phonenum }}</span></p></span><br>
             <span><p class="font-bold text-lg ">Fax-Num <span class="font-light">{{ $school->faxnum }}</span></p></span><br>
             <span><p class="font-bold text-lg ">Web-Site <span class="font-light"><a href="http://127.0.0.1:8000/welcome">{{ $school->website }}</a></span></p></span><br>
             <span><p class="font-bold text-lg ">Email <span class="font-light">{{ $school->email }}</span></p></span><br>
             <span></span>
        </div><br><br><br>
        <form action="{{ route('schools.destroy',$school->id) }}" method="Post" class="flex justify-between px-3">
            <a href="{{ route('schools.edit',$school->id) }}"  class="bg-slate-700 text-white p-2 rounded-lg font-semibold">Edit</a>
            @csrf
            @method('DELETE')
           <button onclick="return confirm('Are you sure?')" type="submit" class="bg-red-800 text-white p-2  rounded-lg font-semibold">Delete</button>
           </form>
        
             
    
            
    </div>
 @endforeach


 {!! $schools->links() !!}

</div>

@stop

