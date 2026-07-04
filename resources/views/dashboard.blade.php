<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<h1>Dashboard</h1>

Selamat datang {{ Auth::user()->name }}

<br><br>

Role : {{ Auth::user()->role }}

<br><br>


@if(Auth::user()->role == 'admin')

<a href="/kategori">Data Kategori</a>

<br><br>

<a href="/buku">Data Buku</a>

<br><br>

@endif
<a href="/peminjaman">
    Data Peminjaman
</a>

<br><br>
<a href="/laporan-peminjaman">
    Cetak Laporan PDF
</a>

<br><br>

<hr>

<h2>Grafik Jumlah Buku per Kategori</h2>

<canvas id="grafikBuku"></canvas>
<a href="/logout">Logout</a>

<script>

const ctx = document.getElementById('grafikBuku');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            @foreach($kategori as $k)
                '{{ $k->nama_kategori }}',
            @endforeach
        ],
        datasets: [{
            label: 'Jumlah Buku',
            data: [
                @foreach($kategori as $k)
                    {{ $k->books_count }},
                @endforeach
            ]
        }]
    }
});

</script>
</body>
</html>