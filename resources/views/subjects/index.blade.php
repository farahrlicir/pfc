@extends('master')

@section('title')
Subject-list
@stop

@section('main')

<div class="">
<h2 class="text-center font-extrabold ">***Subject's List***</h2><br><br>
    <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a class="btn btn-success" href="{{ route('subjects.create') }}"> Create</a></button>
    <br><br>

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p class=" text-green-600 font-bold">{{ $message }}</p>
</div>
@endif
<div>
<table class="w-full  whitespace-nowrap">

<thead>
   <tr class="text-left font-bold text-sm">
      <td class="border bg-white  py-4 px-6 border-gray-600"> #</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Subject</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Action</td>
   </tr>
</thead>

<tbody>
@foreach ($subjects as $subject)
    <tr>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $subject->id}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $subject->Sname}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">
            <form action="{{ route('subjects.destroy',$subject->id) }}" method="Post" class="space-x-4">
                <a href="{{ route('subjects.edit',$subject->id) }}" class="bg-slate-700 text-white p-2 rounded-lg font-semibold">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-800 text-white p-2 rounded-lg font-semibold">Delete</button>
            </form>
        </td>
      
    </tr>
    @endforeach
</tbody>
</table>
{!! $subjects->links() !!}
  
</div>
@stop