@extends('master')


@section('title')
Subject-Add
@stop

@section('main')
 <div class="bg-white">
  <div>
    <h2 class="text-center font-extrabold ">***Add   Subject***</h2>
    <br><br><br><br>
 </div>
 @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-800 font-bold">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  

 <form action="{{ route('subjects.store') }}" method="POST">
    @csrf
    <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
     
         <div>
            <label for="Sname" class="block mb-2 text-sm font-medium text-black ">Select a Subject</label>
            <select id="Sname" name="Sname" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" value="{{old('Sname')}}">
            <option  value="English" value="{{old('Sname') == "English" ? 'selected' : ''}}">English</option>
            <option value="math" value="{{old('Sname') == "math" ? 'selected' : ''}}">math</option>
            <option value="french" value="{{old('Sname') == "french" ? 'selected' : ''}}">french</option>
            <option value="science" value="{{old('Sname') == "science" ? 'selected' : ''}}">science</option>
            <option value="Art" value="{{old('Sname') == "Art" ? 'selected' : ''}}">Art</option>
            <option value="islamic" value="{{old('Sname') == "islamic" ? 'selected' : ''}}">islamic</option>
            <option value="music" value="{{old('Sname') == "music" ? 'selected' : ''}}">music</option>
            <option value="history" value="{{old('Sname') == "history" ? 'selected' : ''}}">history</option>
            <option value="geography" value="{{old('Sname') == "geography" ? 'selected' : ''}}">geography</option>
            <option value="arabic" value="{{old('Sname') == "arabic" ? 'selected' : ''}}">arabic</option>
            <option value="technology" value="{{old('Sname') == "technology" ? 'selected' : ''}}">technology</option>
            <option value="graphic design" value="{{old('Sname') == "arabic" ? 'selected' : ''}}">graphic design</option>
            </select>
            </div>
    </div>
    <div class="flex space-x-4">
      <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
      <a href="{{ route('subjects.index') }}" class="bg-gray-200 border-black border-2 p-2 rounded-full "> Back</a>
    </div>
  </form>
 </div>
@stop
