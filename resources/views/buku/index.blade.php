<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            <h3>Data Buku</h3>

        </div>

        <div class="card-body">

            <a href="/"
               class="btn btn-secondary">
                Dashboard
            </a>

            <a href="/buku/tambah"
               class="btn btn-success">
                Tambah Buku
            </a>

            <br><br>

            <table class="table table-bordered table-striped align-middle">

                <thead>

                <tr>
                    <th>ID</th>
                    <th>Cover</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                    <th width="180">Aksi</th>
                </tr>

                </thead>

                <tbody>

                @foreach($data as $d)

                <tr>

                    <td>{{ $d->id }}</td>

                    <td>

                        @if($d->cover)

                        <img src="{{ asset('storage/'.$d->cover) }}"
                             width="80"
                             class="img-thumbnail">

                        @else

                        Tidak Ada Cover

                        @endif

                    </td>

                    <td>{{ $d->category->nama_kategori }}</td>

                    <td>{{ $d->judul }}</td>

                    <td>{{ $d->penulis }}</td>

                    <td>{{ $d->tahun }}</td>

                    <td>{{ $d->stok }}</td>

                    <td>

                        <a href="/buku/edit/{{ $d->id }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="/buku/hapus/{{ $d->id }}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin hapus buku?')">
                            Hapus
                        </a>

                    </td>

                </tr>

                @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>