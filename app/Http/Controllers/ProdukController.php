<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function tampil() {
        $produk = Produk::get();
        return view('produk.tampil', compact('produk'));
    }

    function tambah(){
        return view('produk.tambah');
    }

    function submit(Request $request){
        $produk = new Produk();
        $produk->no = $request->no;
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori = $request->kategori;
        $produk->harga = $request->harga;
        $produk->diskon = $request->diskon;
        $produk->save();

        return redirect()->route('produk.tampil');
    }


    function edit($id) {
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk'));
    }

    function update(Request $request, $id) {
        $produk = Produk::find($id);
        $produk->no = $request->no;
        $produk->nama_produk = $request->nama_produk;
        $produk->kategori = $request->kategori;
        $produk->harga = $request->harga;
        $produk->diskon = $request->diskon;
        $produk->update();

        return redirect()->route('produk.tampil');
    }

    function delete($id) {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect()->route('produk.tampil');

    }
}
