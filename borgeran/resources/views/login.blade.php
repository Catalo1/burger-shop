<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Borgeran</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="auth-container">
        <div class="auth-left">
            <div class="auth-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Borgeran Logo">
                <span>Borgeran</span>
            </div>
            
            <h1 class="auth-title">Login</h1>
            
            <form class="auth-form" method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="form-group">
                    <label class="form-label">Email or Phone</label>
                    <input type="text" class="form-input" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-input" name="password" required>
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
                </div>
                
                <button type="submit" class="auth-btn">Login</button>
            </form>
            
            <div class="auth-switch">
                Don't have an account? <a href="{{ route('register') }}">Sign Up</a>
            </div>
        </div>
        
        <div class="auth-right">
            <div class="promo-text">
                <h2 class="promo-title">MASARAP NA</h2>
                <h3 class="promo-subtitle">Burger</h3>
                <h4 class="promo-subtitle">IN TOWN</h4>
            </div>
            <div class="burger-image">
                <img src="{{ asset('images/burger-auth.png') }}" alt="Delicious Burger">
            </div>
        </div>
    </div>
    <button onclick="openAuthModal()">Login / Register</button>
    @include('components.auth-modal')
</body>
</html>