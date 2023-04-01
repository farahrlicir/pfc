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
     <x-success-status class="mb-4" :status="session('message')" />
      <!--FORM-->
    <div class="bg-blue-100">
    <form method="POST" action=""  >
    
      @csrf
         
    <div class="mb-6">
      <label for="Schoolname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
      <input type="Schoolname" id="Schoolname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
        
    </div>
    <div class="mb-6">
      <label for="Adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
      <input type="Adresse" id="Adresse" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-6">
        <label for="Phonenum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
        <input type="Phonenum" id="Phonenum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
      </div>
      <div class="mb-6">
        <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
        <input type="Email" id="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
      </div>
    <div class="flex items-start mb-6">
      <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
      </div>
      <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
    </div>
    
  
       
  
           <x-primary-button class="ml-3">
                       {{ __('Save') }}
           </x-primary-button >
    </form>     
    </div>
  </div>
 
    <!--ENDFORM-->
 
    
<script src="js/dashboardnav.js"></script>
</body>
</html>