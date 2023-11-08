@extends('layouts.form')

@section('container')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Ulasan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Ulasan</li>
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
                            <h5 class="card-title">Ulasan</h5>

                            <!-- Horizontal Form -->
                            <form action="/ulasan" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="">
                                            <div class="btn-group d-flex justify-content-between" role="group">
                                                <div class="d-flex flex-column justify-content-center align-items-center">
                                                    <input type="radio" class="btn-check" name="ulasan" id="tidak-puas"
                                                        autocomplete="off" value="Tidak Puas">
                                                    <label class="btn btn-outline-primary" for="tidak-puas">
                                                        <img src="assets/img/tidak-puas.png" alt="Tidak Puas"
                                                            width="70">
                                                    </label>
                                                    <p class="mt-1"><small>Tidak Puas</small></p>
                                                </div>

                                                <div class="d-flex flex-column justify-content-center align-items-center">
                                                    <input type="radio" class="btn-check" name="ulasan" id="kurang-puas"
                                                        autocomplete="off" value="Kurang Puas">
                                                    <label class="btn btn-outline-primary" for="kurang-puas">
                                                        <img src="assets/img/kurang-puas.png" alt="Kurang Puas"
                                                            width="70">
                                                    </label>
                                                    <p class="mt-1"><small>Kurang Puas</small></p>
                                                </div>

                                                <div class="d-flex flex-column justify-content-center align-items-center">
                                                    <input type="radio" class="btn-check" name="ulasan" id="puas"
                                                        autocomplete="off" value="Puas">
                                                    <label class="btn btn-outline-primary" for="puas">
                                                        <img src="assets/img/puas.png" alt="Puas" width="70">
                                                    </label>
                                                    <p class="mt-1"><small>Puas</small></p>
                                                </div>

                                                <div class="d-flex flex-column justify-content-center align-items-center">
                                                    <input type="radio" class="btn-check" name="ulasan" id="sangat-puas"
                                                        autocomplete="off" value="Sangat Puas">
                                                    <label class="btn btn-outline-primary" for="sangat-puas">
                                                        <img src="assets/img/sangat-puas.png" alt="Sangat Puas"
                                                            width="70">
                                                    </label>
                                                    <p class="mt-1"><small>Sangat Puas</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column">
                                        <label for="komentar" class="col-form-label">Komentar</label>
                                        <div class="col">
                                            <input type="text"
                                                class="form-control @error('komentar') is-invalid @enderror" id="komentar"
                                                name="komentar" autocomplete="off" value="{{ old('komentar') }}" autofocus
                                                required>
                                            @error('komentar')
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
@endsection
