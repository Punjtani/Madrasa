<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Moin-ul-Islam</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{asset('assets/org/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/org/img/favicon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">

    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/org/wowslider/engine1/style.css')}}" />
    <script type="text/javascript" src="{{asset('assets/org/wowslider/engine1/jquery.js')}}"></script>
    <!-- End WOWSlider.com HEAD section -->

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/org/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--<link href="-->
    <!--" rel="stylesheet">-->
    <!--<link href="-->
    <!--" rel="stylesheet">-->
    <!--<link href="-->
    <!--" rel="stylesheet">-->
    <!--<link href="-->
    <!--" rel="stylesheet">-->

    <!--    Main animation file -->
    <link href="{{asset('assets/org/vendor/aos/aos.css')}}" rel="stylesheet">

    <!--    sweetalert-->
    <!--<link href="-->
    <!--" rel="stylesheet">-->

    <!--    Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Template Main CSS File -->
    <link href="{{asset('assets/org/css/style.css')}}" rel="stylesheet">

    <script>
        setTimeout(function() {
            $('.alert-success').slideUp();
        }, 5000);
        setTimeout(function() {
            $('.alert-danger').slideUp();
        }, 5000);
    </script>
    <script src="{{asset('assets/org/vendor/jquery/jquery.min.js')}}"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143245718-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-143245718-1');
    </script>

</head>
@extends('customer.layouts.header')

<body>
    <main class="content">
        @yield('content')
    </main>
    @extends('customer.layouts.footer')
</body>

</html>