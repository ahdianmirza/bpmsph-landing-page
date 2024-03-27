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
                <th scope="col">Kelamin</th>
                <th scope="col">Umur</th>
                <th scope="col">Kepuasan</th>
                <th scope="col">Kualitas</th>
                <th scope="col">Kecepatan</th>
                <th scope="col">Kemudahan</th>
                <th scope="col">WhatsApp</th>
                <th scope="col">QnA</th>
                <th scope="col">Komentar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataUlasan as $ulasan)
                <tr>
                    <td>{{ $ulasan->kelamin == 'laki' ? 'Laki-Laki' : 'Perempuan' }}</td>
                    @if ($ulasan->umur == '<20')
                        <td>{{ '<20 tahun' }}</td>
                    @endif
                    @if ($ulasan->umur == '>20 <25')
                        <td>{{ '>20 tahun <25 tahun' }}</td>
                    @endif
                    @if ($ulasan->umur == '>25 <30')
                        <td>{{ '>25 tahun <30 tahun' }}</td>
                    @endif
                    @if ($ulasan->umur == '>30')
                        <td>{{ '>30 tahun' }}</td>
                    @endif
                    <td>{{ $ulasan->ulasan }}</td>
                    <td>{{ $ulasan->kualitas }}</td>
                    <td>{{ $ulasan->kecepatan }}</td>
                    <td>{{ $ulasan->kemudahan }}</td>
                    <td>{{ $ulasan->whatsapp }}</td>
                    <td>{{ $ulasan->qna }}</td>
                    <td>{{ $ulasan->komentar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
