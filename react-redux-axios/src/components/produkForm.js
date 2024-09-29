import React, { useState } from 'react';
import { useDispatch } from 'react-redux';
import { createProduct } from '../redux/actions/produkActions';

const produkForm = () => {
  const [produkData, setProdukData] = useState({
    nama_produk: '',
    kategori: '',
    harga: '',
    diskon: '',
  });
  const dispatch = useDispatch();

  const handleChange = (e) => {
    setProductData({ ...produkData, [e.target.name]: e.target.value });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    dispatch(createProduct(produkData));
    setProductData({ nama_produk: '', kategori: '', harga: '', diskon: '' });
  };

  return (
    <form onSubmit={handleSubmit}>
      <input
        type="text"
        name="nama_produk"
        value={produkData.nama_produk}
        onChange={handleChange}
        placeholder="Nama Produk"
        required
      />
      <input
        type="text"
        name="kategori"
        value={produkData.kategori}
        onChange={handleChange}
        placeholder="Kategori"
        required
      />
      <input
        type="number"
        name="harga"
        value={produkData.harga}
        onChange={handleChange}
        placeholder="Harga"
        required
      />
      <input
        type="number"
        name="diskon"
        value={produkData.diskon}
        onChange={handleChange}
        placeholder="Diskon"
      />
      <button type="submit">Tambah Produk</button>
    </form>
  );
};

export default produkForm;
