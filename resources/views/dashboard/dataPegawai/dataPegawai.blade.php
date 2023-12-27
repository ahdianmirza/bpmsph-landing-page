@extends('layouts.dashboard')

@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Pegawai</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Data Pegawai</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success mt-3" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">Datatables</h5>
                                    <p>Data pegawai berupa nomor WhatsApp</p>
                                </div>
                                <div>
                                    <a href="/dashboard/data-pegawai/create" class="btn btn-success">Tambah <i
                                            class="bi bi-plus"></i></a>
                                </div>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">No. WhatsApp</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($pegawais->count() > 0)
                                        @foreach ($pegawais as $pegawai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pegawai->name }}</td>
                                                <td>{{ $pegawai->jabatan }}</td>
                                                <td>{{ $pegawai->whatsapp }}</td>
                                                <td>
                                                    <form action="/dashboard/data-pegawai/{{ $pegawai->id }}/delete"
                                                        method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-sm btn-danger border-0"
                                                            onclick="return confirm('Yakin ingin menghapus data ?')">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
