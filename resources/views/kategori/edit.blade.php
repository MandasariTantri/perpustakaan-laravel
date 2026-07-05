<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-warning">

            <h3>Edit Kategori</h3>

        </div>

        <div class="card-body">

            <form method="POST"
                  action="/kategori/ubah/{{ $data->id }}">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Nama Kategori
                    </label>

                    <input type="text"
                           name="nama_kategori"
                           value="{{ $data->nama_kategori }}"
                           class="form-control"
                           required>

                </div>

                <button type="submit"
                        class="btn btn-warning">
                    Update
                </button>

                <a href="/kategori"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>