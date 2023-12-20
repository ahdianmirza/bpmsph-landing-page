<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? '' : 'collapsed' }}" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/data-pegawai') ? '' : 'collapsed' }}"
                href="/dashboard/data-pegawai">
                <i class="bi bi-people"></i>
                <span>Data Pegawai</span>
            </a>
        </li><!-- End Data Pegawai Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/antrian') ? '' : 'collapsed' }}" href="/dashboard/antrian">
                <i class="bi bi-people"></i>
                <span>Antrian</span>
            </a>
        </li><!-- End Data Pegawai Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/data-suhu-pengunjung') ? '' : 'collapsed' }}"
                href="/dashboard/data-suhu-pengunjung">
                <i class="bi bi-thermometer-half"></i>
                <span>Data Suhu Pengunjung</span>
            </a>
        </li><!-- End Data Suhu Pengunjung Nav -->


        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/tables*') ? '' : 'collapsed' }}" data-bs-target="#tables-nav"
                data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse {{ Request::is('dashboard/tables*') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/dashboard/tables-konsultasi-kunjungan"
                        class="{{ Request::is('dashboard/tables-konsultasi-kunjungan') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Data Konsultasi</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/tables-sample-uji"
                        class="{{ Request::is('dashboard/tables-sample-uji') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Data Pengantaran Sample</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/tables-ulasan"
                        class="{{ Request::is('dashboard/tables-ulasan') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Data Ulasan Pengunjung</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href="charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav --> --}}

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/profile') ? '' : 'collapsed' }}" href="/dashboard/profile">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->
    </ul>

</aside><!-- End Sidebar-->
