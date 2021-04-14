@extends('frontend.layouts.app')

@section('title') Our Service @endsection

@section('content')

    <!-- nav bottom-->
    <div class="container-fluid text-center nav_bottom text-white">
        <div class="row">
            <div class="col-sm-12">
                <h4>OUR SERVICE</h4>
            </div>
        </div>
    </div>

<div class="wrapper">

<!--main content-->
    <section class="about_content mt-5 pt-5">
        <div class="row">
    @foreach($category as $cat)
        <div class="col-md-4">
            <div class="card card-custom gutter-b custom-card-bg-color">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            <a href="">{{ ucwords($cat->name) }}</a>
                        </h3>
                    </div>
                </div>
                <div class="card-body" id="sublist">
                    @if($cat->service->count() != 0)
                    <div class="SubCategory">
                        @foreach($cat->service as $service)
                            <li><a href="">{{ ucwords($service->name) }}</a></li>
                        @endforeach
                    </div>
                    @endif
                   
                </div>
            </div>
        </div>
    @endforeach
</div>
    </section>

</div>

@endsection