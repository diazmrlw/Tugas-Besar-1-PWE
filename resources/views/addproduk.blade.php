<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="{{url('main')}}">Home</a></li>
            <li><a href="{{url('product')}}">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>
    <!-- Main content -->
    <div class="main-content">
        <header style="display: flex; justify-content: space-between">
            <div>
            <h1>Daftar Produk</h1>
            <p>Temukan Produk Terbaik Untuk Kebutuhan Anda</p>
            </div>
            <div>
                <button class="card-button">Add Produk</button>
            </div>
        </header>

        <!-- Product Grid -->
        <div>
            <div class="container">
                <h1>Create Produk</h1>
                <form action="{{url('/produk/add')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">Harga</label>
                        <input type="text" name="harga" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">Jumlah Produk</label>
                        <input type="text" name="jumlah_produk" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
