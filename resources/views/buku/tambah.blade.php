<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-success text-white">

            <h3>Tambah Buku</h3>

        </div>

        <div class="card-body">

            <form method="POST"
                  action="/buku/simpan"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Kategori
                    </label>

                    <select name="category_id"
                            class="form-select">

                        @foreach($kategori as $k)

                        <option value="{{ $k->id }}">
                            {{ $k->nama_kategori }}
                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Judul Buku
                    </label>

                    <input type="text"
                           name="judul"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Penulis
                    </label>

                    <input type="text"
                           name="penulis"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Tahun
                    </label>

                    <input type="number"
                           name="tahun"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Stok
                    </label>

                    <input type="number"
                           name="stok"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Cover Buku
                    </label>

                    <input type="file"
                           name="cover"
                           class="form-control">

                </div>

                <button type="submit"
                        class="btn btn-success">
                    Simpan
                </button>

                <a href="/buku"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>