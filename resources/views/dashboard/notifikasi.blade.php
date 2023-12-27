@extends('layouts.dashboard')

@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Notifikasi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Notifikasi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <p>Pesan Notifikasi Pengunjung</p>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Pesan</th>
                                        <th scope="col">Waktu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataNotifikasi as $notifikasi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $notifikasi->name }}</td>
                                            <td>{{ $notifikasi->email }}</td>
                                            <td>{{ $notifikasi->pesan }}</td>
                                            <td>{{ $notifikasi->created_at->diffForHumans() }}</td>
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
