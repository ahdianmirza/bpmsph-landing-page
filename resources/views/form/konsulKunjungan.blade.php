@extends('layouts.form')

@section('container')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Konsultasi / Kunjungan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Konsultasi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Identitas Pengunjung dan Keterangan Kunjungan</h5>
                            <!-- Horizontal Form -->
                            <form action="/konsultasi-kunjungan" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="name" class="col-form-label">Nama</label>
                                        <div class="col">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}" autocomplete="off"
                                                autofocus required>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="whatsapp" class="col col-form-label">Nomor WhatsApp</label>
                                        <div class="col">
                                            <input type="text"
                                                class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp"
                                                name="whatsapp" value="{{ old('whatsapp') }}" autocomplete="off" required>
                                            @error('whatsapp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="asal" class="col col-form-label">Instansi / Mandiri</label>
                                        <div class="col">
                                            <input type="text" class="form-control @error('asal') is-invalid @enderror"
                                                id="asal" name="asal" value="{{ old('asal') }}" autocomplete="off"
                                                required>
                                            @error('asal')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="alamat" class="col col-form-label">Alamat</label>
                                        <div class="col">
                                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                                id="alamat" name="alamat" value="{{ old('alamat') }}" autocomplete="off"
                                                required>
                                            @error('alamat')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="tanggal" class="col col-form-label">Tanggal</label>
                                        <div class="col">
                                            <input type="date"
                                                class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                                                name="tanggal" value="{{ old('tanggal') }}" required>
                                            @error('tanggal')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="waktu" class="col col-form-label">Waktu</label>
                                        <div class="col">
                                            <input type="time" class="form-control @error('waktu') is-invalid @enderror"
                                                id="waktu" name="waktu" value="{{ old('waktu') }}" required>
                                            @error('waktu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="staff" class="col col-form-label">Nama Staff</label>
                                        <select class="form-select" name="staff" id="staff"
                                            aria-label="Default select example">
                                            <option selected disabled>Pilih staff</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="tujuan" class="col col-form-label">Tujuan</label>
                                        <div class="col">
                                            <input type="text"
                                                class="form-control @error('tujuan') is-invalid @enderror" id="tujuan"
                                                name="tujuan" value="{{ old('tujuan') }}" autocomplete="off" required>
                                            @error('tujuan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="suhu" class="col col-form-label">Suhu</label>
                                        <div class="col">
                                            <input type="text" class="form-control @error('suhu') is-invalid @enderror"
                                                id="suhu" name="suhu" autocomplete="off" required>
                                            @error('suhu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="nomorAntrianFix" class="col col-form-label">Nomor Antrian</label>
                                        <div class="col">
                                            <div class="d-flex column-gap-2">
                                                <input type="text"
                                                    class="form-control @error('nomorAntrianFix') is-invalid @enderror"
                                                    id="nomorAntrianFix" name="nomorAntrianFix" autocomplete="off"
                                                    value="{{ old('nomorAntrianFix', $nomorAntrians->nomorAntrian) }}"
                                                    required>
                                                @error('nomorAntrianFix')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <a href="/form/nomor-antrian" class="btn btn-secondary">Ambil</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary col">Submit</button>
                                </div>
                            </form><!-- End Horizontal Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <script></script>
@endsection
