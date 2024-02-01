@extends('layouts.form')

@section('container')
    <main id="main" class="main">
        <div class="pagetitle d-flex column-gap-3 align-items-center">
            <a href="/" class="btn btn-primary">
                <i class="bi bi-arrow-left-short"></i> Home
            </a>
            <div>
                <h1>Form Pengantaran Sample Uji</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Sample Uji</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success mt-3" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <h5 class="card-title">Identitas Pengunjung dan Keterangan Sample</h5>
                            <!-- Horizontal Form -->
                            <form action="/sample-uji" method="post" name="sampleForm">
                                @csrf
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="name" class="col-form-label">Nama</label>
                                        <div class="col">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" autocomplete="off" onkeyup="checkFormSample()"
                                                value="{{ old('name') }}" autofocus required>
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
                                                name="whatsapp" autocomplete="off" value="{{ old('whatsapp') }}"
                                                onkeyup="checkFormSample()" required>
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
                                                id="asal" name="asal" autocomplete="off" value="{{ old('asal') }}"
                                                onkeyup="checkFormSample()" required>
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
                                                id="alamat" name="alamat" autocomplete="off" value="{{ old('alamat') }}"
                                                onkeyup="checkFormSample()" required>
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
                                        <div class="col-2">
                                            <input type="date"
                                                class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                                                name="tanggal" value="{{ old('tanggal') }}" onfocus="checkFormSample()"
                                                required>
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
                                        <div class="col-2">
                                            <input type="time" class="form-control @error('waktu') is-invalid @enderror"
                                                id="waktu" name="waktu" value="{{ old('waktu') }}"
                                                onfocus="checkFormSample()" required>
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
                                        <label for="jenis" class="col col-form-label">Jenis Sample</label>
                                        <div class="col">
                                            <input type="text"
                                                class="form-control @error('jenis') is-invalid @enderror" id="jenis"
                                                name="jenis" autocomplete="off" value="{{ old('jenis') }}"
                                                onkeyup="checkFormSample()" required>
                                            @error('jenis')
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
                                                id="suhu" name="suhu" autocomplete="off"
                                                onblur="checkFormSample()" required>
                                            @error('suhu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div>
                                            {{-- <span id="suhu">0</span> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="nomorAntrian" class="col col-form-label">Nomor Antrian</label>
                                        <div class="col-2">
                                            <div class="d-flex column-gap-2">
                                                <input type="text"
                                                    class="form-control @error('nomorAntrian') is-invalid @enderror"
                                                    value="{{ old('nomorAntrian', $nomorAntrians->nomorAntrian) }}"
                                                    id="nomorAntrian" name="nomorAntrian" autocomplete="off"
                                                    onblur="checkFormSample()" required>
                                                @error('nomorAntrian')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <button type="button" onclick="postPosisiSample()"
                                                    class="btn btn-secondary" value="Ambil">Ambil</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary col" id="submitButtonSample"
                                        value="Kirim" disabled="disabled" data-bs-toggle="modal"
                                        data-bs-target="#confirmModalSample">Kirim</button>
                                </div>

                                {{-- Confirm Modal Start --}}
                                <div class="modal fade" id="confirmModalSample" tabindex="-1"
                                    aria-labelledby="confirmModalSampleLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="confirmModalSampleLabel">Pakta Integritas
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" value="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Mohon dibaca dengan hati-hati oleh pengguna layanan BPMSPH. Pakta
                                                    Integritas ini antara pengguna
                                                    layanan dan kami yang memberikan layanan di BPMSPH Bogor. BPMSPH Bogor
                                                    menerapkan ISO 9001:2015
                                                    tentang Sistem Manajemen Mutu, ISO 14001:2015 tentang Sistem Manajemen
                                                    Lingkungan, dan ISO
                                                    37001:2016 tentang Sistem Manajemen Anti Penyuapan. Selaku pengguna
                                                    layanan saya akan menyetujui
                                                    persyaratan dan ketentuan kami :</p>
                                                <ol>
                                                    <li>Tidak akan melakukan praktek Kolusi, Korupsi, Nepotisme (KKN) dan
                                                        Suap, Pungli, Gratifikasi
                                                        (SPG);</li>
                                                    <li>Akan melaporkan kepada pihak yang bertanggung jawab / berwajib /
                                                        berwenang apabila mengetahui
                                                        ada indikasi KKN dan SPG di dalam proses pelayanan ini;</li>
                                                    <li>Apabila melanggar hal-hal yang telah saya nyatakan dalam PAKTA
                                                        INTEGRITAS (KKN-SPG) ini saya
                                                        bersedia dikenakan sanksi moral, sanksi administrasi sesuai dengan
                                                        ketentuan peraturan
                                                        perundang-undangan yang berlaku.</li>
                                                </ol>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                    value="Tutup">Tutup</button>
                                                <button type="submit" class="btn btn-primary"
                                                    value="kirim">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Confirm Modal End --}}
                            </form><!-- End Horizontal Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <script>
        function checkFormSample() {
            let sampleForm = document.forms['sampleForm'].elements;
            console.info(sampleForm);
            const submitButtonSample = document.getElementById("submitButtonSample");
            let fieldMustBeFilledSample = true;

            for (let i = 0; i < sampleForm.length; i++) {
                if (sampleForm[i].value.length == 0) {
                    fieldMustBeFilledSample = false;
                }
            }

            if (fieldMustBeFilledSample) {
                submitButtonSample.disabled = false;
            } else {
                submitButtonSample.disabled = true;
            }
        }
    </script>

    <script>
        setInterval(() => {
            getSuhuSample();
            getAntrianSample();
        }, 1000);

        function getSuhuSample() {
            const ajax = new XMLHttpRequest();
            ajax.open("GET", "/api/get-suhu");
            ajax.onload = () => {
                const json = JSON.parse(ajax.responseText);
                console.info("suhu = ", json[0].suhu);
                document.getElementById("suhu").value = json[0].suhu;
            };
            ajax.send();
        }

        function getAntrianSample() {
            const ajax = new XMLHttpRequest();
            ajax.open("GET", "/api/get-nomor-antrian");
            ajax.onload = () => {
                const json = JSON.parse(ajax.responseText);
                console.info("Antrian = ", json[0].nomorAntrian);
                document.getElementById("nomorAntrian").value = json[0].nomorAntrian;
            };
            ajax.send();
        }

        function postPosisiSample() {
            const ajaxSample = new XMLHttpRequest();
            ajaxSample.open("POST", "/api/post-posisi");
            ajaxSample.onload = () => {
                console.info(ajaxSample.responseText);
            };
            ajaxSample.setRequestHeader("Content-Type", "application/json");
            ajaxSample.send(JSON.stringify({
                posisi: "sample"
            }));
        }
    </script>
@endsection
