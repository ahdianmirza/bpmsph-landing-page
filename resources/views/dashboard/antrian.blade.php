@extends('layouts.dashboard')

@section('container')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Antrian</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item">Antrian</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <h4>Antrian saat ini
                                    <span class="badge bg-warning">
                                        @if ($antrianProses)
                                            {{ $antrianProses->nomorAntrian }}
                                        @else
                                            Tidak Ditemukan
                                        @endif
                                    </span>
                                </h4>
                                {{-- <button type="button" class="btn btn-primary">Mulai Antrian</button> --}}
                                @if ($antrianProses)
                                    <form action="/dashboard/antrian/selesai" method="post">
                                        @method('put')
                                        @csrf
                                        <button class="btn btn-success">Selesai</button>
                                    </form>
                                @else
                                    <form action="/dashboard/antrian/selesai" method="post">
                                        @method('put')
                                        @csrf
                                        <button class="btn btn-success" disabled>Selesai</button>
                                    </form>
                                @endif
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Instansi / Mandiri</th>
                                        <th scope="col">Keperluan</th>
                                        <th scope="col">Nomor Antrian</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataAntrian as $antrian)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $antrian->name }}</td>
                                            <td>{{ $antrian->asal }}</td>
                                            <td>{{ $antrian->keperluan }}</td>
                                            <td>{{ $antrian->nomorAntrian }}</td>
                                            @if ($antrianProses)
                                                @if ($antrian->status === 'menunggu')
                                                    <td>
                                                        <div class="btn btn-danger btn-sm">Menunggu</div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            disabled>Mulai</button>
                                                        <button type="button" class="btn btn-secondary btn-sm"
                                                            disabled>Pending</button>
                                                    </td>
                                                @endif
                                                @if ($antrian->status === 'proses')
                                                    <td>
                                                        <div class="btn btn-warning btn-sm">Proses</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex column-gap-1">
                                                            <button type="button" class="btn btn-primary btn-sm"
                                                                disabled>Mulai</button>
                                                            <form action="/dashboard/antrian/{{ $antrian->id }}/menunggu"
                                                                method="post">
                                                                @method('put')
                                                                @csrf
                                                                <button class="btn btn-secondary btn-sm">Pending</button>
                                                            </form>
                                                            <button id="panggilButton" type="submit" onclick="panggil()"
                                                                class="btn btn-info btn-sm">Panggil</button>
                                                        </div>
                                                    </td>
                                                @endif
                                                @if ($antrian->status === 'selesai')
                                                    <td>
                                                        <div class="btn btn-success btn-sm">Selesai</div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            disabled>Mulai</button>
                                                        <button type="button" class="btn btn-secondary btn-sm"
                                                            disabled>Pending</button>
                                                    </td>
                                                @endif
                                            @else
                                                @if ($antrian->status === 'menunggu')
                                                    <td>
                                                        <div class="btn btn-danger btn-sm">Menunggu</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex column-gap-1">
                                                            <form action="/dashboard/antrian/{{ $antrian->id }}/proses"
                                                                method="post">
                                                                @method('put')
                                                                @csrf
                                                                <button class="btn btn-primary btn-sm">Mulai</button>
                                                            </form>
                                                            <button type="button" class="btn btn-secondary btn-sm"
                                                                disabled>Pending</button>
                                                        </div>
                                                    </td>
                                                @endif
                                                @if ($antrian->status === 'proses')
                                                    <td>
                                                        <div class="btn btn-warning btn-sm">Proses</div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            disabled>Mulai</button>
                                                        <button type="button"
                                                            class="btn btn-secondary btn-sm">Pending</button>
                                                    </td>
                                                @endif
                                                @if ($antrian->status === 'selesai')
                                                    <td>
                                                        <div class="btn btn-success btn-sm">Selesai</div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            disabled>Mulai</button>
                                                        <button type="button" class="btn btn-secondary btn-sm"
                                                            disabled>Pending</button>
                                                    </td>
                                                @endif
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

    <script>
        const panggilButton = document.getElementById('panggilButton');

        function getAntrianProses() {
            const request = new Request("/api/get-antrian", {
                method: "GET"
            });
            const response = fetch(request);
            return response.then((response) => response.json());
        }

        async function getAntrianProsesAsync() {
            const antrian = await getAntrianProses();
            return antrian.whatsapp;
        }

        const panggil = (e) => {
            getAntrianProses()
                .then((antrian) => {
                    console.info(antrian);
                    const message = formatMessage(antrian);
                    window.open(
                        `http://wa.me/62${parseInt(antrian.whatsapp)}?text=${encodeURIComponent(message)}`
                    );
                });
        }

        const formatMessage = (obj) => {
            return `Nomor Antrian Telah Diproses\n
Nama: ${obj.name}
Instansi: ${obj.asal}
Keperluan: ${obj.keperluan}
Nomor Antrian: ${obj.nomorAntrian}
Silahkan mengunjungi layanan terkait\n
Terima Kasih.`;
        };
    </script>
@endsection
