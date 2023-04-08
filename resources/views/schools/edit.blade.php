@extends('master')


@section('title')
School-update
@stop

@section('main')
 
   <div class="bg-white">
      <h2 class="text-center font-extrabold">***Update  School's Info***</h2>
      <br><br><br><br>

     <form action="{{ route('schools.update',$school->id) }}" method="POST">
      @csrf
      @method('PUT')
     <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="schoolname" class="block mb-2 text-sm font-medium text-black">School's Name :</label>
            <input type="text" name="schoolname" id="schoolname" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5 dark:bg-gray-700" placeholder="type it ..."  value="{{$school->schoolname}}">
            @error('schoolname')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="schooladresse" class="block mb-2 text-sm font-medium text-black "> Address:</label>
            <input type="text" name="schooladresse" id="schooladresse" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..." value="{{$school->schooladresse}}">
        </div>
        @error('schooladresse')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        <div>
            <label for="phonenum" class="block mb-2 text-sm font-medium text-black ">Phone Number :</label>
            <input type="tel" name="phonenum" id="phonenum" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{$school->phonenum}}">
        </div>
        @error('phonenum')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        <div>
            <label for="faxnum" class="block mb-2 text-sm font-medium text-black ">Fax-Num :</label>
            <input type="text" name="faxnum" id="faxnum" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..." value="{{$school->faxnum}}">
        </div>
        @error('faxnum')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        <div>
            <label for="website" class="block mb-2 text-sm font-medium text-black ">Web-Site :</label>
            <input type="text" name="website" id="website" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..."value="{{$school->website}}">
        </div>
        @error('website')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-black ">Email :</label>
            <input type="email" name="email" id="email" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..."value="{{$school->email}}" >
        </div>
        @error('email')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
         </div>
        <div class="flex space-x-4">
         <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
         <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a href="{{ route('schools.index') }}"> Back</a><button>
       </div>
     </form>
    </div>
@stop

