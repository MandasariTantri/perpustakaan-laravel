<h2>Data Kategori</h2>

<a href="/kategori/tambah">Tambah Kategori</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $d)
    <tr>
        <td>{{ $d->id }}</td>
        <td>{{ $d->nama_kategori }}</td>
        <td>
            <a href="/kategori/edit/{{ $d->id }}">Edit</a>
            |
            <a href="/kategori/hapus/{{ $d->id }}">Hapus</a>
        </td>
    </tr>
    @endforeach

</table>