@extends('layout')

@section('konten')

<h4>Edit Produk</h4>

<form action="{{ route('produk.update', $produk->id) }}" method="post">
    @csrf
    <label>No</label>
    <input type="number" name="no" value="{{ $produk->no }}" class="form-control mb-2">

    <label>Nama Produk</label>
    <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control mb-2">
    
    <label>Kategori</label>
    <input type="text" name="kategori" value="{{ $produk->kategori }}" class="form-control mb-2">
    
    <label>Harga</label>
    <input type="number" name="harga" value="{{ $produk->harga }}" class="form-control mb-2">

   
    <label>Diskon</label>
    <input type="number" name="diskon" value="{{ $produk->diskon }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>


@endsection