<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-warning">

            <h3>Data Peminjaman Buku</h3>

        </div>

        <div class="card-body">

            <a href="/"
               class="btn btn-secondary">
                Dashboard
            </a>

            <a href="/peminjaman/tambah"
               class="btn btn-success">
                Tambah Peminjaman
            </a>

            <a href="/laporan-peminjaman"
               class="btn btn-info">
                Cetak PDF
            </a>

            <br><br>

            <table class="table table-bordered table-striped">

                <thead>

                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Nama Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th width="180">Aksi</th>
                </tr>

                </thead>

                <tbody>

                @foreach($data as $d)

                <tr>

                    <td>{{ $d->id }}</td>

                    <td>{{ $d->book->judul }}</td>

                    <td>{{ $d->nama_peminjam }}</td>

                    <td>{{ $d->tanggal_pinjam }}</td>

                    <td>{{ $d->tanggal_kembali }}</td>

                    <td>

                        @if($d->status == 'Dipinjam')

                            <span class="badge bg-warning">
                                Dipinjam
                            </span>

                        @else

                            <span class="badge bg-success">
                                Dikembalikan
                            </span>

                        @endif

                    </td>

                    <td>

                        <a href="/peminjaman/edit/{{ $d->id }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="/peminjaman/hapus/{{ $d->id }}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin hapus data?')">
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