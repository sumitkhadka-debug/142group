<!--sidebar-->
    <div class="col-lg-2 col-md-4 sidebar fixed-top">
        <!--logo-->
            <a href="#!" class="navbar-brand text-white d-block mx-auto text-center py-2 font-weight-bold border-bottom">
                <img src="{{ asset('admin_assets/images/logo.png') }}" alt="EBPS" class="img-fluid rounded-circle mr-3" width="90">
            </a>
        <!--nav items-->
            <ul class="navbar-nav flex-column">
                <li class="nav-item sidebar-link"><a href="{{ url('/admin') }}" class="nav-link text-white p-3"><i class="fa fa-circle mr-2"></i>Dashboard</a></li>
                <li class="nav-item sidebar-link"><a href="{{ url('/admin/about') }}" class="nav-link text-white p-3"><i class="fa fa-circle mr-2"></i>About Page</a></li>
                <li class="nav-item sidebar-link"><a href="{{ url('/admin/service') }}" class="nav-link text-white p-3"><i class="fa fa-circle mr-2"></i>Service Page</a></li>
                <li class="nav-item sidebar-link"><a href="{{ url('/admin/member') }}" class="nav-link text-white p-3"><i class="fa fa-circle mr-2"></i>Staffs Info</a></li>
                <li class="nav-item sidebar-link"><a href="{{ url('/admin/board') }}" class="nav-link text-white p-3"><i class="fa fa-circle mr-2"></i>Projects Info</a></li>
                <li class="nav-item sidebar-link"><a href="{{ url('/admin/member') }}" class="nav-link text-white p-3"><i class="fa fa-circle mr-2"></i>Investment Page</a></li>
            </ul>
    </div>
<!-- ./-->