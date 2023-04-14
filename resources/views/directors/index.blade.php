@extends('master')


@section('title')

@stop

@section('main')

<div class="bg-white">
 <div class="flex justify-center px-5 py-5">
    <div class="border-bluey border-y-2 border-x-2">
         <h2 class="font-extrabold  bg-slate-100 px-6 py-2"> ***Director's Info***</h2><br><br>
        @foreach ($directors as $director)
          <span><p class="font-bold text-lg px-6">Director's FullName :<span class="font-light">{{ $director->fullname}}</span></p></span><br>
          <span><p class="font-bold text-lg px-6">Phone Number :<span class="font-light">{{ $director->phonenum}}</span></p></span><br>
          <span><p class="font-bold text-lg px-6">Email :<span class="font-light">{{ $director->email }}</span></p></span><br>
          <span><p class="font-bold text-lg px-6">Address :<span class="font-light">{{ $director->address }}</span></p></span><br>
          <span><p class="font-bold   ">
            <form action="{{ route('directors.destroy',$director->id) }}" method="Post" class="space-x-10 px-6">
                <button class="bg-slate-700 text-white p-2 rounded-lg font-semibold" ><a href="{{ route('directors.edit',$director->id) }}">Edit</a></button>
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-800 text-white p-2  rounded-lg font-semibold">Delete</button>
                <button class="bg-slate-200  p-2 rounded-lg"><a href="{{ route('directors.create') }}"> Back</a><button>
            </form>
            </p>

        @endforeach
    </div>
</div>
 {!! $directors->links() !!}

</div>

@stop

