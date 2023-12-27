@extends('layouts.form')

@section('container')
    <main id="main" class="main">
        <div class="pagetitle d-flex column-gap-3 align-items-center">
            <a href="/" class="btn btn-primary">
                <i class="bi bi-arrow-left-short"></i> Home
            </a>
            <div>
                <h1>Form Konsultasi / Kunjungan</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Konsultasi</li>
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

                            <h5 class="card-title">Identitas Pengunjung dan Keterangan Kunjungan</h5>
                            <!-- Horizontal Form -->
                            <form action="/konsultasi-kunjungan" method="post" name="konsulForm">
                                @csrf
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="name" class="col-form-label">Nama</label>
                                        <div class="col">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}"
                                                onkeyup="checkForm()" autocomplete="off" autofocus required>
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
                                                name="whatsapp" value="{{ old('whatsapp') }}" autocomplete="off"
                                                onkeyup="checkForm()" required>
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
                                                id="asal" name="asal" value="{{ old('asal') }}"
                                                onkeyup="checkForm()" autocomplete="off" required>
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
                                                id="alamat" name="alamat" value="{{ old('alamat') }}"
                                                onkeyup="checkForm()" autocomplete="off" required>
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
                                                name="tanggal" value="{{ old('tanggal') }}" onfocus="checkForm()" required>
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
                                                id="waktu" name="waktu" value="{{ old('waktu') }}"
                                                onfocus="checkForm()" required>
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
                                            aria-label="Default select example" onfocus="checkForm()">
                                            <option selected disabled>Pilih staff</option>
                                            @foreach ($pegawais as $pegawai)
                                                <option value="{{ $pegawai->name }}">{{ $pegawai->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="d-flex flex-column">
                                        <label for="tujuan" class="col col-form-label">Tujuan</label>
                                        <div class="col">
                                            <input type="text"
                                                class="form-control @error('tujuan') is-invalid @enderror" id="tujuan"
                                                name="tujuan" value="{{ old('tujuan') }}" autocomplete="off"
                                                onkeyup="checkForm()" required>
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
                                                id="suhu" name="suhu" autocomplete="off" onblur="checkForm()"
                                                required>
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
                                        <label for="nomorAntrian" class="col col-form-label">Nomor Antrian</label>
                                        <div class="col">
                                            <div class="d-flex column-gap-2">
                                                <input type="text"
                                                    class="form-control @error('nomorAntrianKonsul') is-invalid @enderror"
                                                    value="{{ old('nomorAntrianKonsul', $nomorAntrians->nomorAntrian) }}"
                                                    id="nomorAntrian" name="nomorAntrianKonsul" autocomplete="off"
                                                    onblur="checkFormSample()" required>
                                                @error('nomorAntrianKonsul')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <button type="button" onclick="postPosisiKonsul()"
                                                    class="btn btn-secondary" value="Ambil">Ambil</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary col" id="submitButton"
                                        disabled="disabled" data-bs-toggle="modal" data-bs-target="#confirmModal"
                                        value="Send Data">Kirim</button>
                                </div>

                                {{-- Confirm Modal Start --}}
                                <div class="modal fade" id="confirmModal" tabindex="-1"
                                    aria-labelledby="confirmModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="confirmModalLabel">Pakta Integritas</h1>
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
        function checkForm() {
            let konsulForm = document.forms['konsulForm'].elements;
            console.info(konsulForm);
            const submitButton = document.getElementById("submitButton");
            let fieldMustBeFilled = true;

            for (let i = 0; i < konsulForm.length; i++) {
                if (konsulForm[i].value.length == 0) {
                    fieldMustBeFilled = false;
                }
            }

            if (fieldMustBeFilled) {
                document.getElementById("submitButton").disabled = false;
            } else {
                document.getElementById("submitButton").disabled = true;
            }
        }
    </script>

    <script>
        setInterval(() => {
            getSuhuKonsul();
            getAntrianKonsul();
        }, 1000);

        function getSuhuKonsul() {
            const ajax = new XMLHttpRequest();
            ajax.open("GET", "/api/get-suhu");
            ajax.onload = () => {
                const json = JSON.parse(ajax.responseText);
                console.info("suhu = ", json[0].suhu);
                document.getElementById("suhu").value = json[0].suhu;
            };
            ajax.send();
        }

        function getAntrianKonsul() {
            const ajax = new XMLHttpRequest();
            ajax.open("GET", "/api/get-nomor-antrian");
            ajax.onload = () => {
                const json = JSON.parse(ajax.responseText);
                console.info("Antrian = ", json[0].nomorAntrian);
                document.getElementById("nomorAntrian").value = json[0].nomorAntrian;
            };
            ajax.send();
        }

        function postPosisiKonsul() {
            const ajax = new XMLHttpRequest();
            ajax.open("POST", "/api/post-posisi");
            ajax.onload = () => {
                console.info(ajax.responseText);
            };
            ajax.setRequestHeader("Content-Type", "application/json");
            ajax.send(JSON.stringify({
                posisi: "tamu"
            }));
        }
    </script>
@endsection
