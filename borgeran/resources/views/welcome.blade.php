<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borgeran - Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header/Navigation -->
    <header class="header">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Borgeran Logo">
                    <span>Borgeran</span>
                </div>
                <nav class="nav-menu">
                    <ul>
                        <li><a href="#" class="nav-link active">Home</a></li>
                        <li><a href="#" class="nav-link">Menu</a></li>
                        <li><a href="#" class="nav-link">Restaurants</a></li>
                        <li><a href="#" class="nav-link">Contact Us</a></li>
                    </ul>
                </nav>
                <div class="auth-buttons">
                    <a href="#" class="btn-auth">Login/Sign up</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-bg-text">BURGER HAMBURGER</div>
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-subtitle">CLASSIC CHEESE BURGER</h1>
                    <p class="hero-description">
                        Welcome to our culinary Sanctuary, where every dish tells 
                        every bite is an adventure at our food
                    </p>
                    <button class="btn-order">Order Now</button>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('images/burger-hero.png') }}" alt="Classic Cheese Burger">
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="container">
            <div class="welcome-content">
                <h2 class="section-title">Welcome to Borgeran.</h2>
                <p class="section-subtitle">WE PROVIDE AMAZING & QUALITY FOOD FOR YOUR GOOD HEALTH</p>
                
                <div class="features">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="{{ asset('images/quality-icon.png') }}" alt="Quality Food">
                        </div>
                        <h3>Best Quality Food</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="{{ asset('images/delivery-icon.png') }}" alt="Fast Delivery">
                        </div>
                        <h3>Fast Food Delivery</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="{{ asset('images/service-icon.png') }}" alt="Quality Service">
                        </div>
                        <h3>Good Quality Service</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Section -->
    <section class="order-section">
        <div class="container">
            <div class="order-buttons">
                <button class="btn-order-now">
                    <span class="icon">🛒</span>
                    Order Now
                </button>
                <button class="btn-order-history">
                    <span class="icon">📋</span>
                    Order History
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Featured</h2>
                <a href="#" class="view-all">View All</a>
            </div>
            <div class="featured-grid">
                <div class="food-card">
                    <div class="food-image">
                        <img src="{{ asset('images/classic-cheese-burger.png') }}" alt="Classic Cheese Burger">
                    </div>
                    <h3>Classic Cheese Burger</h3>
                    <button class="btn-order-item">Order Now</button>
                </div>
                <div class="food-card">
                    <div class="food-image">
                        <img src="{{ asset('images/chicken-nuggets.png') }}" alt="Chicken Nuggets">
                    </div>
                    <h3>Chicken Nuggets</h3>
                    <button class="btn-order-item">Order Now</button>
                </div>
                <div class="food-card">
                    <div class="food-image">
                        <img src="{{ asset('images/fries.png') }}" alt="Fries">
                    </div>
                    <h3>Fries</h3>
                    <button class="btn-order-item">Order Now</button>
                </div>
                <div class="food-card">
                    <div class="food-image">
                        <img src="{{ asset('images/chocolate-sundae.png') }}" alt="Chocolate Sundae">
                    </div>
                    <h3>Chocolate Sundae</h3>
                    <button class="btn-order-item">Order Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="menu-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Menu</h2>
                <a href="#" class="view-all">View All</a>
            </div>
            <div class="menu-grid">
                <div class="menu-category">
                    <div class="category-image">
                        <img src="{{ asset('images/burger-category.png') }}" alt="Burgers">
                    </div>
                    <div class="category-name">Burgers</div>
                </div>
                <div class="menu-category">
                    <div class="category-image">
                        <img src="{{ asset('images/nuggets-category.png') }}" alt="Nuggets">
                    </div>
                    <div class="category-name">Nuggets</div>
                </div>
                <div class="menu-category">
                    <div class="category-image">
                        <img src="{{ asset('images/fries-category.png') }}" alt="Fries">
                    </div>
                    <div class="category-name">Fries</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Online Section -->
    <section class="order-online-section">
        <div class="container">
            <h2 class="section-title">Order Now</h2>
            <div class="order-online-card">
                <div class="order-content">
                    <span class="order-icon">💻</span>
                    <span class="order-text">Order Online</span>
                </div>
                <button class="btn-order-online">Order Now</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}" alt="Borgeran Logo">
                        <span>Borgeran</span>
                    </div>
                    <div class="social-links">
                        <h4>Follow Us!</h4>
                        <div class="social-icons">
                            <a href="#" class="social-link" aria-label="Facebook">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.406.595 24 1.325 24h11.495v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.406 24 22.674V1.326C24 .592 23.406 0 22.675 0" fill="currentColor"/>
                                </svg>
                            </a>
                            <a href="#" class="social-link" aria-label="Instagram">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.241 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.241 1.246-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.241-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608C4.515 2.567 5.782 2.295 7.148 2.233 8.414 2.175 8.794 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.771.131 4.659.363 3.678 1.344 2.697 2.325 2.465 3.437 2.406 4.718 2.347 5.998 2.334 6.407 2.334 12c0 5.593.013 6.002.072 7.282.059 1.281.291 2.393 1.272 3.374.981.981 2.093 1.213 3.374 1.272C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.281-.059 2.393-.291 3.374-1.272.981-.981 1.213-2.093 1.272-3.374.059-1.28.072-1.689.072-7.282 0-5.593-.013-6.002-.072-7.282-.059-1.281-.291-2.393-1.272-3.374C19.341.363 18.229.131 16.948.072 15.668.013 15.259 0 12 0zm0 5.838A6.162 6.162 0 0 0 5.838 12 6.162 6.162 0 0 0 12 18.162 6.162 6.162 0 0 0 18.162 12 6.162 6.162 0 0 0 12 5.838zm0 10.162A3.999 3.999 0 1 1 12 8a3.999 3.999 0 0 1 0 7.999zm6.406-11.845a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z" fill="currentColor"/>
                                </svg>
                            </a>
                            <a href="#" class="social-link" aria-label="Twitter">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 4.557a9.83 9.83 0 0 1-2.828.775 4.932 4.932 0 0 0 2.165-2.724c-.951.564-2.005.974-3.127 1.195A4.916 4.916 0 0 0 16.616 3c-2.717 0-4.924 2.206-4.924 4.924 0 .386.044.763.127 1.124C7.728 8.807 4.1 6.884 1.671 3.965c-.423.724-.666 1.561-.666 2.475 0 1.708.87 3.216 2.188 4.099a4.904 4.904 0 0 1-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.936 4.936 0 0 1-2.224.084c.627 1.956 2.444 3.377 4.6 3.417A9.867 9.867 0 0 1 0 21.543a13.94 13.94 0 0 0 7.548 2.212c9.057 0 14.009-7.513 14.009-14.009 0-.213-.005-.425-.014-.636A10.012 10.012 0 0 0 24 4.557z" fill="currentColor"/>
                                </svg>
                            </a>
                            <a href="#" class="social-link" aria-label="TikTok">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.75 2v12.25a2.25 2.25 0 1 1-2.25-2.25h.25V9.5h-.25A5.25 5.25 0 1 0 15.75 14.75V7.5a5.25 5.25 0 0 0 5.25 5.25V9.5a2.75 2.75 0 0 1-2.75-2.75h-2.25V2h-3.25z" fill="currentColor"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>QUICKLINKS</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">Restaurants</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>ORDER ONLINE</h4>
                        <button class="btn-footer-order">Order Now</button>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; TM & Copyright 2025 Borgeran. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>