@extends('layouts.dashboard')

@section('container')
    @extends('layouts.dashboard')

@section('container')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Data Pegawai</h1>
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
                            <!-- Horizontal Form -->
                            <form action="/dashboard/data-pegawai/create" method="post">
                                @csrf
                                <div class="row my-3">
                                    <div class="d-flex flex-column">
                                        <label for="name" class="col-form-label">Nama Staff</label>
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
                                        <label for="jabatan" class="col col-form-label">Jabatan</label>
                                        <div class="col">
                                            <input type="text"
                                                class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                                                name="jabatan" value="{{ old('jabatan') }}" autocomplete="off" required>
                                            @error('jabatan')
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

@endsection
