 <!--SIDEBAR-->
 <section id="sidebar">
  <a href="{{url('/')}}" class="brand"> 
     <span><img src="{{asset('/img/logo-black.png')}}" class="w-9 h-9"></span>
     <span class="text-black">D</span><span class="text-bluey">U</span><span class="text-black">k</span> <span class="text-bluey">I</span> <span class="text-black">D</span><span class="text-black">S</span>
  </a>
  <ul class="side-menu">
      <li><a href="{{route('dashboard')}}" class="active"><img src="{{asset('img/home-sidebar.svg')}}" alt="" class="icon"> Dashboard</a></li>
      <li class="divider">---Main---</li>
      <li>
          <a href="#"><img src="{{asset('img/student-sidebar.svg')}}" class="icon">Students<i class="bx bxs-chevron-right icon-right"></i></a>
          <ul class="side-dropdown">
             <li><a href="{{route('students.create')}}">Add Student</a></li>
             <li><a href="{{route('students.index')}}">Student's List</a></li>
           </ul>
       </li>
       <li>
        <a href="#"><img src="{{asset('img/parent-sidebar.svg')}}" class="icon">Parents<i class="bx bxs-chevron-right icon-right"></i></a>
        <ul class="side-dropdown">
           <li><a href="{{route('parents.index')}}">Parent's List</a></li>
         </ul>
     </li>
       <li>
         <a href="#"><img src="{{asset('img/calendar.svg')}}" alt="" class="icon">Calendar<i class="bx bxs-chevron-right icon-right"></i></a>
         <ul class="side-dropdown">
           <li><a href="{{route('fullcalendar')}}">Add Event</a></li>
         </ul>
       </li>
       <!--STAFF-->
       <li class="divider">---Staff's List---</li>           
       <li>
        <a href="#"><img src="{{asset('img/director-sidebar.svg')}}" alt="" class="icon">Director<i class="bx bxs-chevron-right icon-right"></i></a>
        <ul class="side-dropdown">
          <li><a href="{{route('directors.create')}}">Add Director</a></li>
          <li><a href="{{route('directors.index')}}">Director's Info</a></li>
        </ul>
      </li>

      <li>
        <a href="#"><img src="{{asset('img/teacher-sidebar.svg')}}" alt="" class="icon"> Teachers<i class="bx bxs-chevron-right icon-right"></i></a>
        <ul class="side-dropdown">
          <li><a href="{{route('teachers.create')}}">Add Teacher</a></li>
          <li><a href="{{route('teachers.index')}}">Teacher's List</a></li>
        </ul>
      </li>

      <li>
        <a href="#"><img src="{{asset('img/psychologist-sidebar.svg')}}" alt="" class="icon"> Psychologists<i class="bx bxs-chevron-right icon-right"></i></a>
        <ul class="side-dropdown">
          <li><a href="{{route('psychologists.create')}}">Add Psychologist</a></li>
          <li><a href="{{route('psychologists.index')}}">Psychologist's List</a></li>
        </ul>
      </li>
     
       <li class="divider">--School components--</li>
       <li>
        <a href="#"><img src="{{asset('img/classroom-sidebar.svg')}}" alt="" class="icon"> Classrooms<i class="bx bxs-chevron-right icon-right"></i></a>
        <ul class="side-dropdown">
          <li><a href="{{route('classrooms.create')}}">Add Class</a></li>
          <li><a href="{{route('classrooms.index')}}">class's List</a></li>
        </ul>
      </li>
       <li>
        <a href="#"><img src="{{asset('img/library-sidebar.svg')}}" alt="" class="icon"> Library<i class="bx bxs-chevron-right icon-right"></i></a>
        <ul class="side-dropdown">
          <li><a href="{{route('libraries.create')}}">Add Book</a></li>
          <li><a href="{{route('libraries.index')}}">Book's List</a></li>
        </ul>
      </li>
       <li><a href="{{route('subjects.index')}}"><img src="{{asset('img/book-sidebar.svg')}}" alt="" class="icon">Subjects</a></li>
       <li>
       
      <li class="divider">_____________________</li>
      <li>
       <a href="#"><img src="{{asset('img/setting-sidebar.svg')}}" alt="" class="icon"> Setting<i class="bx bxs-chevron-right icon-right"></i></a>
        <ul class="side-dropdown">
         <li><a href="{{route('schools.create')}}">Add info</a></li>
      
         <li><a href="{{route('schools.index')}}">School's info</a></li>

        </ul>
      </li>
      <!--<li><a href="#" class="active">Dashboard</a></li>-->
   </ul>
</section>
<!--ENDSIDEBAR-->