<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- BOXICONS -->
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="css/dashbboard.css">
   <link href="img/favicon.png" rel="icon">
   <title>Dashboard</title>
   @vite('resources/css/app.css','resources/js/app.js',)

</head>
<body>
    <!--HEAD-->
   <section id="content">
      <!--NAVBAR-->
    <nav>
        <i class='bx bx-menu toggle-sidebar cursor-pointer'></i>
         <form action="#">
            <div class="form-group">
            </div>
         </form>
         <a href="" class="nav-link">
           <i class="bx bxs-bell"></i>
           <span class="badge">5</span>
         </a>
         <a href="" class="nav-link">
          <i class="bx bxs-message-square-dots"></i>
          <span class="badge">3</span>
        </a>
        <span class="divider"></span>
        <div class="profile">
          <img src="/img/admin2.jpg">
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
     <!--ENDNAVBAR-->

   </section>
   <!--ENDHEAD-->
</body>
</html>