@extends('frontend.layouts.app')

@section('title') Board @endsection

@section('content')

    <!-- nav bottom-->
    <div class="container-fluid text-center nav_bottom text-white">
        <div class="row">
            <div class="col-sm-12">
                <h4>OUR PROJECTS</h4>
            </div>
        </div>
    </div>

<!--wrapper-->
<div class="wrapper">
    <!--project carousel-->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-990px, 0px, 0px); transition: all 0.5s ease 0s; width: 2376px;">
                            <div class="owl-item">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/slider2.jpg') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="owl-item">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/slider3.jpg') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="owl-item">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/slider4.jpg') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="owl-item">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/slider5.jpg') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="owl-item">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/slider6.jpg') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="owl-item active">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/slider7.jpg') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="owl-item active">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/slider8.jpg') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="owl-item active">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/structure.png') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="owl-item active">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/slider2.jpg') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="owl-item active">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/structure.png') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="owl-item">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/slider3.jpg') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="owl-item">
                                <div class="item"><img src="{{ asset('public_assets/images/slider/structure.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div></div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection