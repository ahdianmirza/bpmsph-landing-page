<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample Table</title>
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
                <th scope="col">Jenis Sample</th>
                <th scope="col">Suhu (°C)</th>
                <th scope="col">Nomor Antrian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataSample as $sample)
                <tr>
                    <td>{{ $sample->name }}</td>
                    <td>{{ $sample->whatsapp }}</td>
                    <td>{{ $sample->asal }}</td>
                    <td>{{ $sample->alamat }}</td>
                    <td>{{ date('d-m-Y', strtotime($sample->tanggal)) }}</td>
                    <td>{{ $sample->waktu }}</td>
                    <td>{{ $sample->jenis }}</td>
                    <td>{{ $sample->suhu }}</td>
                    <td>{{ $sample->nomorAntrian }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
