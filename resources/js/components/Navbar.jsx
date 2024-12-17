import React from 'react';
import { Link } from 'react-router-dom';

export default function Navbar() {
    return (
        <nav>
            <ul>
                <li><Link to="/">Home</Link></li>
                <li><Link to="/destinations">Destinations</Link></li>
                <li><Link to="/attractions">Attractions</Link></li>
                <li><Link to="/activities">Activities</Link></li>
                <li><Link to="/restaurants">Restaurants</Link></li>
                <li><Link to="/accommodations">Accommodations</Link></li>
                <li><Link to="/profile">Profile</Link></li>
                <li><Link to="/wishlist">Wishlist</Link></li>
            </ul>
        </nav>
    );
}
