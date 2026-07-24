<footer class="site-footer">
  <div class="container footer-grid">
    <div>
      <x-partials.brand footer />
      <p class="footer-tagline">Personal trainer software built around your coaching.</p>
    </div>
    <div>
      <p class="footer-heading">Navigation</p>
      <nav class="footer-links" aria-label="Footer navigation">
        <a href="{{ route('home') }}#product">Product</a>
        <a href="{{ route('how-it-works') }}">How It Works</a>
        <a href="{{ route('for-personal-trainers') }}">For Personal Trainers</a>
        <a href="{{ route('pricing') }}">Pricing</a>
        <a href="{{ route('tutorial') }}">Tutorial</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('support') }}">Support</a>
        <a href="{{ route('privacy') }}">Privacy</a>
        <a href="{{ route('terms') }}">Terms</a>
      </nav>
    </div>
    <div>
      <p class="footer-heading">Download</p>
      <div class="store-row">
        <a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Download FitFreak Pro on the App Store">
          <span>Download on the<strong>App Store</strong></span>
        </a>
        <a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Get FitFreak Pro on Google Play">
          <span>Get it on<strong>Google Play</strong></span>
        </a>
      </div>
      <p class="footer-heading footer-social-heading">Social</p>
      <a class="social-link" href="https://www.linkedin.com/company/fitfreak-pro/" target="_blank" rel="noopener noreferrer" data-track="linkedin_click" aria-label="FitFreak Pro on LinkedIn">LinkedIn</a>
    </div>
  </div>
  <div class="container footer-legal">
    <span>© {{ now()->year }} FitFreak Pro. All rights reserved.</span>
    <span>
      <a href="{{ route('privacy') }}">Privacy</a> ·
      <a href="{{ route('terms') }}">Terms</a> ·
      <a href="{{ route('support') }}">Support</a> ·
      <a href="mailto:support@fitfreakpro.com" data-track="support_click">support@fitfreakpro.com</a>
    </span>
  </div>
</footer>
