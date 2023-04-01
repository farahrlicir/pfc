<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.head')
</head>
<body>
<div class="wrapper">
    @include('layouts.main-header')

    @include('layouts.main-sidebar')

    <!--=================================
Main content -->
    <!-- main-content -->
    <div class="content-wrapper">

        @yield('page-header')

        @yield('content')

        <!--=================================
wrapper -->

        <!--=================================
footer -->

        @include('layouts.footer')
    </div><!-- main content wrapper end-->
</div>
</div>
</div>

<!--=================================
footer -->

@include('layouts.footer-scripts')
</body>
</html>