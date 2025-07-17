<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Borgeran</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="register-page">
    <div class="register-card">
        <div class="register-burger-bg">
  <img src="{{ asset('images/burger-auth.png') }}" alt="Burger Background" />
</div>
        <h1 class="auth-title">Sign Up</h1>
        <form class="auth-form" method="POST" action="{{ route('register') }}">
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
            <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-input" name="password_confirmation" required>
            </div>
            <button type="submit" class="auth-btn">Sign Up</button>
        </form>
        <div class="auth-switch">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
</body>
</html>