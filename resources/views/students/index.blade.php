@extends('master')

@section('title')
Pupil-list
@stop

@section('main')

<div class="" >
<h2 class="text-center font-extrabold ">***Pupils List (class:A1-D2)***</h2><br><br> 
    <div class="flex justify-between  ">
        <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a class="btn btn-success" href="{{ route('students.create') }}"> Create</a></button>
       <!-- <form type="get" action="{{url ('/students') }}" class="flex">-->
         <!--<button type="submit" class=" border-black  border-2 p-2">ok</button>-->
        <!--</form>-->
    </div>
    <br><br>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p class=" text-green-600 font-bold">{{ $message }}</p>
    </div>
   @endif
 
<table class="w-full  whitespace-nowrap" >

<thead>
   <tr class="text-left font-bold text-sm">
      <td class="border bg-white  py-4 px-6 border-gray-600"> #</td>
      <td class="border bg-white py-4 px-6 border-gray-600">photo</td>
      <td class="border bg-white py-4 px-6 border-gray-600">FirstName</td>
      <td class="border bg-white  py-4 px-6 border-gray-600">LastName</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Level</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Class</td>
      <td class="border bg-white py-4 px-6 border-gray-600">Action</td>
   </tr>
</thead>

<tbody>
@foreach ($students as $student)
    <tr>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ ++$i }}</td>
        <td class="border bg-white py-4 px-6 border-gray-600"><img src="/images/{{ $student->photo }}" class="  w-14 h-14 rounded-full"></td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $student->FirstName}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $student->LastName}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $student->level}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">{{ $student->class}}</td>
        <td class="border bg-white py-4 px-6 border-gray-600">
            <form action="{{ route('students.destroy',$student->id) }}" method="Post" class="space-x-10">
                <a href="{{ route('students.edit',$student->id) }}" class="bg-slate-700 text-white p-2 rounded-lg font-semibold">Edit</a>
                <a href="{{route('students.show',$student->id)}}" class="bg-slate-700 text-white p-2 rounded-lg font-semibold">Show</a>
                <a href="#" class="bg-slate-700 text-white p-2 rounded-lg font-semibold">Grade-Sheet</a>
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure want delete?')" class="bg-red-800 text-white p-2 rounded-lg font-semibold">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
{!! $students->links() !!}

</div>
@stop