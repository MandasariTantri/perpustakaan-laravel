<h2>Tambah Kategori</h2>

<form method="POST" action="/kategori/simpan">
    @csrf

    Nama Kategori <br>
    <input type="text" name="nama_kategori">

    <br><br>

    <button type="submit">
        Simpan
    </button>
</form>