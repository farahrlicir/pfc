  <!--NAVBAR-->
 <nav>
    <!--<p class="flex md:text-base sm:text-xs ">Primary School Edukids</p>-->
     <form action="#">
        <div class="form-group">
        </div>
     </form>
    <!-- <a href="" class="nav-link">
       <i class="bx bxs-bell"></i>
       <span class="badge">5</span>
     </a>
     <a href="" class="nav-link">
      <i class="bx bxs-message-square-dots"></i>
      <span class="badge">3</span>
    </a>-->
    <span class="divider"></span>
    <div class="profile">
      <img src="/img/admin2.jpg" class="">
      <ul class="profile-link">
        <li><a href="{{route('profile.edit')}}"><i class="bx bxs-user-circle  icon"></i>Profile</a></li>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <li><a href="{{('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">
            <i class="bx bxs-log-out-circle icon"></i>Logout</a>
          </li>
        </form>
      </ul>
    </div>
</nav>
<!--NAVBAR-->
