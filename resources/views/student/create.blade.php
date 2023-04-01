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
    
    <title>Document</title>
</head>
<body>
   @include('layouts.main-sidebar')
    <div id="content">
      <!--FORM-->
    <div class="bg-blue-100">
    <form method="" action=""  class="w-full max-w-lg">
        @csrf
        
       
  
           <x-primary-button class="ml-3">
                       {{ __('Save student') }}
           </x-primary-button >
    </form>     
    </div>
  </div>
 
    <!--ENDFORM-->
 
    
<script src="js/dashboardnav.js"></script>
</body>
</html>