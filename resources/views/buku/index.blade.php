<h2>Data Buku</h2>

<a href="/buku/tambah">Tambah Buku</a>

<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Kategori</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Tahun</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

@foreach($data as $d)
<tr>
    <td>{{ $d->id }}</td>
    <td>{{ $d->category->nama_kategori }}</td>
    <td>{{ $d->judul }}</td>
    <td>{{ $d->penulis }}</td>
    <td>{{ $d->tahun }}</td>
    <td>{{ $d->stok }}</td>
    <td>
        <a href="/buku/edit/{{ $d->id }}">Edit</a>
        |
        <a href="/buku/hapus/{{ $d->id }}">Hapus</a>
    </td>
</tr>
@endforeach

</table>