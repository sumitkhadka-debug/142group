@extends('frontend.layouts.app')

@section('title') Investment @endsection

@section('content')

    <!-- nav bottom-->
    <div class="container-fluid text-center nav_bottom text-white">
        <div class="row">
            <div class="col-sm-12">
                <h4>OUR INVESTMENTS</h4>
            </div>
        </div>
    </div>

<!--Investment panel-->
<div class="wrapper">
<div class="container-fluid investment ">
    <div class="row">
        <div class="col-sm-12 col-lg-2 text-white text-center sidebar">
            LEFT CONTENT HERE
        </div>
        <div class="col-sm-12 col-lg-8 banner">
        </div>
        <div class="col-sm-12 col-lg-2 text-white pt-5 text-center sidebar">
            RIGHT CONTENT HERE
        </div>
    </div>
</div>
</div>

@endsection