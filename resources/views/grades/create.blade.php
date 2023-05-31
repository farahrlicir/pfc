@extends('master')


@section('title')
Book List
@stop

@section('main')

   <div class="bg-white" id="tbl_exporttable_to_xls">
    <button class="bg-green-500 rounded-full px-5 text-white" onclick="ExportToExcel('xlsx')">Export table to excel</button>
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
  <form action="{{ route('grades.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table cellspacing="3"class="border" style="white-space:nowrap; margin-top:2%; width:660px; border:1px solid black; height:300px; background-color:white;">
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Subjects
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Marks
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Remarques
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Arabic
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;"> <input type="text" name="Arabicnote" id="Arabicnote" class=" border border-black text-gray-900 text-sm rounded-sm w-fit focus:ring-purple-900 focus:border-purple-900 block p-2.5" value="{{old('Arabicnote')}}">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">English
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">French
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Math
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Techno
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Civic
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">History&Geo
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center; border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
        <tr>
            <td style="text-align:left;  border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">Full-Mark
            <td style="text-align:center;  border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
            <td style="text-align:center;  border:1px solid black; padding-left:8px; padding-right:8px; font-size:11px; font-weight:bold;">
        </tr>
    </table>
    <div class="flex space-x-4">
        <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
        <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a href="{{ route('grades.index') }}"> Back</a><button>
      </div>
   </div>
</form>
@stop