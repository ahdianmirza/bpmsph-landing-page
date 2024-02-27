<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konsultasi Kunjungan Table</title>
</head>

<body>
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">No. WhatsApp</th>
                <th scope="col">Instansi / Mandiri</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Nama Staff</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Suhu (°C)</th>
                <th scope="col">Nomor Antrian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataKonsul as $konsul)
                <tr>
                    <td>{{ $konsul->name }}</td>
                    <td>{{ $konsul->whatsapp }}</td>
                    <td>{{ $konsul->asal }}</td>
                    <td>{{ $konsul->alamat }}</td>
                    <td>{{ date('d-m-Y', strtotime($konsul->tanggal)) }}</td>
                    <td>{{ $konsul->waktu }}</td>
                    <td>{{ $konsul->staff }}</td>
                    <td>{{ $konsul->tujuan }}</td>
                    <td>{{ $konsul->suhu }}</td>
                    <td>{{ $konsul->nomorAntrianKonsul }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
