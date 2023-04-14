@extends('master')


@section('title')
Library-Update
@stop

@section('main')
 <div class="bg-white">
    <div>
      <h2 class="text-center font-extrabold ">***Update Book's Info***</h2>
      <br><br><br><br>
   </div>
  
  
   <form action="{{ route('libraries.update',$library->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
          <div>
            <label for="BookTitle" class="block mb-2 text-sm font-medium text-black ">Book Title :</label>
            <input type="text" name="BookTitle" id="BookTitle" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..."   value="{{$library->BookTitle}}">
          </div>
          <div>
            <label for="Author" class="block mb-2 text-sm font-medium text-black ">Author :</label>
            <input type="text" name="Author" id="Author" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..."  value="{{$library->Author}}">
          </div>
          <div>
            <label for="Edition" class="block mb-2 text-sm font-medium text-black ">Edition :</label>
            <input type="text" name="Edition" id="Edition" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ..."  value="{{$library->Edition}}">
          </div>
          <div>
            <label for="BookCopies" class="block mb-2 text-sm font-medium text-black ">Book Copies:</label>
            <input type="text" name="BookCopies" id="BookCopies" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "  value="{{$library->BookCopies}}">
           </div>
       
            <div>
              <label for="BookSubject" class="block mb-2 text-sm font-medium text-black">Book Subject:</label>
              <input type="text" name="BookSubject" id="BookSubject" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "  value="{{$library->BookSubject}}">
             </div>
       </div>
       <div class="flex space-x-4">
         <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
         <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a href="{{ route('libraries.index') }}"> Back</a><button>
       </div>
    </form>
 </div>
@stop