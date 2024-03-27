@extends('layouts.dashboard')

@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables Pengantaran Sample</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
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
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column">
                                    <h5 class="card-title">Datatables</h5>
                                    <p>Data Ulasan Pengunjung</p>
                                </div>
                                <a href="{{ url('/dashboard/ulasan/export') }}" class="btn btn-primary">Unduh<i
                                        class="bi bi-download ms-2"></i></a>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Kelamin</th>
                                        <th scope="col">Umur</th>
                                        <th scope="col">Kepuasan</th>
                                        <th scope="col">Kualitas</th>
                                        <th scope="col">Kecepatan</th>
                                        <th scope="col">Kemudahan</th>
                                        <th scope="col">WhatsApp</th>
                                        <th scope="col">QnA</th>
                                        <th scope="col">Komentar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ulasans as $ulasan)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $ulasan->kelamin == 'laki' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                            @if ($ulasan->umur == '<20')
                                                <td>{{ '<20 tahun' }}</td>
                                            @endif
                                            @if ($ulasan->umur == '>20 <25')
                                                <td>{{ '>20 tahun <25 tahun' }}</td>
                                            @endif
                                            @if ($ulasan->umur == '>25 <30')
                                                <td>{{ '>25 tahun <30 tahun' }}</td>
                                            @endif
                                            @if ($ulasan->umur == '>30')
                                                <td>{{ '>30 tahun' }}</td>
                                            @endif
                                            <td>{{ $ulasan->ulasan }}</td>
                                            <td>{{ $ulasan->kualitas }}</td>
                                            <td>{{ $ulasan->kecepatan }}</td>
                                            <td>{{ $ulasan->kemudahan }}</td>
                                            <td>{{ $ulasan->whatsapp }}</td>
                                            <td>{{ $ulasan->qna }}</td>
                                            <td>{{ $ulasan->komentar }}</td>
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
