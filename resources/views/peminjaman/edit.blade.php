<!DOCTYPE html>
<html>
<head>
    <title>Edit Peminjaman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-warning">

            <h3>Edit Peminjaman</h3>

        </div>

        <div class="card-body">

            <form method="POST"
                  action="/peminjaman/ubah/{{ $data->id }}">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Buku
                    </label>

                    <select name="book_id"
                            class="form-select">

                        @foreach($buku as $b)

                        <option value="{{ $b->id }}"
                        {{ $data->book_id == $b->id ? 'selected' : '' }}>

                            {{ $b->judul }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Nama Peminjam
                    </label>

                    <input type="text"
                           name="nama_peminjam"
                           value="{{ $data->nama_peminjam }}"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Tanggal Pinjam
                    </label>

                    <input type="date"
                           name="tanggal_pinjam"
                           value="{{ $data->tanggal_pinjam }}"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Tanggal Kembali
                    </label>

                    <input type="date"
                           name="tanggal_kembali"
                           value="{{ $data->tanggal_kembali }}"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Status
                    </label>

                    <select name="status"
                            class="form-select">

                        <option value="Dipinjam"
                        {{ $data->status == 'Dipinjam' ? 'selected' : '' }}>
                            Dipinjam
                        </option>

                        <option value="Dikembalikan"
                        {{ $data->status == 'Dikembalikan' ? 'selected' : '' }}>
                            Dikembalikan
                        </option>

                    </select>

                </div>

                <button type="submit"
                        class="btn btn-warning">
                    Update
                </button>

                <a href="/peminjaman"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>