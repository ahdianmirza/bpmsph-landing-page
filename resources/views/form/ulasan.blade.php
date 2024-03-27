@extends('layouts.form')

@section('container')
    <main id="main" class="main">
        <div class="pagetitle d-flex column-gap-3 align-items-center">
            <a href="/" class="btn btn-primary">
                <i class="bi bi-arrow-left-short"></i> Home
            </a>

            <div>
                <h1>Form Ulasan</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Ulasan</li>
                    </ol>
                </nav>
            </div>
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
                            <form action="/ulasan" method="post" name="formUlasan">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <div>
                                                <label for="kelamin" class="col-form-label">Kelamin</label>
                                                <ul class="list-group list-group-horizontal">
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="radio" name="kelamin"
                                                            value="perempuan" id="perempuan" onclick="checkFormUlasan()">
                                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" type="radio" name="kelamin"
                                                            value="laki" id="laki" onclick="checkFormUlasan()">
                                                        <label class="form-check-label" for="laki">Laki</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div>
                                                <label for="umur" class="col-form-label">Umur</label>
                                                <select class="form-select" aria-label="age select"
                                                    onclick="checkFormUlasan()" id="umur" name="umur">
                                                    <option selected disabled>Pilih umur</option>
                                                    <option value="<20">
                                                        {{ '<20 tahun' }}</option>
                                                    <option value=">20 <25">{{ '>20 tahun <25 tahun' }}</option>
                                                    <option value=">25 <30">{{ '>25 tahun <30 tahun' }}</option>
                                                    <option value=">30">{{ '>30 tahun' }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="col-7">
                                            <div class="mb-3">
                                                <div class="btn-group d-flex flex-row-reverse justify-content-between"
                                                    role="group">
                                                    <div
                                                        class="d-flex flex-column justify-content-center align-items-center">
                                                        <input type="radio" onclick="checkFormUlasan()" class="btn-check"
                                                            name="ulasan" id="tidak-puas" autocomplete="off"
                                                            value="Tidak Puas">
                                                        <label class="btn btn-outline-primary" for="tidak-puas">
                                                            <img src="assets/img/emoticon/tidak-puas.png" alt="Tidak Puas"
                                                                width="100">
                                                        </label>
                                                        <p class="mt-1"><small>Tidak Puas</small></p>
                                                    </div>

                                                    <div
                                                        class="d-flex flex-column justify-content-center align-items-center">
                                                        <input type="radio" onclick="checkFormUlasan()" class="btn-check"
                                                            name="ulasan" id="kurang-puas" autocomplete="off"
                                                            value="Kurang Puas">
                                                        <label class="btn btn-outline-primary" for="kurang-puas">
                                                            <img src="assets/img/emoticon/kurang-puas.png" alt="Kurang Puas"
                                                                width="100">
                                                        </label>
                                                        <p class="mt-1"><small>Kurang Puas</small></p>
                                                    </div>

                                                    <div
                                                        class="d-flex flex-column justify-content-center align-items-center">
                                                        <input type="radio" onclick="checkFormUlasan()" class="btn-check"
                                                            name="ulasan" id="puas" autocomplete="off" value="Puas">
                                                        <label class="btn btn-outline-primary" for="puas">
                                                            <img src="assets/img/emoticon/puas.png" alt="Puas"
                                                                width="100">
                                                        </label>
                                                        <p class="mt-1"><small>Puas</small></p>
                                                    </div>

                                                    <div
                                                        class="d-flex flex-column justify-content-center align-items-center">
                                                        <input type="radio" onclick="checkFormUlasan()"
                                                            class="btn-check" name="ulasan" id="sangat-puas"
                                                            autocomplete="off" value="Sangat Puas">
                                                        <label class="btn btn-outline-primary" for="sangat-puas">
                                                            <img src="assets/img/emoticon/sangat-puas.png"
                                                                alt="Sangat Puas" width="100">
                                                        </label>
                                                        <p class="mt-1"><small>Sangat Puas</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="col-10">
                                            <div class="mb-3">
                                                <table class="table" style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="text-center">Aspek</th>
                                                            <th scope="col" class="text-center" colspan="5">Nilai
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Kualitas Layanan SmartWait</td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kualitas" value="5" id="kualitas-5"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label" for="kualitas-5">5</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kualitas" value="4" id="kualitas-4"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label" for="kualitas-4">4</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kualitas" value="3" id="kualitas-3"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label" for="kualitas-3">3</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kualitas" value="2" id="kualitas-2"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label" for="kualitas-2">2</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kualitas" value="1" id="kualitas-1"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label" for="kualitas-1">1</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kecepatan Layanan</td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kecepatan" value="5" id="kecepatan-5"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label"
                                                                    for="kecepatan-5">5</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kecepatan" value="4" id="kecepatan-4"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label"
                                                                    for="kecepatan-4">4</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kecepatan" value="3" id="kecepatan-3"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label"
                                                                    for="kecepatan-3">3</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kecepatan" value="2" id="kecepatan-2"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label"
                                                                    for="kecepatan-2">2</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kecepatan" value="1" id="kecepatan-1"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label"
                                                                    for="kecepatan-1">1</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kemudahan Penggunaan</td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kemudahan" value="5" id="kemudahan-5"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label"
                                                                    for="kemudahan-5">5</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kemudahan" value="4" id="kemudahan-4"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label"
                                                                    for="kemudahan-4">4</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kemudahan" value="3" id="kemudahan-3"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label"
                                                                    for="kemudahan-3">3</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kemudahan" value="2" id="kemudahan-2"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label"
                                                                    for="kemudahan-2">2</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="kemudahan" value="1" id="kemudahan-1"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label"
                                                                    for="kemudahan-1">1</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Notifikasi WhatsApp</td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="whatsapp" value="5" id="whatsapp-5"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label" for="whatsapp-5">5</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="whatsapp" value="4" id="whatsapp-4"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label" for="whatsapp-4">4</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="whatsapp" value="3" id="whatsapp-3"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label" for="whatsapp-3">3</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="whatsapp" value="2" id="whatsapp-2"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label" for="whatsapp-2">2</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="whatsapp" value="1" id="whatsapp-1"
                                                                    onclick="checkFormUlasan()">
                                                                <label class="form-check-label" for="whatsapp-1">1</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ketersediaan fitur QnA dengan admin</td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="qna" value="5" id="qna-5">
                                                                <label class="form-check-label" for="qna-5"
                                                                    onclick="checkFormUlasan()">5</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="qna" value="4" id="qna-4">
                                                                <label class="form-check-label" for="qna-4"
                                                                    onclick="checkFormUlasan()">4</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="qna" value="3" id="qna-3">
                                                                <label class="form-check-label" for="qna-3"
                                                                    onclick="checkFormUlasan()">3</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="qna" value="2" id="qna-2">
                                                                <label class="form-check-label" for="qna-2"
                                                                    onclick="checkFormUlasan()">2</label>
                                                            </td>
                                                            <td>
                                                                <input class="form-check-input me-1" type="radio"
                                                                    name="qna" value="1" id="qna-1">
                                                                <label class="form-check-label" for="qna-1"
                                                                    onclick="checkFormUlasan()">1</label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column">
                                        <label for="komentar" class="col-form-label">Komentar</label>
                                        <div class="col-6">
                                            <textarea class="form-control @error('komentar') is-invalid @enderror" id="komentar" rows="4" name="komentar"
                                                onkeyup="checkFormUlasan()" required></textarea>
                                            {{-- <input type="text" onkeyup="checkFormUlasan()"
                                                class="form-control @error('komentar') is-invalid @enderror"
                                                id="komentar" name="komentar" checked autocomplete="off"
                                                value="{{ old('komentar') }}" autofocus required> --}}
                                            @error('komentar')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button id="submitUlasan" disabled="disabled" type="submit" value="submit"
                                        class="btn btn-primary col">Kirim</button>
                                </div>
                            </form><!-- End Horizontal Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <script>
        function checkFormUlasan() {
            let formUlasan = document.forms['formUlasan'].elements;
            const submitUlasanButton = document.getElementById("submitUlasan");
            const ulasan = document.querySelector('input[type="radio"]:checked');
            let fieldMustBeFilledUlasan = true;

            for (let i = 0; i < formUlasan.length; i++) {
                if (formUlasan[i].value.length == 0) {
                    fieldMustBeFilledUlasan = false;
                }
            }

            if (!ulasan) {
                fieldMustBeFilledUlasan = false;
            }

            if (fieldMustBeFilledUlasan) {
                document.getElementById("submitUlasan").disabled = false;
            } else {
                document.getElementById("submitUlasan").disabled = true;
            }
        }

        const submitUlasan = document.getElementById('submitUlasan');
        submitUlasan.onclick = () => {
            window.open("https://forms.gle/KpEFMHvv6UdQBcKu9", '_blank')
        }
    </script>
@endsection
