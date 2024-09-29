@extends('layout')

@section('konten')

<h4>Tambah Produk</h4>

<form action="{{ route('produk.submit') }}" method="post">
    @csrf
    <label>No</label>
    <input type="number" name="no" class="form-control mb-2">

    <label>Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control mb-2">
    
    <label>Kategori</label>
    <input type="text" name="kategori" class="form-control mb-2">
    
    <label>Harga</label>
    <input type="number" name="harga" class="form-control mb-2">

   
    <label>Diskon</label>
    <input type="number" name="diskon" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>


@endsection