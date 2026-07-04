<h2>Tambah Peminjaman</h2>

<form method="POST"
      action="/peminjaman/simpan">

@csrf

Buku <br>

<select name="book_id">

@foreach($buku as $b)

<option value="{{ $b->id }}">
    {{ $b->judul }}
</option>

@endforeach

</select>

<br><br>

Nama Peminjam <br>
<input type="text"
       name="nama_peminjam">

<br><br>

Tanggal Pinjam <br>
<input type="date"
       name="tanggal_pinjam">

<br><br>

Tanggal Kembali <br>
<input type="date"
       name="tanggal_kembali">

<br><br>

Status <br>

<select name="status">
    <option value="Dipinjam">
        Dipinjam
    </option>

    <option value="Dikembalikan">
        Dikembalikan
    </option>
</select>

<br><br>

<button type="submit">
    Simpan
</button>

</form>