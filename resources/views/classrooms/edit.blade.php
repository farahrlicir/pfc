@extends('master')


@section('title')
Classroom-edit
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
            <option  value="A1" {{$classroom->Name == "A1" ? 'selected' : ''}}>A1</option>
            <option value="A2" {{$classroom->Name == "A2" ? 'selected' : ''}}>A2</option>
            <option value="B1" {{$classroom->Name == "B1" ? 'selected' : ''}} >B1</option>
            <option value="B2"  {{$classroom->Name == "B2" ? 'selected' : ''}} >B2</option>
            <option value="C1"  {{$classroom->Name == "C1" ? 'selected' : ''}} >C1</option>
            <option  value="C2" {{$classroom->Name == "C2" ? 'selected' : ''}}>C2</option>
            <option value="D1" {{$classroom->Name == "D1" ? 'selected' : ''}}>D1</option>
            <option value="D2" {{$classroom->Name == "D2" ? 'selected' : ''}} >D2</option>
            <option value="E1"  {{$classroom->Name == "E1" ? 'selected' : ''}} >E1</option>
            <option value="E2"  {{$classroom->Name == "E2" ? 'selected' : ''}} >E2</option>
            </select>
            </div>
          <div>
            <label for="Capacity" class="block mb-2 text-sm font-medium text-black ">Classroom's Capacity:</label>
            <input type="text" name="Capacity" id="Capacity" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{$classroom->Capacity}}">
        </div>
    </div>
    <div class="flex space-x-4">
      <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
      <a href="{{ route('classrooms.index') }}" class="bg-gray-200 border-black border-2 p-2 rounded-full "> Back</a>
     </div>
  </form>
 </div>
@stop
