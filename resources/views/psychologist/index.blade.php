@extends('master')

@section('title')
 Psychologist list
@stop

@section('main')

<div class="">
    <a class="btn btn-success" href="{{ route('psychologists.create') }}"> Create</a>


@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<div>
<table class="w-full  whitespace-nowrap">

<thead>
   <tr class="text-left font-bold text-sm">
      <td class="border bg-white  py-4 px-6 border-gray-600"> name</td>
      <td class="border bg-white py-4 px-6 border-gray-600"> phonenumber</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Action</td>
   </tr>
</thead>

<tbody>
@foreach ($psychologists as $psychologist)
    <tr>
        <td class="border py-4 px-6">{{ $psychologist->name}}</td>
        <td class="border  py-4 px-6">{{ $psychologist->phonenumber}}</td>
        <td class="border  py-4 px-6">
            <form action="{{ route('psychologists.destroy',$psychologist->id) }}" method="Post" class="space-x-2">
                <button class="bg-slate-700 text-white p-2 rounded-lg font-semibold" ><a href="{{ route('psychologists.edit',$psychologist->id) }}">Edit</a></button>
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-800 text-white p-2 rounded-lg font-semibold">Delete</button>
            </form>
        </td>
      
    </tr>
    @endforeach
</tbody>
</table>
{!! $psychologists->links() !!}
  
</div>
@stop