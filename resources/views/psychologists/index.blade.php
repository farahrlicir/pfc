@extends('master')

@section('title')
 Psychologist list
@stop

@section('main')

<div class="">
    <h2 class="text-center font-extrabold ">***Psychologists List***</h2><br><br>
    <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a class="btn btn-success" href="{{ route('psychologists.create') }}"> Create</a></button>
    <br><br>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p class=" text-green-800 font-bold px-2 bg-green-200 border-green-600  border-y-2 border-x-2 w-fit">{{ $message }}</p>
    </div>
   @endif
   <br><br>
<div>
<table class="w-full  whitespace-nowrap">
   
<thead>
   <tr class="text-left font-bold text-sm">
      <td class="border bg-white  py-4 px-6 border-gray-900">#</td>
      <td class="border bg-white  py-4 px-6 border-gray-900">Name</td>
      <td class="border bg-white py-4 px-6 border-gray-900">Phonenumber</td>
      <td class="border bg-white py-4 px-6 border-gray-900">Start Date</td>
      <td class="border bg-white py-4 px-6 border-gray-900">Action</td>
   </tr>
</thead>

<tbody>
@foreach ($psychologists as $psychologist)
    <tr>
        <td class="border bg-white py-4 px-6 border-gray-900">{{ $psychologist->id}}</td>
        <td class="border bg-white py-4 px-6 border-gray-900">{{ $psychologist->name}}</td>
        <td class="border bg-white py-4 px-6 border-gray-900">{{ $psychologist->phonenumber}}</td>
        <td class="border bg-white py-4 px-6 border-gray-900">{{ $psychologist->workdate}}</td>
        <td class="border bg-white py-4 px-6 border-gray-900">
            <form action="{{ route('psychologists.destroy',$psychologist->id) }}" method="Post" class="space-x-4">
                <a href="{{ route('psychologists.edit',$psychologist->id) }}"class="bg-slate-700 text-white p-2 rounded-lg font-semibold" >Edit</a>
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Are you sure?')" type="submit" class="bg-red-800 text-white p-2 rounded-lg font-semibold">Delete</button>
            </form>
        </td>
      
    </tr>
    @endforeach
</tbody>
</table>
{!! $psychologists->links() !!}
  
</div>
@stop