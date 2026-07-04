<h2>Data Peminjaman</h2>

<a href="/peminjaman/tambah">
    Tambah Peminjaman
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Judul Buku</th>
    <th>Nama Peminjam</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

@foreach($data as $d)

<tr>

    <td>{{ $d->id }}</td>

    <td>{{ $d->book->judul }}</td>

    <td>{{ $d->nama_peminjam }}</td>

    <td>{{ $d->tanggal_pinjam }}</td>

    <td>{{ $d->tanggal_kembali }}</td>

    <td>{{ $d->status }}</td>

    <td>
        <a href="/peminjaman/edit/{{ $d->id }}">
            Edit
        </a>

        |

        <a href="/peminjaman/hapus/{{ $d->id }}">
            Hapus
        </a>
    </td>

</tr>

@endforeach

</table>