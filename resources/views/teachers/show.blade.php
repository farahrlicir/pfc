@extends('master')

@section('title')
Teacher-info
@stop

@section('main')
 <div class="bg-white px-5">
  <div>
    <h2 class="text-center font-extrabold">*** {{ $teacher->TFirstName}} {{ $teacher->TLastName}} Info***</h2>
    <br><br><br><br>
   </div>
     <!--Student's INFO-->
     <div class="grid grid-cols-2 gap-2">
        <div class="border-bluey border-y-2 border-x-2">
        <h2 class="font-extrabold  bg-slate-100 px-6 py-2">Civique Situation</h2><br><br>
        <span><p class="font-bold text-lg px-6">Id :<span class="font-light">{{ $teacher->id }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">First Name :<span class="font-light">{{ $teacher->TFirstName}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Family Name:<span class="font-light">{{ $teacher->TLastName}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Gender :<span class="font-light">{{ $teacher->TGender }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Date-of-birth :<span class="font-light">{{ $teacher->TDateofbirth }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Place-of-birth :<span class="font-light">{{ $teacher->Tplaceofbirth }}</span></p></span><br>
        </div>
        <div class="border-purple-900 border-y-2 border-x-2">
         <h2 class="font-extrabold  bg-slate-100 px-6 py-2">Supp Info</h2><br><br>
        <span><p class="font-bold text-lg px-6">Address :<span class="font-light">{{ $teacher->Tadresse}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Nationality :<span class="font-light">{{ $teacher->Tnationality}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Blood-group :<span class="font-light">{{ $teacher->Tbloodgroup }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Disease :<span class="font-light">{{ $teacher->Tdisease}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Level :<span class="font-light">{{ $teacher->Tlevel }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Class :<span class="font-light">{{ $teacher->Tclass }}</span></p></span><br>
        </div>
     </div>
     <BR><BR>

      <!--Teacher'S INFO-->
     <div class="border-purple-900 border-y-2 border-x-2 grid grid-cols-1 w-full h-auto">
      <h2 class="font-extrabold  bg-slate-100 px-6 py-2 text-center">More Infos</h2><br><br>    
     
      <span><p class="font-bold text-lg px-6">Teacher's Num :<span class="font-light">{{ $teacher->Tphonenumber }}</span></p></span><br>
      <span><p class="font-bold text-lg px-6">Start-work:<span class="font-light">{{ $teacher->Tdatework }}</span></p></span><br>
      <span><p class="font-bold text-lg px-6">Subject:<span class="font-light">{{ $teacher->Sname }}</span></p></span><br> 
     </div>
  </div>   
@stop