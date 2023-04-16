@extends('master')


@section('title')
Teacher-info-Update
@stop

@section('main')
 <div class="bg-white">
    <div>
      <h2 class="text-center font-extrabold ">***Update Teacher's Info***</h2>
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

   <form action="{{ route('teachers.update',$teacher->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class=" px-2 grid gap-6 mb-6 md:grid-cols-2">
        
          <div>
            <label for="TFirstName" class="block mb-2 text-sm font-medium text-black ">First-Name :</label>
            <input type="text" name="TFirstName" id="TFirstName" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$teacher->TFirstName}}">
          </div>
          <div>
            <label for="TLastName" class="block mb-2 text-sm font-medium text-black ">Last-Name :</label>
            <input type="text" name="TLastName" id="TLastName" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "  value="{{$teacher->TLastName}}">
          </div>
          <div>
            <label for="TDateofbirth" class="block mb-2 text-sm font-medium text-black ">Date-of-birth:</label>
            <input type="date" name="TDateofbirth" id="TDateofbirth" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$teacher->TDateofbirth}}">
           </div>
           <div>
            <label for=" Tdatework" class="block mb-2 text-sm font-medium text-black ">Start-work:</label>
            <input type="date" name=" Tdatework" id=" Tdatework" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " "   value="{{$teacher->Tdatework}}">
           </div>
       
            <div>
              <label for="Tplaceofbirth" class="block mb-2 text-sm font-medium text-black">place-of-birth:</label>
              <input type="text" name="Tplaceofbirth" id="Tplaceofbirth" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$teacher->Tplaceofbirth}}">
             </div>
             <div>
              <label for="Tadresse" class="block mb-2 text-sm font-medium text-black">adresse:</label>
              <input type="text" name="Tadresse" id="Tadresse" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$teacher->Tadresse}}">
             </div>
             <div>
              <label for="Tnationality" class="block mb-2 text-sm font-medium text-black">nationality:</label>
              <input type="text" name="Tnationality" id="Tnationality" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$teacher->Tnationality}}">
             </div>
             <div>
              <label for="Tdisease" class="block mb-2 text-sm font-medium text-black">disease:</label>
              <input type="text" name="Tdisease" id="Tdisease" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... "   value="{{$teacher->Tdisease}}">
             </div>
             <div>
              <label for="Tclass" class="block mb-2 text-sm font-medium text-black ">Select a Class</label>
              <select id="Tclass" name="Tclass" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5"  value="{{$teacher->Tclass}}">
                <option  value="A1" {{$teacher->Tclass == "A1" ? 'selected' : ''}}>A1</option>
                <option value="A2" {{$teacher->Tclass == "A2" ? 'selected' : ''}}>A2</option>
                <option value="B1" {{$teacher->Tclass == "B1" ? 'selected' : ''}} >B1</option>
                <option value="B2"  {{$teacher->Tclass == "B2" ? 'selected' : ''}} >B2</option>
                <option value="C1"  {{$teacher->Tclass == "C1" ? 'selected' : ''}} >C1</option>
                <option  value="C2" {{$teacher->Tclass == "C2" ? 'selected' : ''}}>C2</option>
                <option value="D1" {{$teacher->Tclass == "D1" ? 'selected' : ''}}>D1</option>
                <option value="D2" {{$teacher->Tclass == "D2" ? 'selected' : ''}} >D2</option>
                <option value="E1"  {{$teacher->Tclass == "E1" ? 'selected' : ''}} >E1</option>
                <option value="E2"  {{$teacher->Tclass == "E2" ? 'selected' : ''}} >E2</option>
              </select>
             </div>
             <div>
                 <label for="Tbloodgroup" class="block mb-2 text-sm font-medium text-black ">Blood-group</label>
                 <select id="Tbloodgroup" name="Tbloodgroup" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5"  value="{{$teacher->Tbloodgroup}}">
                 <option  value="A+" {{$teacher->Tbloodgroup == "A+" ? 'selected' : ''}}>A+</option>
                 <option value="A-" {{$teacher->Tbloodgroup == "A-" ? 'selected' : ''}}>A-</option>
                 <option value="B+" {{$teacher->Tbloodgroup == "B+" ? 'selected' : ''}}>B+</option>
                 <option value="B-" {{$teacher->Tbloodgroup == "B-" ? 'selected' : ''}}>B-</option>
                 <option value="AB+" {{$teacher->Tbloodgroup == "AB+" ? 'selected' : ''}}>AB+</option>
                 <option value="AB-" {{$teacher->Tbloodgroup == "AB-" ? 'selected' : ''}}>AB-</option>
                 <option value="O+" {{$teacher->Tbloodgroup == "O+" ? 'selected' : ''}}>O+</option>
                 <option value="O-" {{$teacher->Tbloodgroup == "O-" ? 'selected' : ''}}>O-</option>
                 </select>
             </div>
             <div>
                 <label for="Tlevel" class="block mb-2 text-sm font-medium text-black ">Select a Level:</label>
                 <select id="Tlevel" name="Tlevel" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5">
                 <option  value="1" {{$teacher->Tlevel == "1" ? 'selected' : ''}}>1</option>
                 <option value="2" {{$teacher->Tlevel == "2" ? 'selected' : ''}}>2</option>
                 <option value="3" {{$teacher->Tlevel == "3" ? 'selected' : ''}}>3</option>
                 <option value="4" {{$teacher->Tlevel == "4" ? 'selected' : ''}}>4</option>
                 <option value="5" {{$teacher->Tlevel == "5" ? 'selected' : ''}}>5</option>
                 </select>
             </div>
             <div>
               <label for="Tphonenumber" class="block mb-2 text-sm font-medium text-black">Teacher's Num:</label>
               <input type="tel" name="Tphonenumber" id="Tphonenumber" class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... " value="{{ $teacher->Tphonenumber }}" >
              </div>
              <div>
                <label for="Sname" class="block mb-2 text-sm font-medium text-black ">Select a Subject</label>
                <select id="Sname" name="Sname" class="border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5">
                <option  value="English" {{$teacher->Sname == "English" ? 'selected' : ''}}>English</option>
                <option value="math" {{$teacher->Sname == "math" ? 'selected' : ''}}>math</option>
                <option value="french" {{$teacher->Sname == "french" ? 'selected' : ''}}>french</option>
                <option value="science" {{$teacher->Sname == "science" ? 'selected' : ''}}>science</option>
                <option value="Art" {{$teacher->Sname == "Art" ? 'selected' : ''}}>Art</option>
                <option value="islamic" {{$teacher->Sname == "islamic" ? 'selected' : ''}}>islamic</option>
                <option value="music" {{$teacher->Sname == "music" ? 'selected' : ''}}>music</option>
                <option value="history" {{$teacher->Sname == "history" ? 'selected' : ''}}>history</option>
                <option value="geography" {{$teacher->Sname == "geography" ? 'selected' : ''}}>geography</option>
                <option value="arabic" {{$teacher->Sname == "arabic" ? 'selected' : ''}}>arabic</option>
                <option value="technology" {{$teacher->Sname == "technology" ? 'selected' : ''}}>technology</option>
                <option value="graphic design" {{$teacher->Sname == "arabic" ? 'selected' : ''}}>graphic design</option>
                </select>
                </div>
             
              <div>
                <label for="Tphoto" class="block mb-2 text-sm font-medium text-black ">Teacher's Photo :</label>
                <input type="file" name="Tphoto" id="Tphoto"  value=""class=" border border-black text-gray-900 text-sm rounded-full focus:ring-purple-900 focus:border-purple-900 block w-full p-2.5" placeholder="type it ... ">
                <img src="/images/{{ $teacher->Tphoto }}" width="300px">
              </div>
            
              

                 <!--CHECKBOX-->
               <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                <input id="female" type="radio" value="Female" {{$teacher->TGender == "female" ? 'checked' : ''}} name="TGender" class="w-4 h-4 text-blue-900 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="female" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
               </div>
               <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                <input checked id="Male" type="radio" value="Male" {{$teacher->TGender == "male" ? 'checked' : ''}} name="TGender" class="w-4 h-4 text-blue-900 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="Male" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
               </div>
             
             <!--ENDCHECKBOX-->
               
       </div>
       <div class="flex space-x-4">
         <button type="submit" class=" p-3 text-white bg-gray-900 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto  py-2.5 text-center">Save</button><br>
         <button class="bg-gray-200 border-black border-2 p-2 rounded-full "><a href="{{ route('teachers.index') }}"> Back</a><button>
       </div>
    </form>
 </div>
@stop