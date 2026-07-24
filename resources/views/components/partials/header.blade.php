<header class="site-header">
  <div class="container header-inner">
    <x-partials.brand />

    <nav id="primary-navigation" class="main-nav" aria-label="Primary navigation">
      <a href="{{ route('home') }}#product">Product</a>
      <a href="{{ route('how-it-works') }}" @if (request()->routeIs('how-it-works')) aria-current="page" @endif>How It Works</a>
      <a href="{{ route('for-personal-trainers') }}" @if (request()->routeIs('for-personal-trainers')) aria-current="page" @endif>For Personal Trainers</a>
      <a href="{{ route('pricing') }}" @if (request()->routeIs('pricing')) aria-current="page" @endif>Pricing</a>
      <a href="{{ route('tutorial') }}" @if (request()->routeIs('tutorial')) aria-current="page" @endif>Tutorial</a>
      <a href="{{ route('about') }}" @if (request()->routeIs('about')) aria-current="page" @endif>About</a>
      <a href="{{ route('support') }}" @if (request()->routeIs('support')) aria-current="page" @endif>Support</a>
    </nav>

    <div class="header-actions">
      <a class="btn btn-primary" href="{{ route('home') }}#download" data-track="header_app_download_cta">Download the Free Coach App</a>
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
</header>
