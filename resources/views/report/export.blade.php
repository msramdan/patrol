<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Export</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
@php
    use Carbon\Carbon;
@endphp
<style>
    table,
    th,
    td {
        border: 1px solid;
    }

    th {
        text-align: center;
    }

    td {
        text-align: center;
    }
</style>

<body>
    <table class="table table-" style="font-size: 12px">
        <thead class="thead-light">
            <tr>
                <th>No Laporan</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>No HP</th>
                <th>Tanggal</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->no_laporan }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                    <td>
                        <?php
                        $imagePath = public_path('storage/photos/' . $item->photo);
                        $imageData = file_get_contents($imagePath);
                        $base64Image = base64_encode($imageData);
                        ?>
                        <img src="data:image/jpeg;base64,{{ $base64Image }}" alt="Gambar" style="width: 150px; padding:5px">
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>


</body>

</html>
