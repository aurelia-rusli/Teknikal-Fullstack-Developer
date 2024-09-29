<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', [ProdukController::class, 'tampil'])->name('produk.tampil');
Route::get('/produk/tambah', [ProdukController::class, 'tambah'])->name('produk.tambah');
Route::post('/produk/submit', [ProdukController::class, 'submit'])->name('produk.submit');
Route::get('/produk/edit/{id}',[ProdukController::class, 'edit'])->name('produk.edit');
Route::post('/produk/update/{id}',[ProdukController::class, 'update'])->name('produk.update');
Route::post('/produk/delete/{id}',[ProdukController::class, 'delete'])->name('produk.delete');


