<!DOCTYPE html>
<html>
<head>
    <title>Laporan Peminjaman</title>
</head>
<body>

<h2>Laporan Data Peminjaman</h2>

<table border="1" cellpadding="5" cellspacing="0">

<tr>
    <th>No</th>
    <th>Buku</th>
    <th>Peminjam</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
    <th>Status</th>
</tr>

@foreach($data as $d)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $d->book->judul }}</td>

<td>{{ $d->nama_peminjam }}</td>

<td>{{ $d->tanggal_pinjam }}</td>

<td>{{ $d->tanggal_kembali }}</td>

<td>{{ $d->status }}</td>

</tr>

@endforeach

</table>

</body>
</html>