@extends('master')

@section('title')
Classrooms-list
@stop

@section('main')

<div class="">
<h2 class="text-center font-extrabold ">***Classrooms List***</h2><br><br>
    <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a class="btn btn-success" href="{{ route('classrooms.create') }}"> Create</a></button>
    <br><br>

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<div>
<table class="w-full  whitespace-nowrap">

<thead>
   <tr class="text-left font-bold text-sm">
      <td class="border bg-white  py-4 px-6 border-gray-600"> #</td>
      <td class="border bg-white py-4 px-6 border-gray-600"> Name</td>
      <td class="border bg-white py-4 px-6 border-gray-600"> Capacity</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Action</td>
   </tr>
</thead>

<tbody>
@foreach ($classrooms as $classroom)
    <tr>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $classroom->id}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $classroom->Name}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $classroom->Capacity}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">
            <form action="{{ route('classrooms.destroy',$classroom->id) }}" method="Post" class="space-x-4">
                <a href="{{ route('classrooms.edit',$classroom->id) }}" class="bg-slate-700 text-white p-2 rounded-lg font-semibold">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-800 text-white p-2 rounded-lg font-semibold">Delete</button>
            </form>
        </td>
      
    </tr>
    @endforeach
</tbody>
</table>
{!! $classrooms->links() !!}
  
</div>
@stop