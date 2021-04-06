<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>    
            <!--meta tag-->
                <meta charset="utf-8">
                <meta http-equiv="x-ua-compatible" content="IE=edge">
                <meta name="author" content="Side guru">
                <meta name="keywords" content="142-group,construction,engineering,home renovation">
                <meta name="description" content="">
                <meta name="robots" content= "index, nofollow">
                <meta property="og:title" content="" />
                <meta property="og:site_name" content="" />
                <meta property="fb:app_id" content="" />
                <meta property="og:description" content="" />
                <meta property="og:url" content="" />
                <meta property="og:type" content="article" />
                <meta property="og:image" content="" />
                <meta name="twitter:title" content=" ">
                <meta name="twitter:description" content=" ">
                <meta name="twitter:image" content="">
                <meta name="twitter:card" content="summary_large_image">
                <meta name="csrf-token" content="{{ csrf_token() }}">

            <!--page ttile-->
                <title>142&nbsp;|&nbsp;@yield('title')</title>

            <!-- favicon // title icon -->
                <link rel="apple-touch-icon" sizes="180x180" href="public_assets/images/fav">
                <link rel="icon" type="image/png" sizes="32x32" href="public_assets/images/fav">
                <link rel="icon" type="image/png" sizes="16x16" href="public_assets/images/fav">
                <link rel="manifest" href="public_assets/images/fav">
            <!-- css files -->
                <link rel="stylesheet" href="{{ asset('public_assets/css/aos.css') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/css/bootstrap.min.css') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/css/bootstrap.min.css.map') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/css/simple-line-icons.css') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/css/font-awesome.min.css') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/css/hover-min.css') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/css/themify-icons.css') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/css/icofont.min.css') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/less/custom_design.css') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/css/media_query.css') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/css/roundslider.css') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/css/treeflex.css') }}">
                <link rel="stylesheet" href="{{ asset('public_assets/css/owl.carousel.min.css') }}">
    
        </head>
            <body class="antialiased">

                <!--mouse cursor-->
                    <div id="circle"></div>

                <!--no script-->
                    <noscript></noscript>

                <!--preloader-->
                    <div id="loader_wrapper">
                        <div class="container-fluid loader wow fadeIn text-center" data-wow-duration="2s">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="{{ asset('public_assets/images/loader.gif') }}" alt="Preloader" class="img-fluid">
                                    <h2>142-GROUP</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                <!--wrapper-->
                    <div class="wrapper">

                            <!-- includes header part -->
                                @include('frontend.includes.header')

                            <!-- content section -->
                                @yield('content')    

                            <!-- includes footer part -->
                                 @include('frontend.includes.footer')    

                    </div>    

                <!--js assets-->
                    <script src="{{ asset('public_assets/js/jquery.js') }}"></script>
                    <script src="{{ asset('public_assets/js/aos.js') }} "></script>
                    <script src="{{ asset('public_assets/js/popper.js') }}"></script>
                    <script src="{{ asset('public_assets/js/tooltip.js') }}"></script>
                    <script src="{{ asset('public_assets/js/bootstrap.min.js') }}"></script>
                    <script src="{{ asset('public_assets/js/roundslider.js') }}"></script>
                    <script src="{{ asset('public_assets/js/owl.carousel.min.js') }}"></script>
                    <script src="{{ asset('public_assets/js/cursor.js') }}"></script>
                    <script src="{{ asset('public_assets/js/custom.js') }}"></script>

    </body>
</html>
        