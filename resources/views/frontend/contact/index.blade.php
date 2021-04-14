@extends('frontend.layouts.app')

@section('title') Contact Us @endsection

@section('content')

    <!-- nav bottom-->
    <div class="container-fluid text-center nav_bottom text-white">
        <div class="row">
            <div class="col-sm-12">
                <h4>YOUR QUESTION, OUR ANSWER</h4>
            </div>
        </div>
    </div>

<!--wrapper-->
    <div class="wrapper">
        <!--contact section-->
        <div class="container-fluid contact_section">
            <div class="row">
                <!-- contact sidebar left-->
                <div class="col-sm-12 col-lg-3 sidebar text-center text-white office_address">
                    <div class="nav flex-column nav-pills p-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">NSW</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">QLD</a>
                    </div>
                    <!--user feedback-->
                    <div class="card mt-5 pl-3">
                        <h5 class="text-capitalize p-3 text-white text-center">User Feedback</h5>
                        <form action="{{ url('/saveFeedback') }}" method="post" class="p-2">
                            @csrf
                        <div id="feedback"></div>
                        <ul class="small pb-4">
                            <li>0-360 degree to angle your satisfaction</li>
                            <li>0 indicates worst imaginable satisfaction</li>
                            <li>360 indicates best imaginable satisfaction</li>
                        </ul>
                            <div class="form-group wow slideInDown" data-wow-duration="1.9s">
                                <textarea name="message" id="message" rows="3" class="form-control text-white" required></textarea>
                                <label class="text-white">Feedback Message</label>
                            </div>
                            <div class="form-group wow slideInDown" data-wow-duration="2.1s">
                                <button type="submit" class="text-white">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- middle box-->
                <div class="col-sm-12 col-lg-5 office_address p-5">
                @include('frontend.includes.message')
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="card">
                                <!--                                    <h5 class="bg-dark text-white text-center p-3 text-capitalize">sydney office</h5>-->
                                <div class="card-body">
                                    <ul class="mb-3">
                                        <li class="wow slideInDown" data-wow-duration="2s">G10/8 Stockyard Bvd, Lidcombe NSW 2141</li>
                                        <li class="wow slideInDown" data-wow-duration="2.3s"><a href=""><i class="icon icon-call-out mr-1"></i> + 9843811683</a></li>
                                        <li class="wow slideInDown" data-wow-duration="2.6s"><a href=""><i class="icon icon-envelope mr-1"></i> mail.142group.com</a></li>
                                    </ul>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.8085041382337!2d151.04216101470212!3d-34.023126080613864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12c0b255849b6b%3A0x77ae74a283f63b5d!2s77%20Prices%20Cct%2C%20Woronora%20NSW%202232%2C%20Australia!5e0!3m2!1sen!2snp!4v1605623548191!5m2!1sen!2snp" height="200"  style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="card">
                                <!--<h5 class="bg-dark text-white text-center p-3 text-capitalize">brisbane office</h5>-->
                                <div class="card-body">
                                    <ul class="mb-3">
                                        <li class="wow slideInDown" data-wow-duration="2s">101/19 Hope street, South Brisbane,QLD, Australia, 4101</li>
                                        <li class="wow slideInDown" data-wow-duration="2.3s"><a href=""><i class="icon icon-call-out mr-1"></i> + 9843811683</a></li>
                                        <li class="wow slideInDown" data-wow-duration="2.6s"><a href=""><i class="icon icon-envelope mr-1"></i> mail.142group.com</a></li>
                                    </ul>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.9162596713536!2d153.01382951450867!3d-27.471866282890048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a07e8f123e5%3A0x416aa3a5d527118e!2s101%2F19%20Hope%20St%2C%20South%20Brisbane%20QLD%204101%2C%20Australia!5e0!3m2!1sen!2snp!4v1605623911274!5m2!1sen!2snp" height="200" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--right box-->
                <div class="col-lg-4 col-sm-12 pt-5">                 
                    <div class="card general_enquiry" style="background: transparent;">
                        <h5 class="text-white bg-dark p-3 text-capitalize">general enquiry</h5>
                        <!--enquiry form-->
                        <form action="{{ url('/saveInquiry') }}" method="post" class="p-2">
                        @csrf
                            <div class="form-group wow slideInDown" data-wow-duration="1s">
                                <input type="text" class="form-control" required autofocus name="name" value="{{ old('name') }}">
                                <label>Full Name</label>
                            </div>
                            <div class="form-group wow slideInDown" data-wow-duration="1.3s">
                                <input type="text" class="form-control" required name="email"  value="{{ old('email') }}">
                                <label>Email Address</label>
                            </div>
                            <div class="form-group wow slideInDown" data-wow-duration="1.6s"> 
                                <input type="number" class="form-control" required name="phone"  value="{{ old('phone') }}">
                                <label>Contact Number</label>
                            </div>
                            <div class="form-group wow slideInDown" data-wow-duration="1.9s">
                                <textarea name="message" id="message" rows="5" class="form-control" required  value="{{ old(' message') }}"></textarea>
                                <label>Message For us</label>
                            </div>
                            <div class="form-group wow slideInDown" data-wow-duration="2.1s">
                                <button type="submit">Send Enquiry</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection