import axios from 'axios';

export const fetchProduk = () => {
  return async (dispatch) => {
    dispatch({ type: 'FETCH_PRODUCTS_REQUEST' });
    try {
      const response = await axios.get('http://localhost:8000/produk');
      dispatch({ type: 'FETCH_PRODUCTS_SUCCESS', payload: response.data });
    } catch (error) {
      dispatch({ type: 'FETCH_PRODUCTS_FAILURE', error: error.message });
    }
  };
};

export const createProduk = (produkData) => {
  return async (dispatch) => {
    try {
      const response = await axios.post('http://localhost:8000/api/products', produkData);
      dispatch({ type: 'CREATE_PRODUCT_SUCCESS', payload: response.data });
    } catch (error) {
      console.error(error);
    }
  };
};

export const deleteProduct = (produkId) => {
  return async (dispatch) => {
    try {
      await axios.delete(`http://localhost:8000/produk/${produkId}`);
      dispatch({ type: 'DELETE_PRODUCT_SUCCESS', payload: produkId });
    } catch (error) {
      console.error(error);
    }
  };
};
