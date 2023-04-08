@extends('master')


@section('title')
Classroom-Add
@stop

@section('main')
 <div class="bg-white">
  <div>
    <h2 class="text-center font-extrabold">***Update Classroom's Info***</h2>
    <br><br>
    
     <br><br>
 </div>


 <form action="{{ route('classrooms.update',$classroom->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
     
         <div>
            <label for="Name" class="block mb-2 text-sm font-medium text-black ">Select a Classroom</label>
            <select id="Name" name="Name" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" value="{{old('Name')}}">
            <option  value="one" {{$classroom->Name == "one" ? 'selected' : ''}}>one</option>
            <option value="two" {{$classroom->Name == "two" ? 'selected' : ''}}>two</option>
            <option value="three" {{$classroom->Name == "three" ? 'selected' : ''}} >three</option>
            <option value="four"  {{$classroom->Name == "four" ? 'selected' : ''}} >four</option>
            <option value="five"  {{$classroom->Name == "five" ? 'selected' : ''}} >five</option>
            </select>
            </div>
          <div>
            <label for="Capacity" class="block mb-2 text-sm font-medium text-black ">Classroom's Capacity:</label>
            <input type="text" name="Capacity" id="Capacity" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{$classroom->Capacity}}">
        </div>
    </div>
    <div class="flex space-x-4">
      <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
      <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a href="{{ route('classrooms.index') }}"> Back</a><button>
     </div>
  </form>
 </div>
@stop
