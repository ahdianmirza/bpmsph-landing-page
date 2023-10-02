<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo BPMSPH">
            <span class="d-none d-lg-block ms-2">Welcome!</span>
        </a>
    </div><!-- End Logo -->

    {{-- <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar --> --}}

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="https://www.facebook.com/bpmsph.ditjenpkh.5?_rdc=1&_rdr"
                    data-bs-toggle="dropdown">
                    <i class="bi bi-facebook"></i>
                </a><!-- End Sosmed Icon -->

            </li><!-- End FB Nav -->

            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="https://twitter.com/BPMSPH" data-bs-toggle="dropdown">
                    <i class="bi bi-twitter"></i>
                </a><!-- End Twiter Icon -->

            </li><!-- End Twitter Nav -->

            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="https://www.youtube.com/@bpmsphbogorkementan231"
                    data-bs-toggle="dropdown">
                    <i class="bi bi-youtube"></i>
                </a><!-- End yt Icon -->
            </li><!-- End yt Nav -->
        </ul>
    </nav><!-- End Icons Navigation -->
</header><!-- End Header -->
