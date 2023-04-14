@extends('master')

@section('title')
Student-list
@stop

@section('main')
 <div class="bg-white px-5">
  <div>
    <h2 class="text-center font-extrabold">*** {{ $student->FirstName}} {{ $student->LastName}} Info***</h2>
    <br><br><br><br>
   </div>
     <!--Student's INFO-->
     <div class="grid grid-cols-2 gap-2">
        <div class="border-bluey border-y-2 border-x-2">
        <h2 class="font-extrabold  bg-slate-100 px-6 py-2">Situation civique</h2><br><br>
        <span><p class="font-bold text-lg px-6">Id :<span class="font-light">{{ $student->id }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">First Name :<span class="font-light">{{ $student->FirstName}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Family Name:<span class="font-light">{{ $student->LastName}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Gender :<span class="font-light">{{ $student->Gender }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Date-of-birth :<span class="font-light">{{ $student->Dateofbirth }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Place-of-birth :<span class="font-light">{{ $student->placeofbirth }}</span></p></span><br>
        </div>
        <div class="border-purple-900 border-y-2 border-x-2">
         <h2 class="font-extrabold  bg-slate-100 px-6 py-2">Supp Info</h2><br><br>
        <span><p class="font-bold text-lg px-6">Address :<span class="font-light">{{ $student->adresse}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Nationality :<span class="font-light">{{ $student->nationality}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Blood-group :<span class="font-light">{{ $student->bloodgroup }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Disease :<span class="font-light">{{ $student->disease}}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Level :<span class="font-light">{{ $student->level }}</span></p></span><br>
        <span><p class="font-bold text-lg px-6">Class :<span class="font-light">{{ $student->class }}</span></p></span><br>
        </div>
     </div>
     <BR><BR>

      <!--PARENT'S INFO-->
      <!--MOTHER-->
     <div class="border-purple-900 border-y-2 border-x-2 grid grid-cols-1 w-full h-auto">
      <h2 class="font-extrabold  bg-slate-100 px-6 py-2 text-center">Parent's Infos</h2><br><br>    
      <span><p class="font-bold text-lg px-6">Mother's Name :<span class="font-light">{{ $student->MotherName}}</span></p></span><br>
      <span><p class="font-bold text-lg px-6">Mother's Profession :<span class="font-light">{{ $student->MotherProfession}}</span></p></span><br>
      <span><p class="font-bold text-lg px-6">Mother's Phonenum :<span class="font-light">{{ $student->PhoneNumberM }}</span></p></span><br>
      <span><p class="font-bold text-lg px-6">Mother's Address :<span class="font-light">{{ $student->FullAddressM}}</span></p></span><br>
      <!--FATHER-->
      <span><p class="font-bold text-lg px-6">Father's Name :<span class="font-light">{{ $student->FatherName }}</span></p></span><br>
      <span><p class="font-bold text-lg px-6">Father's Profession :<span class="font-light">{{ $student->FatherProfession }}</span></p></span><br> 
      <span><p class="font-bold text-lg px-6">Father's Phonenum :<span class="font-light">{{ $student->PhoneNumberF }}</span></p></span><br>
      <span><p class="font-bold text-lg px-6">Father's Address :<span class="font-light">{{ $student->FullAddressF}}</span></p></span><br>
      <span><p class="font-bold text-lg px-6">Family Situation :<span class="font-light">{{ $student->FamilySituation }}</span></p></span><br>
      <span><p class="font-bold text-lg px-6">Remarque :<span class="font-light">{{ $student->Remarque }}</span></p></span><br>
     </div>
  </div>   
@stop