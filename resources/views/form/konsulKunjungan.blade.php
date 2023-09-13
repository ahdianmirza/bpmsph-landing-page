@extends('layouts.form')

@section('container')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Konsultasi / Kunjungan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Identitas</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Identitas Pengunjung dan Keterangan Kunjungan</h5>
                            <!-- Horizontal Form -->
                            <form action="" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="name" class="col-form-label">Nama</label>
                                        <div class="col">
                                            <input type="text" class="form-control" id="name" name="name"
                                                autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="whatsapp" class="col col-form-label">Nomor WhatsApp</label>
                                        <div class="col">
                                            <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                                autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="asal" class="col col-form-label">Instansi / Mandiri</label>
                                        <div class="col">
                                            <input type="text" class="form-control" id="asal" name="asal"
                                                autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="alamat" class="col col-form-label">Alamat</label>
                                        <div class="col">
                                            <input type="text" class="form-control" id="alamat" name="alamat"
                                                autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="tanggal" class="col col-form-label">Tanggal</label>
                                        <div class="col">
                                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="waktu" class="col col-form-label">Waktu</label>
                                        <div class="col">
                                            <input type="time" class="form-control" id="waktu" name="waktu"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="" class="col col-form-label">Select</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected disabled>Open this select menu</option>
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
                                            <input type="text" class="form-control" id="tujuan" name="tujuan"
                                                autocomplete="off" required>
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
