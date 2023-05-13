@extends('master')


@section('title')
School-Add
@stop

@section('main')
 
<div class="bg-white">
  <div>
    <h2 class="text-center font-extrabold bg-purple-200">***Add   School's Info***</h2>
    <br><br><br><br>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
       <!-- <strong>Whoops!</strong>There were some problems with your input.<br><br>-->
        <ul class=" px-2 bg-red-200 border-red-600  border-y-2 border-x-2 w-fit">
            @foreach ($errors->all() as $error)
                <li class="text-red-600 font-bold w-fit">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <br><br><br>
  @endif

<form action="{{ route('schools.store') }}" method="POST">
    @csrf
    <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="schoolname" class="block mb-2 text-sm font-medium text-black">School's Name :</label>
            <input type="text" name="schoolname" id="schoolname" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5 dark:bg-gray-700" placeholder="type it ..."   value="{{old('schoolname')}}">
           
        </div>
        <div>
            <label for="schooladresse" class="block mb-2 text-sm font-medium text-black "> Address:</label>
            <input type="text" name="schooladresse" id="schooladresse" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..." value="{{old('schooladresse')}}">
        </div>
       
        <div>
            <label for="phonenum" class="block mb-2 text-sm font-medium text-black ">Phone Number :</label>
            <input type="tel" name="phonenum" id="phonenum" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{old('phonenum')}}">
        </div>
       
          <div>
            <label for="faxnum" class="block mb-2 text-sm font-medium text-black ">Fax-Num :</label>
            <input type="text" name="faxnum" id="faxnum" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..." value="{{old('faxnum')}}">
          </div>
        
          <div>
            <label for="website" class="block mb-2 text-sm font-medium text-black ">Web-Site :</label>
            <input type="text" name="website" id="website" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..." value="{{old('website')}}">
          </div>
          
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-black ">Email :</label>
            <input type="email" name="email" id="email" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..." value="{{old('email')}}">
          </div>
         
        </div>
    <br><br>
    <div class="flex space-x-4">
      <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
      <a href="{{ route('schools.index') }}" class="bg-gray-200 border-black border-2 p-2 rounded-full "> Back</a>
     </div>
   
 </form>
</div>
@stop
