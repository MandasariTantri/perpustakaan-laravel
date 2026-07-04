<h2>Edit Peminjaman</h2>

<form method="POST"
      action="/peminjaman/ubah/{{ $data->id }}">

@csrf

Buku <br>

<select name="book_id">

@foreach($buku as $b)

<option value="{{ $b->id }}"
    {{ $data->book_id == $b->id ? 'selected' : '' }}>

    {{ $b->judul }}

</option>

@endforeach

</select>

<br><br>

Nama Peminjam <br>

<input type="text"
       name="nama_peminjam"
       value="{{ $data->nama_peminjam }}">

<br><br>

Tanggal Pinjam <br>

<input type="date"
       name="tanggal_pinjam"
       value="{{ $data->tanggal_pinjam }}">

<br><br>

Tanggal Kembali <br>

<input type="date"
       name="tanggal_kembali"
       value="{{ $data->tanggal_kembali }}">

<br><br>

Status <br>

<select name="status">

<option value="Dipinjam"
{{ $data->status == 'Dipinjam' ? 'selected' : '' }}>
Dipinjam
</option>

<option value="Dikembalikan"
{{ $data->status == 'Dikembalikan' ? 'selected' : '' }}>
Dikembalikan
</option>

</select>

<br><br>

<button type="submit">
    Update
</button>

</form>