<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Produk</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    
    <h1 class="text-center mt-3">Selamat Datang di Aplikasi Produk</h1>

   <div class="text-center">
    <a href="{{ route('produk.tampil') }}" class="btn btn-primary ">Kelola Data Produk</a>
   </div>
</body>
</html>