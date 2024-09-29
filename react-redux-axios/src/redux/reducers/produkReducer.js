const initialState = {
    produK: [],
    loading: false,
    error: null,
  };
  
  export const produkReducer = (state = initialState, action) => {
    switch (action.type) {
      case 'FETCH_PRODUCTS_REQUEST':
        return { ...state, loading: true };
      case 'FETCH_PRODUCTS_SUCCESS':
        return { ...state, loading: false, produK: action.payload };
      case 'FETCH_PRODUCTS_FAILURE':
        return { ...state, loading: false, error: action.error };
      case 'CREATE_PRODUCT_SUCCESS':
        return { ...state, produK: [...state.produK, action.payload] };
      case 'DELETE_PRODUCT_SUCCESS':
        return {
          ...state,
          produK: state.produK.filter((produK) => produK.id !== action.payload),
        };
      default:
        return state;
    }
  };
  