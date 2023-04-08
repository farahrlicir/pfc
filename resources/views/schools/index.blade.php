@extends('master')


@section('title')
 School's-info
@stop

@section('main')

<div class="bg-white">
     <div>
       <h2 class="text-center font-extrabold">***School's Info***</h2>
       <br><br><br><br>
      </div>

@foreach ($schools as $school)
        <span><p class="font-bold text-lg px-6">School's Name :<span class="font-light">{{ $school->schoolname}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Address :<span class="font-light">{{ $school->schooladresse}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Phone Number :<span class="font-light">{{ $school->phonenum }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Fax-Num  :<span class="font-light">{{ $school->faxnum }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Web-Site :<span class="font-light">{{ $school->website }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Email :<span class="font-light">{{ $school->email }}</span></p></span><br>
        <span><p class="font-bold   ">
            <form action="{{ route('schools.destroy',$school->id) }}" method="Post" class="space-x-10 px-6">
                <button class="bg-slate-700 text-white p-2 rounded-lg font-semibold" ><a href="{{ route('schools.edit',$school->id) }}">Edit</a></button>
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-800 text-white p-2  rounded-lg font-semibold">Delete</button>
                <button class="bg-slate-200  p-2 rounded-lg"><a href="{{ route('schools.create') }}"> Back</a><button>
            </form>
           
           </p>
@endforeach


 {!! $schools->links() !!}

</div>

@stop

