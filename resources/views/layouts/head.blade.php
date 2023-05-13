   <!-- BOXICONS -->
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   <!--dashboard-style-->
   <!--<link rel="stylesheet" href="css/dashbboard.css">-->
   <!--<link href="img/favicon.png" rel="icon">-->
   <link rel="stylesheet" href="{{asset('css/dashbboard.css')}}">
   <!--HTML TO PDF-->
   <script src= "https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
   <link href="{{asset('img/favicon.png')}}" rel="icon">
   <script src="https://kit.fontawesome.com/034dfe95c2.js" crossorigin="anonymous"></script>
   <!--HTML TO EXCEL-->
   <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
   <title>@yield('title')</title>
   @vite('resources/css/app.css','resources/js/app.js',)
