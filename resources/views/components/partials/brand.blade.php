@props(['footer' => false])

@if ($footer)
  <img
    class="footer-logo"
    src="{{ asset('assets/img/fitfreak-logo.webp') }}"
    width="640"
    height="640"
    alt="FitFreak Pro logo"
  />
@else
  <a class="brand" href="{{ route('home') }}" aria-label="FitFreak Pro home">
    <img
      class="brand-mark"
      src="{{ asset('assets/img/fitfreak-logo.webp') }}"
      width="640"
      height="640"
      alt="FitFreak Pro logo"
    />
    <span class="brand-word">FitFreak Pro</span>
  </a>
@endif
