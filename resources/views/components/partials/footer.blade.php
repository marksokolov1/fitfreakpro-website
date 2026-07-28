<footer class="site-footer" id="site-footer">
  <div class="container">
    <div class="footer-cta">
      <div>
        <p class="footer-cta-kicker">Start free as a trainer</p>
        <h2>Ready to build your coaching workflow?</h2>
        <p>Create your free trainer account and start organizing your client coaching.</p>
      </div>
      <a class="btn btn-primary" href="{{ route('home') }}#download" data-track="footer_trainer_account_cta">Create Free Trainer Account</a>
    </div>
  </div>
  <div class="container footer-grid">
    <div class="footer-brand">
      <x-partials.brand footer />
      <p class="footer-tagline">FitFreak Pro helps personal trainers turn their coaching methodology into clear client programs and a focused digital coaching workflow.</p>
    </div>
    <div class="footer-navigation">
      <nav class="footer-navigation-grid" aria-label="Footer navigation">
        <div class="footer-link-group">
          <p class="footer-heading">Product</p>
          <div class="footer-links">
            <a href="{{ route('home') }}#features">Features</a>
            <a href="{{ route('for-personal-trainers') }}"{!! request()->routeIs('for-personal-trainers') ? ' aria-current="page"' : '' !!}>For Trainers</a>
            <a href="{{ route('pricing') }}"{!! request()->routeIs('pricing') ? ' aria-current="page"' : '' !!}>Pricing</a>
          </div>
        </div>
        <div class="footer-link-group">
          <p class="footer-heading">Resources</p>
          <div class="footer-links">
            <a href="{{ route('how-it-works') }}"{!! request()->routeIs('how-it-works') ? ' aria-current="page"' : '' !!}>How It Works</a>
            <a href="{{ route('tutorial') }}"{!! request()->routeIs('tutorial') ? ' aria-current="page"' : '' !!}>Tutorial</a>
            <a href="{{ route('home') }}#faq">FAQ</a>
            <a href="{{ route('support') }}"{!! request()->routeIs('support') ? ' aria-current="page"' : '' !!}>Support</a>
          </div>
        </div>
        <div class="footer-link-group">
          <p class="footer-heading">Company</p>
          <div class="footer-links">
            <a href="{{ route('about') }}"{!! request()->routeIs('about') ? ' aria-current="page"' : '' !!}>About</a>
            <a href="{{ route('privacy') }}"{!! request()->routeIs('privacy') ? ' aria-current="page"' : '' !!}>Privacy</a>
            <a href="{{ route('terms') }}"{!! request()->routeIs('terms') ? ' aria-current="page"' : '' !!}>Terms</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="footer-actions">
      <div class="footer-download">
        <p class="footer-heading">Get the FitFreak Pro App</p>
        <p class="footer-audience-note">For trainers creating programs and clients joining through trainer invitations.</p>
        <div class="store-row">
          <a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Download FitFreak Pro on the App Store">
            <span>Download on the<strong>App Store</strong></span>
          </a>
          <a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Get FitFreak Pro on Google Play">
            <span>Get it on<strong>Google Play</strong></span>
          </a>
        </div>
      </div>
      <div class="footer-social">
        <p class="footer-heading footer-social-heading">Follow FitFreak Pro</p>
        <a class="social-link" href="https://www.linkedin.com/company/fitfreak-pro/" target="_blank" rel="noopener noreferrer" data-track="linkedin_click" aria-label="FitFreak Pro on LinkedIn">LinkedIn</a>
      </div>
    </div>
  </div>
  <div class="container footer-legal">
    <span>© {{ now()->year }} FitFreak Pro. All rights reserved.</span>
    <span class="footer-legal-links">
      <a href="{{ route('privacy') }}">Privacy</a> ·
      <a href="{{ route('terms') }}">Terms</a> ·
      <a href="{{ route('support') }}">Contact</a> ·
      <a href="mailto:support@fitfreakpro.com" data-track="support_click">support@fitfreakpro.com</a>
    </span>
  </div>
</footer>
