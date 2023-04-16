@extends('master')


@section('title')
Student-Add
@stop

@section('main')
 <div class="bg-white">
    <div>
      <h2 class="text-center font-extrabold ">***Update Student's Info***</h2>
      <br><br><br><br>
   </div>
    

  @if ($errors->any())
   <div class="alert alert-danger">
       <strong>Whoops!</strong> There were some problems with your input.<br><br>
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
  @endif

   <form action="{{ route('students.update',$student->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
        
          <div>
            <label for="FirstName" class="block mb-2 text-sm font-medium text-black ">First-Name :</label>
            <input type="text" name="FirstName" id="FirstName" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$student->FirstName}}">
          </div>
          <div>
            <label for="LastName" class="block mb-2 text-sm font-medium text-black ">Last-Name :</label>
            <input type="text" name="LastName" id="LastName" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "  value="{{$student->LastName}}">
          </div>
          <div>
            <label for="Dateofbirth" class="block mb-2 text-sm font-medium text-black ">Date-of-birth:</label>
            <input type="date" name="Dateofbirth" id="Dateofbirth" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$student->Dateofbirth}}">
           </div>
       
            <div>
              <label for="placeofbirth" class="block mb-2 text-sm font-medium text-black">place-of-birth:</label>
              <input type="text" name="placeofbirth" id="placeofbirth" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$student->placeofbirth}}">
             </div>
             <div>
              <label for="adresse" class="block mb-2 text-sm font-medium text-black">adresse:</label>
              <input type="text" name="adresse" id="adresse" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$student->adresse}}">
             </div>
             <div>
              <label for="nationality" class="block mb-2 text-sm font-medium text-black">nationality:</label>
              <input type="text" name="nationality" id="nationality" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$student->nationality}}">
             </div>
             <div>
              <label for="disease" class="block mb-2 text-sm font-medium text-black">disease:</label>
              <input type="text" name="disease" id="disease" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$student->disease}}">
             </div>
             <div>
              <label for="class" class="block mb-2 text-sm font-medium text-black ">Select a Class</label>
              <select id="class" name="class" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5"  value="{{$student->class}}">
                <option  value="A1" {{$student->class == "A1" ? 'selected' : ''}}>A1</option>
                <option value="A2" {{$student->class == "A2" ? 'selected' : ''}}>A2</option>
                <option value="B1" {{$student->class == "B1" ? 'selected' : ''}} >B1</option>
                <option value="B2"  {{$student->class == "B2" ? 'selected' : ''}} >B2</option>
                <option value="C1"  {{$student->class == "C1" ? 'selected' : ''}} >C1</option>
                <option  value="C2" {{$student->class == "C2" ? 'selected' : ''}}>C2</option>
                <option value="D1" {{$student->class == "D1" ? 'selected' : ''}}>D1</option>
                <option value="D2" {{$student->class == "D2" ? 'selected' : ''}} >D2</option>
                <option value="E1"  {{$student->class == "E1" ? 'selected' : ''}} >E1</option>
                <option value="E2"  {{$student->class == "E2" ? 'selected' : ''}} >E2</option>
              </select>
             </div>
             <div>
                 <label for="bloodgroup" class="block mb-2 text-sm font-medium text-black ">Blood-group</label>
                 <select id="bloodgroup" name="bloodgroup" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5"  value="{{$student->bloodgroup}}">
                 <option  value="A+" {{$student->bloodgroup == "A+" ? 'selected' : ''}}>A+</option>
                 <option value="A-" {{$student->bloodgroup == "A-" ? 'selected' : ''}}>A-</option>
                 <option value="B+" {{$student->bloodgroup == "B+" ? 'selected' : ''}}>B+</option>
                 <option value="B-" {{$student->bloodgroup == "B-" ? 'selected' : ''}}>B-</option>
                 <option value="AB+" {{$student->bloodgroup == "AB+" ? 'selected' : ''}}>AB+</option>
                 <option value="AB-" {{$student->bloodgroup == "AB-" ? 'selected' : ''}}>AB-</option>
                 <option value="O+" {{$student->bloodgroup == "O+" ? 'selected' : ''}}>O+</option>
                 <option value="O-" {{$student->bloodgroup == "O-" ? 'selected' : ''}}>O-</option>
                 </select>
             </div>
             <div>
                 <label for="level" class="block mb-2 text-sm font-medium text-black ">Select a Level:</label>
                 <select id="level" name="level" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5">
                 <option  value="1" {{$student->level == "1" ? 'selected' : ''}}>1</option>
                 <option value="2" {{$student->level == "2" ? 'selected' : ''}}>2</option>
                 <option value="3" {{$student->level == "3" ? 'selected' : ''}}>3</option>
                 <option value="4" {{$student->level == "4" ? 'selected' : ''}}>4</option>
                 <option value="5" {{$student->level == "5" ? 'selected' : ''}}>5</option>
                 </select>
             </div>
             <div>
               <label for="MotherName" class="block mb-2 text-sm font-medium text-black">Mother's Full Name:</label>
               <input type="text" name="MotherName" id="MotherName" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "  value="{{ $student->MotherName }}">
              </div>
              <div>
               <label for="MotherProfession" class="block mb-2 text-sm font-medium text-black">Mother's Profession:</label>
               <input type="text" name="MotherProfession" id="MotherProfession" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "  value="{{ $student->MotherProfession }}" >
              </div>
              <div>
               <label for="PhoneNumberM" class="block mb-2 text-sm font-medium text-black">Mother's Num:</label>
               <input type="text" name="PhoneNumberM" id="PhoneNumberM" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{ $student->PhoneNumberM }}" >
              </div>
              <div>
               <label for="FullAddressM" class="block mb-2 text-sm font-medium text-black">Mother's Address:</label>
               <input type="text" name="FullAddressM" id="FullAddressM" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{ $student->FullAddressM }}" >
              </div>
              <div>
               <label for="FatherName" class="block mb-2 text-sm font-medium text-black">Father's Name:</label>
               <input type="text" name="FatherName" id="FatherName" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{ $student->FatherName }}" >
              </div>
              <div>
               <label for="FatherProfession" class="block mb-2 text-sm font-medium text-black">Father's Profession:</label>
               <input type="text" name="FatherProfession" id="FatherProfession" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{ $student->FatherProfession }}" >
              </div>
              <div>
               <label for="PhoneNumberF" class="block mb-2 text-sm font-medium text-black">Father's Num:</label>
               <input type="text" name="PhoneNumberF" id="PhoneNumberF" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "  value="{{ $student->PhoneNumberF}}">
              </div>
              <div>
               <label for="FullAddressF" class="block mb-2 text-sm font-medium text-black">Father's Address:</label>
               <input type="text" name="FullAddressF" id="FullAddressF" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "  value="{{ $student->FullAddressF }}">
              </div>
              <div>
               <label for="FamilySituation" class="block mb-2 text-sm font-medium text-black">Family Situation:</label>
               <input type="text" name="FamilySituation" id="FamilySituation" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "  value="{{ $student->FamilySituation }}">
              </div>

             <div>
               <label for="photo" class="block mb-2 text-sm font-medium text-black ">Student Photo :</label>
               <input type="file" name="photo" id="photo"  value=""class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... ">
               <img src="/images/{{ $student->photo }}" width="300px">
             </div>
             <div>
               <label for="Remarque" class="block mb-2 text-sm font-medium text-black ">Remarque :</label>
               <textarea  type="text" name="Remarque" id="Remarque" placeholder="Here You can type some important infos,remarques or whatever ..." class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full col-span-2  p-2.5">{{ $student->Remarque }}</textarea>
             </div>    <br><br>

             <!--CHECKBOX-->
             <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
              <input id="female" type="radio" value="Female" {{$student->Gender == "female" ? 'checked' : ''}} name="Gender" class="w-4 h-4 text-blue-900 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="female" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
             </div>
             <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
              <input checked id="Male" type="radio" value="Male" {{$student->Gender == "male" ? 'checked' : ''}} name="Gender" class="w-4 h-4 text-blue-900 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="Male" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
             </div>
           
             <!--ENDCHECKBOX-->
               
       </div>
       <div class="flex space-x-4">
         <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
         <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a href="{{ route('students.index') }}"> Back</a><button>
       </div>
    </form>
 </div>
@stop