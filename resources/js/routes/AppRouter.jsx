import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';

// Import all your page components
import Home from '../pages/Home';
import Destinations from '../pages/Destinations';
import Attractions from '../pages/Attractions';
import Activities from '../pages/Activities';
import Restaurants from '../pages/Restaurants';
import Accommodations from '../pages/Accommodations';
import Profile from '../pages/Profile';
import Wishlist from '../pages/Wishlist';
import NotFound from '../pages/NotFound'; // Optional: a fallback for undefined routes

export default function AppRouter() {
    return (
        <Router>
            <Routes>
                {/* Define routes for all pages */}
                <Route path="/" element={<Home />} />
                <Route path="/destinations" element={<Destinations />} />
                <Route path="/attractions" element={<Attractions />} />
                <Route path="/activities" element={<Activities />} />
                <Route path="/restaurants" element={<Restaurants />} />
                <Route path="/accommodations" element={<Accommodations />} />
                <Route path="/profile" element={<Profile />} />
                <Route path="/wishlist" element={<Wishlist />} />

                {/* Fallback for undefined routes */}
                <Route path="*" element={<NotFound />} />
            </Routes>
        </Router>
    );
}
