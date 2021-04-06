<!--navigation bar-->
<nav class="navbar navbar-expand-xl sticky-top">
    <div class="container">
        <!--navbar brand-->
            <a class="navbar-brand" href="/" title="142-GROUP"><img src="{{ asset('public_assets/images/logo/logo.png') }}" alt="142-GROUP" class="img-fluid"></a>

        <!--toggler-->
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="icofont icofont-navigation-menu"></span>
            </button>

        <!--nav items-->
            <div class="collapse navbar-collapse text-white" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link hvr-underline-from-left" href="/" title="HOME">home</a></li>
                    <li class="nav-item"><a class="nav-link hvr-underline-from-left" href="/about" title="About 142-Group">About</a></li>
                    <li class="nav-item"><a class="nav-link hvr-underline-from-left" href="/service" title="Service">Service</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/board" class="nav-link hvr-underline-from-left" title="142-Board">142 Board</a></li>
                    <li class="nav-item"><a href="/investment" class="nav-link hvr-underline-from-left" title="Investment">Investment</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link hvr-underline-from-left" title="Contact">Contact</a></li>
                </ul>
            </div>
    </div>

        <!--search box icon-->
            <div class="search_icon">
                <a href="#search" class="text-white"><i class="icofont-search-1"></i></a>
            </div>
                <div id="search">
                    <a href="javascript:;" class="close">×</a>
                        <form>
                            <input type="search" value="" placeholder="type keyword(s) here" />
                            <button type="submit"><img src="{{ asset('public_assets/images/btn_bg.png') }}" alt="Search Icon" class="img-fluid"></button>
                        </form>
                </div>
</nav>