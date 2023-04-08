@extends('master')


@section('title')

@stop

@section('main')

<div class="bg-white">
<h2 class="text-center font-extrabold">***Director's Info***</h2><br><br><br>
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


 {!! $directors->links() !!}

</div>

@stop

