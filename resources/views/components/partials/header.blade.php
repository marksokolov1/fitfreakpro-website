<header class="site-header">
  <div class="container header-inner">
    <x-partials.brand />

    <nav id="primary-navigation" class="main-nav" aria-label="Primary navigation">
      <x-ui.navigation-link :href="route('home').'#product'" :active="request()->routeIs('home')">Product</x-ui.navigation-link>
      <x-ui.navigation-link :href="route('how-it-works')" :active="request()->routeIs('how-it-works')">How It Works</x-ui.navigation-link>
      <x-ui.navigation-link :href="route('for-personal-trainers')" :active="request()->routeIs('for-personal-trainers')">For Personal Trainers</x-ui.navigation-link>
      <x-ui.navigation-link :href="route('pricing')" :active="request()->routeIs('pricing')">Pricing</x-ui.navigation-link>
      <x-ui.navigation-link :href="route('tutorial')" :active="request()->routeIs('tutorial')">Tutorial</x-ui.navigation-link>
      <x-ui.navigation-link :href="route('about')" :active="request()->routeIs('about')">About</x-ui.navigation-link>
      <x-ui.navigation-link :href="route('support')" :active="request()->routeIs('support')">Support</x-ui.navigation-link>
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
  <button class="navigation-scrim" type="button" aria-label="Close navigation menu" data-navigation-close></button>
</header>
