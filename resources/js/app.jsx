import React from 'react';
import AppRouter from './routes/AppRouter';
import Navbar from './components/Navbar';
import Footer from './components/Footer';

export default function App() {
    return (
        <div>
            <Navbar />
            <AppRouter />
            <Footer />
        </div>
    );
}
