@extends('frontend.layouts.app')

@section('title') About Us @endsection

@section('content')

    <!-- nav bottom-->
    <div class="container-fluid text-center nav_bottom text-white">
            <div class="row">
                <div class="col-sm-12">
                    <h4> @yield('title') </h4>
                </div>
            </div>
        </div>

    <!--wrapper-->
        <div class="wrapper">
            <!--content-->
                <section class="about_content mt-5 mb-2 p-5">
                    <div class="container">
                        <div class="row accordion" id="accordion">
                            <!-- loop -->
                                @foreach($abouts as $about)
                                <div class="col-lg-6 col-sm-12 mt-2 mb-2 wow slideInDown collapse_card" data-wow-duration="1s">
                                    <div class="card">
                                        <!--accordion title-->
                                        <div class="card-header text-uppercase" data-bs-toggle="collapse" data-bs-target="#{{$about['title']}}">
                                            <h4 class="pt-1 font-weight-bold"><img src="{{ asset('public_assets/images/circle.png') }}" alt="" >{{ $about['title']}}</h4>
                                        </div>
                                        <!--details info-->
                                        <div id="{{$about['title']}}" class="collapse show">
                                            <div class="card-body">
                                                <p>{{ $about['description'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    </div>
                </section>
        </div>

@endsection