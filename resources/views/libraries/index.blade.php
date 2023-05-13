@extends('master')


@section('title')
Book List
@stop

@section('main')
<div class="">
        <h2 class="text-center font-extrabold ">***Books List***</h2><br><br>
        <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a class="btn btn-success" href="{{ route('libraries.create') }}"> Create</a></button>
    <div>
    <br><br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class=" text-green-800 font-bold px-2 bg-green-200 border-green-600  border-y-2 border-x-2 w-fit">{{ $message }}</p>
        </div>
       @endif
       <br><br>
     
    <table class="w-full  whitespace-nowrap" id="myTable">
    
    <thead>
       <tr class="text-left font-bold text-sm">
          <td class="border bg-white  py-4 px-6 border-gray-600"> #</td>
          <td class="border bg-white py-4 px-6 border-gray-600"> BookTitle</td>
          <td class="border bg-white py-4 px-6 border-gray-600">Author</td>
          <td class="border bg-white  py-4 px-6 border-gray-600">Edition</td>
          <td class="border bg-white py-4 px-6 border-gray-600">BookCopies</td>
          <td class="border bg-white py-4 px-6 border-gray-600">BookSubject</td>
          <td class="border bg-white py-4 px-6 border-gray-600">Action</td>
       </tr>
    </thead>
    
    <tbody>
    @foreach ($libraries as $library)
        <tr>
            <td class="border bg-white py-4 px-6 border-gray-600">{{ $library->id}}</td>
            <td class="border bg-white py-4 px-6 border-gray-600">{{ $library->BookTitle}}</td>
            <td class="border bg-white py-4 px-6 border-gray-600">{{ $library->Author}}</td>
            <td class="border bg-white py-4 px-6 border-gray-600">{{ $library->Edition}}</td>
            <td class="border bg-white py-4 px-6 border-gray-600">{{ $library->BookCopies}}</td>
            <td class="border bg-white py-4 px-6 border-gray-600">{{ $library->BookSubject}}</td>
            <td class="border bg-white py-4 px-6 border-gray-600">
                <form action="{{ route('libraries.destroy',$library->id) }}" method="Post" class="space-x-4">
                    <button class="bg-slate-700 text-white p-2 rounded-lg font-semibold" ><a href="{{ route('libraries.edit',$library->id) }}">Edit</a></button>
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')" type="submit" class="bg-red-800 text-white p-2 rounded-lg font-semibold">Delete</button>
                </form>
            </td>
          
        </tr>
        @endforeach
    </tbody>
    </table>
    {!! $libraries->links() !!}
  
    </div>
@stop