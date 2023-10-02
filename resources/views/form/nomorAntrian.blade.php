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
                            <h5 class="card-title">Pengambilan Nomor Antrian</h5>
                            <!-- Horizontal Form -->
                            <form action="/konsultasi-kunjungan" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="nomorAntrian" class="col col-form-label">Nomor Antrian</label>
                                        <div class="col">
                                            <input type="text"
                                                class="form-control @error('nomorAntrian') is-invalid @enderror"
                                                id="nomorAntrian" name="nomorAntrian" autocomplete="off" required>
                                            @error('nomorAntrian')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

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
