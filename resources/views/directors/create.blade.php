@extends('master')


@section('title')
Director
@stop

@section('main')
 
<div class="">
    <h2 class="text-center font-extrabold">***Add   Director***</h2>
    <br><br><br><br>
</div>


<form action="{{ route('directors.store') }}" method="POST">
    @csrf
    <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="fullname" class="block mb-2 text-sm font-medium text-black">Director's FullName :</label>
            <input type="text" name="fullname" id="fullname" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5 dark:bg-gray-700" placeholder="type it ..."   value="{{old('fullname')}}">
            @error('fullname')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="phonenum" class="block mb-2 text-sm font-medium text-black ">Phone Number :</label>
            <input type="tel" name="phonenum" id="phonenum" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..." value="{{old('phonenum')}}">
        </div>
        @error('phonenum')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-black ">Email :</label>
            <input type="email" name="email" id="email" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{old('email')}}">
        </div>
        @error('email')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        <div>
            <label for="address" class="block mb-2 text-sm font-medium text-black ">Address :</label>
            <input type="text" name="address" id="address" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..." value="{{old('address')}}">
        </div>
        @error('address')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
         @enderror
        </div>
       <div class="flex space-x-4">
        <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
        <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a href="{{ route('directors.index') }}"> Back</a><button>
       </div>

 </form>
@stop
