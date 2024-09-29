import React from 'react';
import ReactDOM from 'react-dom/client';
import { Provider } from 'react-redux';
import store from './redux/store';
import app from './app';

ReactDOM.createRoot(document.getElementById('root')).render(
  <Provider store={store}>
    <app />
  </Provider>
);
