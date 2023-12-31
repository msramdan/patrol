<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Export</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    <table class="table">
        <thead>
            <tr>
                <td>Nama</td>
                <td>Judul</td>
                <td>Lokasi</td>
                <td>No Laporan</td>
                <td>No HP</td>
                <td>Tanggal</td>
                <td>Photo</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->no_laporan }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                    {{-- <td><img src="{{ asset('storage/photos/'.$item->photo) }}"></td> --}}
                    <td>
                        <?php
                            $imagePath = public_path('storage/photos/'.$item->photo);
                            $imageData = file_get_contents($imagePath);
                            $base64Image = base64_encode($imageData);
                        ?>
                        <img src="data:image/jpeg;base64,{{ $base64Image }}" alt="Gambar"  style="width: 150px; padding:5px">
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>


</body>
</html>
