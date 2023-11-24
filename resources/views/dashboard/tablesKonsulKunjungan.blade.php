@extends('layouts.dashboard')

@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables Konsultasi / Kunjungan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <p>Data Konsultasi / Kunjungan</p>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">No. WhatsApp</th>
                                        <th scope="col">Instansi / Mandiri</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Waktu</th>
                                        <th scope="col">Nama Staff</th>
                                        <th scope="col">Tujuan</th>
                                        <th scope="col">Suhu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($konsuls as $konsul)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $konsul->name }}</td>
                                            <td>{{ $konsul->whatsapp }}</td>
                                            <td>{{ $konsul->asal }}</td>
                                            <td>{{ $konsul->alamat }}</td>
                                            <td>{{ date('d-m-Y', strtotime($konsul->tanggal)) }}</td>
                                            <td>{{ $konsul->waktu }}</td>
                                            <td>{{ $konsul->staff }}</td>
                                            <td>{{ $konsul->tujuan }}</td>
                                            <td>{{ $konsul->suhu }}°C</td>
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
