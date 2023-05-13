@extends('master')


@section('title')
Library-Add
@stop

@section('main')
 <div class="bg-white">
    <div>
      <h2 class="text-center font-extrabold ">***Add   Book***</h2>
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
  
   <form action="{{ route('libraries.store') }}" method="POST">
      @csrf
      <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
          <div>
            <label for="BookTitle" class="block mb-2 text-sm font-medium text-black ">Book Title :</label>
            <input type="text" name="BookTitle" id="BookTitle" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{old('BookTitle')}}">
          </div>
          <div>
            <label for="Author" class="block mb-2 text-sm font-medium text-black ">Author :</label>
            <input type="text" name="Author" id="Author" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{old('Author')}}">
          </div>
          <div>
            <label for="Edition" class="block mb-2 text-sm font-medium text-black ">Edition :</label>
            <input type="text" name="Edition" id="Edition" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{old('Edition')}}">
          </div>
          <div>
            <label for="BookCopies" class="block mb-2 text-sm font-medium text-black ">Book Copies:</label>
            <input type="text" name="BookCopies" id="BookCopies" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{old('BookCopies')}}">
           </div>
       
            <div>
              <label for="BookSubject" class="block mb-2 text-sm font-medium text-black">Book Subject:</label>
              <input type="text" name="BookSubject" id="BookSubject" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{old('BookSubject')}}">
             </div>
       </div>
       <div class="flex space-x-4">
         <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
         <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a href="{{ route('libraries.index') }}"> Back</a><button>
       </div>
    </form>
 </div>
@stop