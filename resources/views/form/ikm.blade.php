@extends('layouts.form')

@section('container')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form IKM</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item">Ulasan</li>
                    <li class="breadcrumb-item active">IKM</li>
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
                            <h5 class="card-title">Form IKM</h5>

                            <div class="row mb-3">
                                <div class="d-flex flex-column">
                                    <p>Silahkan mengisi form IKM dengan mengklik link di bawah.</p>
                                    <a href="https://forms.gle/KpEFMHvv6UdQBcKu9" target="_blank"
                                        class="text-decoration-underline">https://forms.gle/KpEFMHvv6UdQBcKu9</a>
                                </div>
                            </div>

                            <a href="/ulasan" class="btn btn-primary">Kembali ke Ulasan</a>
                            <a href="/" class="btn btn-primary">Kembali ke Infodesk</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
