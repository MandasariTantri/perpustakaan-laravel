<h2>Edit Buku</h2>

<form method="POST" action="/buku/ubah/{{ $data->id }}">
@csrf

Kategori <br>

<select name="category_id">

@foreach($kategori as $k)

<option value="{{ $k->id }}"
{{ $data->category_id == $k->id ? 'selected' : '' }}>
{{ $k->nama_kategori }}
</option>

@endforeach

</select>

<br><br>

Judul <br>
<input type="text"
name="judul"
value="{{ $data->judul }}">

<br><br>

Penulis <br>
<input type="text"
name="penulis"
value="{{ $data->penulis }}">

<br><br>

Tahun <br>
<input type="number"
name="tahun"
value="{{ $data->tahun }}">

<br><br>

Stok <br>
<input type="number"
name="stok"
value="{{ $data->stok }}">

<br><br>

<button type="submit">
Update
</button>

</form>