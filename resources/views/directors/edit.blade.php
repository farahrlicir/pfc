@extends('master')


@section('title')

@stop

@section('main')

    <div>
    <h2 class="text-center font-extrabold">***Update Director's Info***</h2>
    <br><br>
    <button class="bg-slate-200 px-2 pb-2 py-2 rounded-full"><a href="{{ route('directors.index') }}"> Back</a><button>
     <br><br>
    </div>


<form action="{{ route('directors.update',$director->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="fullname" class="block mb-2 text-sm font-medium text-black">Director's FullName :</label>
            <input type="text" name="fullname" id="fullname" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5 dark:bg-gray-700 "value="{{ $director->fullname }}" placeholder="type it ..." >
            @error('fullname')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="phonenum" class="block mb-2 text-sm font-medium text-black ">Phone Number :</label>
            <input type="tel" name="phonenum" id="phonenum" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..." value="{{$director->phonenum}}">
        </div>
        @error('phonenum')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-black ">Email :</label>
            <input type="email" name="email" id="email" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{$director->email}}">
        </div>
        @error('email')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        <div>
            <label for="address" class="block mb-2 text-sm font-medium text-black ">Address :</label>
            <input type="text" name="address" id="address" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..." value="{{$director->address}}">
        </div>
        @error('address')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="px-2 pb-2 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save Update</button><br>
 </form>

@stop

