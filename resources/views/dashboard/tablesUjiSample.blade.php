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
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex flex-column">
                                    <h5 class="card-title">Datatables</h5>
                                    <p>Data Pengantaran Sample</p>
                                </div>
                                <a href="{{ url('/dashboard/sample-uji/export') }}" class="btn btn-primary">Unduh<i
                                        class="bi bi-download ms-2"></i></a>
                            </div>

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
                                        <th scope="col">Jenis Sample</th>
                                        <th scope="col">Suhu</th>
                                        <th scope="col">Nomor Antrian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($samples as $sample)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $sample->name }}</td>
                                            <td>{{ $sample->whatsapp }}</td>
                                            <td>{{ $sample->asal }}</td>
                                            <td>{{ $sample->alamat }}</td>
                                            <td>{{ date('d-m-Y', strtotime($sample->tanggal)) }}</td>
                                            <td>{{ $sample->waktu }}</td>
                                            <td>{{ $sample->jenis }}</td>
                                            <td>{{ $sample->suhu }}°C</td>
                                            <td>{{ $sample->nomorAntrian }}</td>
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
