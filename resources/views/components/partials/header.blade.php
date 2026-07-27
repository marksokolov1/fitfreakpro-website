<header class="site-header">
  <div class="container header-inner">
    <x-partials.brand />

    <nav id="primary-navigation" class="main-nav" aria-label="Primary navigation">
      <a href="{{ route('how-it-works') }}" @if (request()->routeIs('how-it-works')) aria-current="page" @endif>How It Works</a>
      <a href="{{ route('home') }}#features" @if (request()->routeIs('home')) aria-current="page" @endif>Features</a>
      <a href="{{ route('pricing') }}" @if (request()->routeIs('pricing')) aria-current="page" @endif>Pricing</a>
      <a href="{{ route('tutorial') }}" @if (request()->routeIs('tutorial')) aria-current="page" @endif>Tutorial</a>
      <a href="{{ route('home') }}#faq">FAQ</a>
      <a class="mobile-nav-cta" href="{{ route('home') }}#download" data-track="header_app_download_cta">Start Free</a>
    </nav>

    <div class="header-actions">
      <a class="btn btn-primary" href="{{ route('home') }}#download" data-track="header_app_download_cta">Start Free</a>
      <button
        class="mobile-toggle"
        type="button"
        aria-label="Open navigation"
        aria-controls="primary-navigation"
        aria-expanded="false"
      >
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
  <button class="navigation-scrim" type="button" aria-label="Close navigation menu" data-navigation-close></button>
</header>
