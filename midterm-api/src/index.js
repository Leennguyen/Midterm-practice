import ReactDOM from 'react-dom/client';
import { BrowserRouter, Routes, Route } from "react-router-dom"
import './index.css';
import MainLayout from './views/layouts/Mainlayout';
import HomePage from './views/pages/Homepage';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <BrowserRouter>
    <Routes>
      <Route path="/" element={<MainLayout/>}>
        <Route path="/" element={<HomePage/>}/>
      </Route>
    </Routes>
  </BrowserRouter>
);
