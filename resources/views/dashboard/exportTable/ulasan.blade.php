<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ulasan Table</title>
</head>

<body>
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">Ulasan</th>
                <th scope="col">Komentar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataUlasan as $ulasan)
                <tr>
                    <td>{{ $ulasan->ulasan }}</td>
                    <td>{{ $ulasan->komentar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
