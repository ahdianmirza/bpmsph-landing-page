<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Suhu Table</title>
</head>

<body>
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">Waktu</th>
                <th scope="col">Nama</th>
                <th scope="col">Instansi / Mandiri</th>
                <th scope="col">Keperluan</th>
                <th scope="col">Suhu (°C)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataSuhu as $suhu)
                <tr>
                    <td>{{ date('d-m-Y H:i', strtotime($suhu->created_at)) }}</td>
                    <td>{{ $suhu->name }}</td>
                    <td>{{ $suhu->asal }}</td>
                    <td>{{ $suhu->keperluan }}</td>
                    <td>{{ floatval($suhu->suhu) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
