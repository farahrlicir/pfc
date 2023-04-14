<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @include('layouts.head')

</head>
<body>
  @include('layouts.main-sidebar')

 
  <!--HEAD-->
   <section id="content">
      @include('layouts.main-header')
    <!--ENDHEAD-->

       <main>
         @yield('main')
       </main>
        
       


       <!--FOOTER-->
       <!--include('layouts.footer')-->
    <!--ENDFOOTER-->
   </section>
 
  


  


 
@include('layouts.footer-scripts')

 </body>
</html>
 