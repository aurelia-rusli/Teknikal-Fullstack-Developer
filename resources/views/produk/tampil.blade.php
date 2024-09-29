@extends('layout')


@section('konten')

<div class="d-flex">
    <h4>List Produk</h4>
    <div class="ms-auto">
        <a clas="btn btn success" href="{{ route('produk.tambah') }}">Tambah Produk</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Diskon</th>
        <th>Aksi</th>
    </tr>
    @foreach($produk as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data-> nama_produk }}</td>
        <td>{{ $data-> kategori }}</td>
        <td>{{ $data-> harga }}</td>
        <td>{{ $data-> diskon }}</td>
        <td>
            <a href="{{ route('produk.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
           <form action="{{ route('produk.delete', $data->id) }}" method="post">
            @csrf
            <button class="btn btn-sm btn-danger">Hapus</button>
           </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection