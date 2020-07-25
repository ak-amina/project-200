<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Mu-Booster</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/bicon.min.css')}}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}" />
    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{asset('/assets/css/animate.css')}}" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/responsive.css')}}" media="all" />
    @yield('style')

</head>
<body>
    {{--Header--}}
    @include('shared.header')
    {{--Header--}}

    {{--Main Content--}}
    @yield('content')
    {{--Main Content--}}

    {{--Footer--}}
    @include('shared.footer')
    {{--Footer--}}



<!-- LinkUp Js -->
<script type="text/javascript" src="{{asset('/assets/js/jquery-1.12.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/onepagenav.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/waypoints.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/ityped.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/assets/js/active.js')}}"></script>
@yield('script')
</body>
</html>