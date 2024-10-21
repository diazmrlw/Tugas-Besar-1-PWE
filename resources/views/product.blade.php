<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('produk') }}">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header style="display: flex; justify-content: space-between"></header>


        <!-- Product Card 2 -->
        <div class="product-grid">
            @foreach($produk as $item)
            <!-- Product Card 2 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produk 2">
                <h3>{{$item->nama_produk}}</h3>
                <p class="price">{{$item->harga}}</p>
                <p class="description">{{$item->deskripsi}}</p>
                <button class="add-to-cart">+</button>
                <button class="cancel-to-cart">-</button>
            </div>
            @endforeach
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
    </footer>
</body>
</html>
