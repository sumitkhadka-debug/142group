<!DOCTYPE html>
    <html>
        <head>
            {{-- meta tags --}}
            <!--meta tag-->
                <meta charset="utf-8">
                <meta http-equiv="x-ua-compatible" content="IE=edge">
                <meta name="author" content="SLC BATCH ( 2069 )">
                <meta name="keywords" content="Munal Adarsha Vidya Sadan,MAVS">
                <meta name="description" content="">
                <meta name="robots" content= "index, nofollow">
                <meta property="og:title" content="When Great Minds Don’t Think Alike" />
                <meta property="og:site_name" content="" />
                <meta property="fb:app_id" content="" />
                <meta property="og:description" content="How much does culture influence creative thinking?" />
                <meta property="og:url" content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
                <meta property="og:type" content="article" />
                <meta property="og:image" content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
                <meta name="twitter:title" content="European Travel Destinations ">
                <meta name="twitter:description" content=" Offering tour packages for individuals or groups.">
                <meta name="twitter:image" content=" http://euro-travel-example.com/thumbnail.jpg">
                <meta name="twitter:card" content="summary_large_image">

            {{-- page title --}}
                <title>142 - @yield('title')</title>

            {{-- favicon // title icon--}}
                <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin_assets.images/fav/apple-touch-icon.png') }}">
                <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin_assets/images/fav/favicon-32x32.png') }}">
                <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin_assets/images/fav/favicon-16x16.png') }}">
                <link rel="manifest" href="{{ asset('admin_assets/images/fav/site.webmanifest') }}">

            {{-- css files --}}
                <link rel="stylesheet" href="{{ asset('admin_assets/css/animate.css') }}">
                <link rel="stylesheet" href="{{ asset('admin_assets/css/hover-min.css') }}">
                <link rel="stylesheet" href="{{ asset('admin_assets/css/font-awesome.min.css') }}">
                <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css') }}">
                <link rel="stylesheet" href="{{ asset('admin_assets/css/bootstrap.min.css.map') }}">
                <link rel="stylesheet" href="{{ asset('admin_assets/css/themify-icons.css') }}">
                <link rel="stylesheet" href="{{ asset('admin_assets/css/custom_design.css') }}">

                <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
                <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

           
        </head>
            <body>

                {{-- no script --}}
                    <noscript></noscript>

                {{-- pre loader --}}
                    <div class="preloader"></div>

                {{-- includes header --}}
                    @include('admin.includes.main_nav')

                {{-- body content --}}
                    <!--main content section-->
                        <section class="main_content mt-5 container-fluid">
                            <div class="row">
                                <div class="col-sm-10 ml-auto mb-4">
                                     <!--breadcrumbs-->
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{ url('/admin/index') }}">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                                            </ol>
                                        </nav>
                                   
                                        <!-- body  -->
                                        @yield('body') 
                                    </div>
                            </div>
                           
                        </section>      

                    {{-- include footer --}}
                        @include('admin.includes.footer')
                        

            </body>
    </html>