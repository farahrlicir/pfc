 <!--SIDEBAR-->
 <section id="sidebar">
  <a href="#" class="brand"> 
     <span><img src="{{asset('/img/logo-black.png')}}" class="w-9 h-9"></span>
     <span class="text-black">D</span><span class="text-bluey">U</span><span class="text-black">k</span> <span class="text-bluey">I</span> <span class="text-black">D</span><span class="text-black">S</span>
  </a>
  <ul class="side-menu">
      <li><a href="{{route('dashboard')}}" class="active"><img src="{{asset('img/home-sidebar.svg')}}" alt="" class="icon"> Dashboard</a></li>
      <li class="divider">---Main---</li>
      <li>
          <a href="#"><img src="{{asset('img/student-sidebar.svg')}}" class="icon">Students<i class="bx bxs-chevron-right icon-right"></i></a>
          <ul class="side-dropdown">
             <li><a href="#">Add Student</a></li>
             <li><a href="#">Alert</a></li>
             <li><a href="#">Alert</a></li>
             <li><a href="#">Alert</a></li>
           </ul>
       </li>
       <li>
         <a href="#"><img src="{{asset('img/user-sidebar.svg')}}" alt="" class="icon">Users<i class="bx bxs-chevron-right icon-right"></i></a>
         <ul class="side-dropdown">
           <li><a href="#">Add User</a></li>
           <li><a href="#">Update User</a></li>
           <li><a href="#">Delete User</a></li>
           <li><a href="#">User's List</a></li>
         </ul>
       </li>
       <!--STAFF-->
       <li class="divider">---Staff's List---</li>           
       <li>
        <a href="#"><img src="{{asset('img/director-sidebar.svg')}}" alt="" class="icon">Director<i class="bx bxs-chevron-right icon-right"></i></a>
        <ul class="side-dropdown">
          <li><a href="{{route('directors.create')}}">Add Director</a></li>
          <li><a href="{{route('directors.index')}}">Update Director</a></li>
          <li><a href="#">Director's List</a></li>
        </ul>
      </li>

      <li>
        <a href="#"><img src="{{asset('img/teacher-sidebar.svg')}}" alt="" class="icon"> Teachers<i class="bx bxs-chevron-right icon-right"></i></a>
        <ul class="side-dropdown">
          <li><a href="">Add Teacher</a></li>
          <li><a href="#">Update Teacher</a></li>
          <li><a href="#">Delete Teacher</a></li>
          <li><a href="#">Teacher's List</a></li>
        </ul>
      </li>

      <li>
        <a href="#"><img src="{{asset('img/psychologist-sidebar.svg')}}" alt="" class="icon"> Psychologists<i class="bx bxs-chevron-right icon-right"></i></a>
        <ul class="side-dropdown">
          <li><a href="{{route('psychologists.create')}}">Add Psychologist</a></li>
          <li><a href="#">Update Psychologist</a></li>
          <li><a href="#">Delete Psychologist</a></li>
          <li><a href="{{route('psychologists.index')}}">Psychologist's List</a></li>
        </ul>
      </li>
     
       <li class="divider">--School components--</li>
       <li><a href="{{route('classrooms.create')}}"><img src="{{asset('img/classroom-sidebar.svg')}}" alt="" class="icon"> Classrooms</a></li>
       <li><a href="#"><img src="{{asset('img/library-sidebar.svg')}}" alt="" class="icon"> Library</a></li>
       <li><a href="#"><img src="{{asset('img/dormitory-sidebar.svg')}}" alt="" class="icon"> Dormitories</a></li>
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