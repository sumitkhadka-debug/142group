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
        <div class="container">
            <div class="row accordion" id="accordion">
            @foreach($cat as $cat)
                <div class="col-lg-6 col-sm-12 collapse_card mt-5 service_category">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-uppercase font-weight-bold mb-3" data-bs-toggle="collapse" data-bs-target="#{{ str_replace(' ','',$cat['name'])}}">{{$cat['name']}} <img src="{{ asset('public_assets/images/circle.png') }}" alt="" class="img-fluid ml-3"></h4>
                        </div>
                    <div class="collapse show" id="{{ str_replace(' ','',$cat['name'])}}">
                        <!--geo eng-->
                        <div class="mt-2 mb-2">
                            <div class="card service_subcat">
                                <!--accordion title-->
                                <div class="card-header text-capitalize" data-bs-toggle="collapse" data-bs-target="#geo_eng">
                                    <h5 class="pt-2"><img src="{{ asset('public_assets/images/circle.png') }}" alt="">Geotechnical Engineering</h5>
                                </div>
                                <!--details info-->
                                <div id="geo_eng" class="collapse">
                                    <div class="card-body">
                                        <p>142 GROUP always prioritises in quality work and aspires to meet the highest
                                            standards of ethics and integrity in all aspects of our work and in relations to
                                            employees, clients, communities and the public. We recognise the expectations
                                            of all stakeholders in regards to safety, environmental compliance, quality, thus
                                            we continually seek to improve our performance in those areas.</p>                                                </div>
                                </div>
                            </div>
                        </div>
                        <!--structure eng-->
                        <div class="mt-2 mb-2">
                            <div class="card service_subcat">
                                <!--accordion title-->
                                <div class="card-header text-capitalize" data-bs-toggle="collapse" data-bs-target="#str_eng">
                                    <h5 class="pt-2"><img src="{{ asset('public_assets/images/circle.png') }}" alt="">Structural Engineering</h5>
                                </div>
                                <!--details info-->
                                <div id="str_eng" class="collapse">
                                    <div class="card-body">
                                        <p>142 GROUP always prioritises in quality work and aspires to meet the highest
                                            standards of ethics and integrity in all aspects of our work and in relations to
                                            employees, clients, communities and the public. We recognise the expectations
                                            of all stakeholders in regards to safety, environmental compliance, quality, thus
                                            we continually seek to improve our performance in those areas.</p>                                                </div>
                                </div>
                            </div>
                        </div>
                        <!--storm water eng-->
                        <div class="mt-2 mb-2">
                            <div class="card service_subcat">
                                <!--accordion title-->
                                <div class="card-header text-capitalize" data-bs-toggle="collapse" data-bs-target="#storm_eng">
                                    <h5 class="pt-2"><img src="{{ asset('public_assets/images/circle.png') }}" alt="">Stormwater Engineering</h5>
                                </div>
                                <!--details info-->
                                <div id="storm_eng" class="collapse">
                                    <div class="card-body">
                                        <p>142 GROUP always prioritises in quality work and aspires to meet the highest
                                            standards of ethics and integrity in all aspects of our work and in relations to
                                            employees, clients, communities and the public. We recognise the expectations
                                            of all stakeholders in regards to safety, environmental compliance, quality, thus
                                            we continually seek to improve our performance in those areas.</p>                                                </div>
                                </div>
                            </div>
                        </div>
                        <!--structure eng-->
                        <div class="mt-2 mb-2">
                            <div class="card service_subcat">
                                <!--accordion title-->
                                <div class="card-header text-capitalize" data-bs-toggle="collapse" data-bs-target="#env_eng">
                                    <h5 class="pt-2"><img src="{{ asset('public_assets/images/circle.png') }}" alt="">Environmental Engineering</h5>
                                </div>
                                <!--details info-->
                                <div id="env_eng" class="collapse">
                                    <div class="card-body">
                                        <p>142 GROUP always prioritises in quality work and aspires to meet the highest
                                            standards of ethics and integrity in all aspects of our work and in relations to
                                            employees, clients, communities and the public. We recognise the expectations
                                            of all stakeholders in regards to safety, environmental compliance, quality, thus
                                            we continually seek to improve our performance in those areas.</p>                                                </div>
                                </div>
                            </div>
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