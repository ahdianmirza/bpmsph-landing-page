<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="/dashboard" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo BPMSPH">
            <span class="d-none d-lg-block fs-5 ms-2">Admin Dashboard</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    {{-- <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar --> --}}

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            {{-- <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon--> --}}

            <li class="nav-item dropdown">

                <button class="nav-link nav-icon" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    @if (count($dataNotifikasiUnchecked) > 0)
                        <span class="badge bg-primary badge-number">{{ count($dataNotifikasiUnchecked) }}</span>
                    @endif
                </button><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications overflow-auto">
                    <li class="dropdown-header d-flex align-items-center">
                        @if (count($dataNotifikasiUnchecked) > 0)
                            You have {{ count($dataNotifikasiUnchecked) }} new notifications
                            <form action="/notif/checked" action="post">
                                @method('put')
                                @csrf
                                <button class="btn badge rounded-pill bg-primary p-2 ms-2"><span>View
                                        all</span></button>
                            </form>
                        @else
                            You don't have new notification
                        @endif
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    @if ($dataNotifikasiUnchecked)
                        @foreach ($dataNotifikasiUnchecked as $notif)
                            <li class="notification-item">
                                @if ($notif->checked === 0)
                                    <i class="bi bi-exclamation-circle text-primary"></i>
                                @else
                                    <i class="bi bi-check-circle text-success"></i>
                                @endif

                                <div>
                                    <h4>{{ $notif->name }}</h4>
                                    <p>{{ $notif->pesan }}</p>
                                    <p>{{ $notif->created_at->diffForHumans() }}</p>
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @endforeach
                    @endif

                    <li class="dropdown-footer">
                        <a href="/dashboard/notifikasi">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/niceadmin/profile-img.jpg') }}" alt="Profile"
                        class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ auth()->user()->name }}</h6>
                        @if (auth()->user()->job === null)
                            <span class="fst-italic">(No job found)</span>
                        @else
                            <span>{{ auth()->user()->job }}</span>
                        @endif
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="/dashboard/profile">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
