<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="img/favicon.png" rel="icon">
    <!--GOOGLE-FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
    <title>EDUKIDS</title>
    @vite('resources/css/app.css','resources/js/app.js',)
</head>
<body class="bg-white">
    <div class="mt-20">
       <h2 class="md:text-4xl pb-6 font-bold  font-delicious flex justify-center sm:text-sm ">WELCOME AT EDUKIDS</h2>
   </div>
   <div class="md:grid md:grid-cols-2 md:gap-4 md:my-44 sm:grid sm:grid-rows-2">
     <div class="grid grid-rows-2 gap-4 justify-center">
        <img src="/img/Worker.gif" class="w-40 h-40">
       <h2>
        <a href="{{route('dashboard')}}" class="font-bold text-1xl">ADMINISTRATOR</a>
       </h2>
     </div>
     <div class="grid grid-rows-2 gap-4 justify-center">
        <img src="/img/visitor.gif"  class="w-40 h-40">
       <h2>
        <a href="welcome" class="font-bold text-1xl ml-9 ">VISITOR</a>
       </h2>
     </div>
   </div>

  
</body>
</html>