import { createStore, applyMiddleware } from 'redux';
import thunk from 'redux-thunk';
import { produkReducer } from './reducers/produkReducer';
import { composeWithDevTools } from 'redux-devtools-extension';

const store = createStore(
  produkReducer,
  composeWithDevTools(applyMiddleware(thunk))
);

export default store;
