<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-warning">

            <h3>Edit Buku</h3>

        </div>

        <div class="card-body">

            <form method="POST"
                  action="/buku/ubah/{{ $data->id }}"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Kategori
                    </label>

                    <select name="category_id"
                            class="form-select">

                        @foreach($kategori as $k)

                        <option value="{{ $k->id }}"
                        {{ $data->category_id == $k->id ? 'selected' : '' }}>

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
                           value="{{ $data->judul }}"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Penulis
                    </label>

                    <input type="text"
                           name="penulis"
                           value="{{ $data->penulis }}"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Tahun
                    </label>

                    <input type="number"
                           name="tahun"
                           value="{{ $data->tahun }}"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Stok
                    </label>

                    <input type="number"
                           name="stok"
                           value="{{ $data->stok }}"
                           class="form-control">

                </div>

                @if($data->cover)

                <div class="mb-3">

                    <img src="{{ asset('storage/'.$data->cover) }}"
                         width="120"
                         class="img-thumbnail">

                </div>

                @endif

                <div class="mb-3">

                    <label class="form-label">
                        Ganti Cover
                    </label>

                    <input type="file"
                           name="cover"
                           class="form-control">

                </div>

                <button type="submit"
                        class="btn btn-warning">
                    Update
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