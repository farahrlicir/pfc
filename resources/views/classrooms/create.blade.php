@extends('master')


@section('title')
Classroom-Add
@stop

@section('main')
 <div class="bg-white">
  <div>
    <h2 class="text-center font-extrabold ">***Add   Classroom***</h2>
    <br><br><br><br>
 </div>


 <form action="{{ route('classrooms.store') }}" method="POST">
    @csrf
    <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
     
         <div>
            <label for="Name" class="block mb-2 text-sm font-medium text-black ">Select a Classroom</label>
            <select id="Name" name="Name" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" value="{{old('Name')}}">
            <option  value="A1" value="{{old('Name') == "A1" ? 'selected' : ''}}">A1</option>
            <option value="A2" value="{{old('Name') == "A2" ? 'selected' : ''}}">A2</option>
            <option value="B1" value="{{old('Name') == "B1" ? 'selected' : ''}}">B1</option>
            <option value="B2" value="{{old('Name') == "B2" ? 'selected' : ''}}">B2</option>
            <option value="C1" value="{{old('Name') == "C1" ? 'selected' : ''}}">C1</option>
            <option value="C2" value="{{old('Name') == "C2" ? 'selected' : ''}}">C2</option>
            <option value="D1" value="{{old('Name') == "D1" ? 'selected' : ''}}">D1</option>
            <option value="D2" value="{{old('Name') == "D2" ? 'selected' : ''}}">D2</option>
            <option value="E1" value="{{old('Name') == "E1" ? 'selected' : ''}}">E1</option>
            <option value="E2" value="{{old('Name') == "E2" ? 'selected' : ''}}">E2</option>
            </select>
            </div>
          <div>
            <label for="Capacity" class="block mb-2 text-sm font-medium text-black ">Classroom's Capacity:</label>
            <input type="text" name="Capacity" id="Capacity" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{old('Capacity')}}">
        </div>
        <div>
          <label for="Subject" class="block mb-2 text-sm font-medium text-black ">Select a Subject</label>
          <select id="Subject" name="Subject" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" value="{{old('Subject')}}">
          <option  value="English" value="{{old('Subject') == "English" ? 'selected' : ''}}">English</option>
          <option value="math" value="{{old('Subject') == "math" ? 'selected' : ''}}">math</option>
          <option value="french" value="{{old('Subject') == "french" ? 'selected' : ''}}">french</option>
          <option value="science" value="{{old('Subject') == "science" ? 'selected' : ''}}">science</option>
          <option value="Art" value="{{old('Subject') == "Art" ? 'selected' : ''}}">Art</option>
          <option value="islamic" value="{{old('Subject') == "islamic" ? 'selected' : ''}}">islamic</option>
          <option value="music" value="{{old('Subject') == "music" ? 'selected' : ''}}">music</option>
          <option value="history" value="{{old('Subject') == "history" ? 'selected' : ''}}">history</option>
          <option value="geography" value="{{old('Subject') == "geography" ? 'selected' : ''}}">geography</option>
          <option value="arabic" value="{{old('Subject') == "arabic" ? 'selected' : ''}}">arabic</option>
          <option value="technology" value="{{old('Subject') == "technology" ? 'selected' : ''}}">technology</option>
          <option value="graphic design" value="{{old('Subject') == "arabic" ? 'selected' : ''}}">graphic design</option>
          </select>
        </div>
        <div>
          <label for="begin" class="block mb-2 text-sm font-medium text-black ">Start-time:</label>
          <input type="time" name="begin" id="begin" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{old('begin')}}">
        </div>
        <div>
        <label for="end" class="block mb-2 text-sm font-medium text-black ">End-time:</label>
        <input type="time" name="end" id="end" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{old('end')}}">
        </div>
        <div>
          <label for="Teacher" class="block mb-2 text-sm font-medium text-black ">Teacher:</label>
          <input type="text" name="Teacher" id="Teacher" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{old('Teacher')}}">
          </div>

          
    </div>
    <div class="flex space-x-4">
      <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
      <a href="{{ route('classrooms.index') }}" class="bg-gray-200 border-black border-2 p-2 rounded-full "> Back</a>
    </div>
  </form>
 </div>

 
@stop
