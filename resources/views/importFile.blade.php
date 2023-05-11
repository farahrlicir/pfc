@extends('master')


@section('title')
time-table
@stop

@section('main')
<div class="container mt-5 text-center">
    <h2 class="mb-4">
        Laravel 9 Import Export Excel & CSV File - <a href="https://techvblogs.com/blog/laravel-9-import-export-excel-csv-file" target="_blank">TechvBlogs</a>
    </h2>
    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <div class="custom-file text-left">
                <input type="file" name="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <button class="btn btn-primary">Import Users</button>
        <a class="btn btn-success" href="{{ route('export-users') }}">Export Users</a>
    </form>
   //

   <table class="w-full  whitespace-nowrap">

    <thead>
       <tr class="text-left font-bold text-sm">
          <td class="border bg-white  py-4 px-6 border-gray-600"> #</td>
          <td class="border bg-white py-4 px-6 border-gray-600"> Name</td>
          <td class="border bg-white py-4 px-6 border-gray-600"> Capacity</td>
          <td class="border bg-white py-4 px-6 border-gray-600">Action</td>
       </tr>
    </thead>
    
    <tbody>
    
        <tr>
            <td class="border bg-white py-4 px-6 border-gray-600">g,mgg</td>
            <td class="border bg-white py-4 px-6 border-gray-600">g,mgg</td>
            <td class="border bg-white py-4 px-6 border-gray-600">g,mgg</td>
        
          
        </tr>
    
    </tbody>
    </table>
</div>
@stop