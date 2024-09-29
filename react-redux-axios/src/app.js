import React from 'react';
import produkList from './components/produkList';
import produkForm from './components/produkForm';

const App = () => {
  return (
    <div>
      <h1>Product Management</h1>
      <produkForm/>
      <produkList/>
    </div>
  );
};

export default App;
