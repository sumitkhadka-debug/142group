<!-- top nav -->
<div class="col-lg-10 col-md-8 col-xl-10 ml-auto header_nav fixed-top py-2">
                                                <div class="row">
                                                    <div class="col-lg-12 text-right">
                                                        <ul class="navbar-nav">
                                                            <li class="nav-item ml-auto"><a href="#!" class="text-white nav-link pr-3"><i class="ti ti-fullscreen fa-lg"></i></a></li>
                                                            <!-- <li class="nav-item"><a href="#!" class="text-white nav-link pr-3"><i class="fa fa-bell-o fa-lg"></i></a></li>
                                                            <li class="nav-item"><a href="#!" class="text-white nav-link pr-3"><i class="fa fa-user fa-lg"></i></a></li>
                                                            <li class="nav-item"><a href="#!" class="text-white nav-link pr-3"><i class="ti ti-lock fa-lg"></i></a></li> -->
                                                            <li class="nav-item"><a href="#!" class="nav-link text-white pr-3"><img src="{{ asset('admin_assets/images/user.png') }}" alt="User" class="img-fluid rounded-circle mr-2" width="27">{{ Auth::user()->name}}</a></li>
                                                            <li class="nav-item"><a href="{{  route('logout')}" class="nav-link pr-3 text-warning"><i class="ti ti-power-off fa-lg"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- ./ -->