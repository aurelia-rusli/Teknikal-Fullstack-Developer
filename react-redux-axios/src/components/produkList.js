import React, { useEffect } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { fetchProduk, deleteProduk } from '../redux/actions/produkActions';

const ProductList = () => {
  const dispatch = useDispatch();
  const { produk, loading, error } = useSelector((state) => state);

  useEffect(() => {
    dispatch(fetchProduk());
  }, [dispatch]);

  if (loading) return <p>Loading...</p>;
  if (error) return <p>{error}</p>;

  return (
    <div>
      <h2>Product List</h2>
      <ul>
        {products.map((produk) => (
          <li key={produk.id}>
            {produk.nama_produk} - {produk.kategory} - ${produk.harga} 
            <button onClick={() => dispatch(deleteProduk(produk.id))}>
              Delete
            </button>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default ProdukList;
