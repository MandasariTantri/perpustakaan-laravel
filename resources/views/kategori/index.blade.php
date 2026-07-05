<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h3>Data Kategori</h3>

        </div>

        <div class="card-body">

            <a href="/"
               class="btn btn-secondary">
                Dashboard
            </a>

            <a href="/kategori/tambah"
               class="btn btn-success">
                Tambah Kategori
            </a>

            <br><br>

            <table class="table table-bordered table-striped">

                <thead>

                <tr>
                    <th>ID</th>
                    <th>Nama Kategori</th>
                    <th width="200">Aksi</th>
                </tr>

                </thead>

                <tbody>

                @foreach($data as $d)

                <tr>

                    <td>{{ $d->id }}</td>

                    <td>{{ $d->nama_kategori }}</td>

                    <td>

                        <a href="/kategori/edit/{{ $d->id }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="/kategori/hapus/{{ $d->id }}"
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