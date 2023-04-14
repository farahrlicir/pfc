@extends('master')


@section('title')
Psychologist-Update
@stop

@section('main')
 <div class="bg-white">
    <div>
      <h2 class="text-center font-extrabold ">***Update    Psychologist's Info***</h2>
      <br><br><br><br>
   </div>
   
  
   <form action="{{ route('psychologists.update',$psychologist->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
        @if ($errors->any())
          <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
         @endif
         <div>
            <label for="name" class="block mb-2 text-sm font-medium text-black ">Full Name :</label>
            <input type="text" name="name" id="name" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" value="{{$psychologist->name}}" placeholder="type it ... " required>
          </div>
          <div>
            <label for="phonenumber" class="block mb-2 text-sm font-medium text-black ">Phone Number:</label>
            <input type="tel" name="phonenumber" id="phonenumber" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{$psychologist->phonenumber}}" required>
          </div>
          <div>
            <label for="workdate" class="block mb-2 text-sm font-medium text-black ">Date-of-birth:</label>
            <input type="date" name="workdate" id="workdate" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{$psychologist->workdate}}" required>
           </div>
                              
       </div>
       <div class="flex space-x-4">
         <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
         <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a href="{{ route('psychologists.index') }}"> Back</a><button>
       </div>
    </form>
 </div>
@stop