@extends('master')

@section('title')
Teacher-list
@stop

@section('main')

<div class="">
<h2 class="text-center font-extrabold ">***Teachers List***</h2><br><br>
    <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a class="btn btn-success" href="{{ route('teachers.create') }}"> Create</a></button>
    <br><br>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p class=" text-green-800 font-bold px-2 bg-green-200 border-green-600  border-y-2 border-x-2 w-fit">{{ $message }}</p>
    </div>
   @endif
   <br><br>
 
<table class="w-full  whitespace-nowrap">

<thead>
   <tr class="text-left font-bold text-sm">
      <td class="border bg-white  py-4 px-6 border-gray-600"> #</td>
      <td class="border bg-white py-4 px-6 border-gray-600">photo</td>
      <td class="border bg-white py-4 px-6 border-gray-600">FirstName</td>
      <td class="border bg-white  py-4 px-6 border-gray-600">LastName</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Level</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Subject</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Action</td>
   </tr>
</thead>

<tbody>
@foreach ($teachers as $teacher)
    <tr>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ ++$i }}</td>
        <td class="border bg-white py-4 px-6 border-gray-600"><img src="/images/{{ $teacher->Tphoto }}" class="  w-14 h-14 rounded-full"></td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $teacher->TFirstName}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $teacher->TLastName}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $teacher->Tlevel}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $teacher->Sname}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">
            <form action="{{ route('teachers.destroy',$teacher->id) }}" method="Post" class="space-x-10">
                <a href="{{ route('teachers.edit',$teacher->id) }}" class="bg-slate-700 text-white p-2 rounded-lg font-semibold">Edit</a>
                <a href="{{route('teachers.show',$teacher->id)}}" class="bg-slate-700 text-white p-2 rounded-lg font-semibold">Show</a>
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-800 text-white p-2 rounded-lg font-semibold">Delete</button>
            </form>
            

        </td>
      
    </tr>
    @endforeach
</tbody>
</table>
{!! $teachers->links() !!}
  
</div>
@stop