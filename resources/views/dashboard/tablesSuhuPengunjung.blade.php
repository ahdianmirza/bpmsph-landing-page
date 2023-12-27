@extends('layouts.dashboard')

@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Suhu Pengunjung</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data Suhu Pengunjung</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <p>Data Suhu Pengunjung</p>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Instansi / Mandiri</th>
                                        <th scope="col">Keperluan</th>
                                        <th scope="col">Suhu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataSuhu as $suhu)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $suhu->name }}</td>
                                            <td>{{ $suhu->asal }}</td>
                                            <td>{{ $suhu->keperluan }}</td>
                                            <td>{{ floatval($suhu->suhu) }}°C</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
