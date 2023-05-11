@extends('master')

@section('title')
Parent-list
@stop

@section('main')

<div class="">
<h2 class="text-center font-extrabold ">***Parent's List***</h2><br><br>
    <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a class="btn btn-success" href="{{ route('students.create') }}"> Create</a></button>
    <br><br>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p class=" text-green-600">{{ $message }}</p>
    </div>
   @endif
 
<table class="w-full  whitespace-nowrap">

<thead>
   <tr class="text-left font-bold text-sm">
      <td class="border bg-white  py-4 px-6 border-gray-600">Pupil's Id</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Mother's num</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Father's num</td>
      <td class="border bg-white  py-4 px-6 border-gray-600">Father's Add</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Mother's Add</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Action</td>
   </tr>
</thead>

<tbody>
@foreach ($students as $student)
    <tr>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ ++$i }}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $student->PhoneNumberM }}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $student->PhoneNumberF }}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $student->FullAddressF}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $student->FullAddressM}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">
            <form action="{{ route('students.destroy',$student->id) }}" method="Post" class="space-x-4">
                <a href="{{ route('students.edit',$student->id) }}" class="bg-slate-700 text-white p-2 rounded-lg font-semibold">Edit</a>
                <a href="{{route('students.show',$student->id)}}" class="bg-slate-700 text-white p-2 rounded-lg font-semibold">Show</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-800 text-white p-2 rounded-lg font-semibold">Delete</button>
            </form>
            

        </td>
      
    </tr>
    @endforeach
</tbody>
</table>
{!! $students->links() !!}
  
</div>
@stop