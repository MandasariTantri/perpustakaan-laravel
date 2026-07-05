<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Dashboard Perpustakaan</h3>
        </div>

        <div class="card-body">

            <div class="alert alert-success">

                Selamat datang
                <strong>{{ Auth::user()->name }}</strong>

                <br>

                Role :
                <strong>{{ Auth::user()->role }}</strong>

            </div>

            <div class="mb-3">

                @if(Auth::user()->role == 'admin')

                <a href="/kategori"
                   class="btn btn-primary">
                    Data Kategori
                </a>

                <a href="/buku"
                   class="btn btn-success">
                    Data Buku
                </a>

                @endif

                <a href="/peminjaman"
                   class="btn btn-warning">
                    Data Peminjaman
                </a>

                <a href="/laporan-peminjaman"
                   class="btn btn-info">
                    Cetak PDF
                </a>

                <a href="/logout"
                   class="btn btn-danger">
                    Logout
                </a>

            </div>

            <hr>

            <h4>
                Grafik Jumlah Buku per Kategori
            </h4>

            <div class="card">

                <div class="card-body">

                    <canvas id="grafikBuku"></canvas>

                </div>

            </div>

        </div>

    </div>

</div>

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

            ],

            borderWidth: 1

        }]
    }
});

</script>

</body>
</html>