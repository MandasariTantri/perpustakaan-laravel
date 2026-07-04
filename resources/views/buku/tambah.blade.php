<h2>Tambah Buku</h2>

<form method="POST" action="/buku/simpan">
@csrf

Kategori <br>
<select name="category_id">

@foreach($kategori as $k)
<option value="{{ $k->id }}">
    {{ $k->nama_kategori }}
</option>
@endforeach

</select>

<br><br>

Judul <br>
<input type="text" name="judul">

<br><br>

Penulis <br>
<input type="text" name="penulis">

<br><br>

Tahun <br>
<input type="number" name="tahun">

<br><br>

Stok <br>
<input type="number" name="stok">

<br><br>

<button type="submit">
    Simpan
</button>

</form>