import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import Home from '../pages/Home';
import Destinations from '../pages/Destinations';
import Attractions from '../pages/Attractions';
import Profile from '../pages/Profile';
import Wishlist from '../pages/Wishlist';

export default function AppRouter() {
    return (
        <Router>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/destinations" element={<Destinations />} />
                <Route path="/attractions" element={<Attractions />} />
                <Route path="/profile" element={<Profile />} />
                <Route path="/wishlist" element={<Wishlist />} />
            </Routes>
        </Router>
    );
}
