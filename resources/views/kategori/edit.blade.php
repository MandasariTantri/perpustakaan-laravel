<h2>Edit Kategori</h2>

<form method="POST" action="/kategori/ubah/{{ $data->id }}">
    @csrf

    Nama Kategori <br>
    <input type="text"
           name="nama_kategori"
           value="{{ $data->nama_kategori }}">

    <br><br>

    <button type="submit">
        Update
    </button>
</form>