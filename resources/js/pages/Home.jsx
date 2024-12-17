import React from 'react';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';

export default function Home() {
    return (
        <div>
            <Navbar />
            <main>
                <h1>Welcome to the Home Page</h1>
            </main>
            <Footer />
        </div>
    );
}
