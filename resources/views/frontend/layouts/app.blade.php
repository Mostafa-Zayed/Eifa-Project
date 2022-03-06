<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title','Eifa')</title>

    <meta name="keywords" content="Eifa" />
    <meta name="description" content="Eifa">
    <meta name="author" content="Eifa">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/logo.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('assets/img/logo.png')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.compat.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('assets/master/rtl/css/rtl-theme.css')}}">
        <link rel="stylesheet" href="{{asset('assets/master/rtl/css/rtl-theme-elements.css')}}">
        <link rel="stylesheet" href="{{asset('assets/master/rtl/css/rtl-theme-blog.css')}}">
        <link rel="stylesheet" href="{{asset('assets/master/rtl/css/rtl-theme-shop.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/theme-elements.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/theme-blog.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/theme-shop.css')}}">
    @endif
    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/demos/demo-business-consulting-2.css')}}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('assets/css/skins/skin-business-consulting-2.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('assets/vendor/modernizr/modernizr.min.js')}}"></script>
    <style type="text/css">
        input.form-control {
            background-color: #dee1e5 !important;
        }
    </style>
@yield('css')
</head>
<body>
    <div class="body">
        @include('frontend.includes.header')
        @yield('content')
    </div>
    @yield('js')
</body>
</html>
