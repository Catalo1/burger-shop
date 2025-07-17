<!-- Modal Overlay -->
<div id="auth-modal-overlay" class="auth-modal-overlay" style="display:none;">
  <div class="auth-modal">
    <button class="auth-modal-close" onclick="closeAuthModal()">&times;</button>
    <div class="auth-modal-logo">
      <img src="{{ asset('images/burger-auth.png') }}" alt="Burger Logo" />
    </div>
    <div class="auth-modal-tabs">
      <button id="show-signin" class="auth-modal-tab active" onclick="showSignIn()">Sign In</button>
      <button id="show-signup" class="auth-modal-tab" onclick="showSignUp()">Sign Up</button>
    </div>
    <div id="auth-signin" class="auth-modal-content">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
          <label class="form-label">Email or Phone</label>
          <input type="text" class="form-input" name="email" required>
        </div>
        <div class="form-group">
          <label class="form-label">Password</label>
          <input type="password" class="form-input" name="password" required>
        </div>
        <button type="submit" class="auth-btn">Login</button>
      </form>
      <button class="auth-modal-guest" onclick="continueAsGuest()">Continue as Guest</button>
    </div>
    <div id="auth-signup" class="auth-modal-content" style="display:none;">
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
          <label class="form-label">Email or Phone</label>
          <input type="text" class="form-input" name="email" required>
        </div>
        <div class="form-group">
          <label class="form-label">Password</label>
          <input type="password" class="form-input" name="password" required>
        </div>
        <div class="form-group">
          <label class="form-label">Confirm Password</label>
          <input type="password" class="form-input" name="password_confirmation" required>
        </div>
        <button type="submit" class="auth-btn">Sign Up</button>
      </form>
      <button class="auth-modal-guest" onclick="continueAsGuest()">Continue as Guest</button>
    </div>
  </div>
</div>

<script>
function openAuthModal() {
  document.getElementById('auth-modal-overlay').style.display = 'flex';
}
function closeAuthModal() {
  document.getElementById('auth-modal-overlay').style.display = 'none';
}
function showSignIn() {
  document.getElementById('auth-signin').style.display = 'block';
  document.getElementById('auth-signup').style.display = 'none';
  document.getElementById('show-signin').classList.add('active');
  document.getElementById('show-signup').classList.remove('active');
}
function showSignUp() {
  document.getElementById('auth-signin').style.display = 'none';
  document.getElementById('auth-signup').style.display = 'block';
  document.getElementById('show-signup').classList.add('active');
  document.getElementById('show-signin').classList.remove('active');
}
function continueAsGuest() {
  closeAuthModal();
  // Add your guest logic here
}
</script>

<!-- Example trigger button -->
<button onclick="openAuthModal()" class="auth-modal-trigger">Login / Register</button>
