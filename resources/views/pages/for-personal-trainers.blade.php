@php
$page = json_decode(<<<'PAGE'
{
  "title": "Software for Personal Trainers | FitFreak Pro",
  "description": "FitFreak Pro helps personal trainers organize exercise videos, workout plans, schedule blocks, nutrition targets, client invitations, and progress review in one app.",
  "canonical": "https://fitfreakpro.com/for-personal-trainers/",
  "ogTitle": "Software for Personal Trainers | FitFreak Pro",
  "ogDescription": "For personal trainers managing client work across spreadsheets, messages, notes, calendars, and video links.",
  "ogImage": "https://fitfreakpro.com/assets/img/app-screen-8.webp",
  "ogImageWidth": "619",
  "ogImageHeight": "1100",
  "ogImageAlt": "FitFreak Pro exercise details screen for coach-assigned workouts",
  "twitterCard": "summary_large_image",
  "twitterTitle": "Software for Personal Trainers | FitFreak Pro",
  "twitterDescription": "Turn exercises, videos, schedules, workouts, nutrition targets, and client progress into one organized app experience.",
  "twitterImage": "https://fitfreakpro.com/assets/img/app-screen-8.webp",
  "twitterImageAlt": "FitFreak Pro exercise details screen for coach-assigned workouts",
  "schema": "[\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"WebPage\",\n      \"@id\": \"https://fitfreakpro.com/for-personal-trainers/#webpage\",\n      \"url\": \"https://fitfreakpro.com/for-personal-trainers/\",\n      \"name\": \"Software for Personal Trainers | FitFreak Pro\",\n      \"description\": \"FitFreak Pro helps personal trainers organize exercise videos, workout plans, schedule blocks, nutrition targets, client invitations, and progress review in one app.\",\n      \"isPartOf\": { \"@id\": \"https://fitfreakpro.com/#website\" },\n      \"about\": { \"@id\": \"https://fitfreakpro.com/#software\" },\n      \"inLanguage\": \"en\"\n    },\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"BreadcrumbList\",\n      \"itemListElement\": [\n        { \"@type\": \"ListItem\", \"position\": 1, \"name\": \"Home\", \"item\": \"https://fitfreakpro.com/\" },\n        { \"@type\": \"ListItem\", \"position\": 2, \"name\": \"For Personal Trainers\", \"item\": \"https://fitfreakpro.com/for-personal-trainers/\" }\n      ]\n    }\n  ]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
      <nav class="breadcrumbs container" aria-label="Breadcrumbs"><a href="{{ route('home') }}">Home</a><span aria-hidden="true">/</span><span>For Personal Trainers</span></nav>
      <section class="route-hero trainer-hero">
        <div class="container trainer-hero-grid">
          <div class="trainer-hero-copy">
            <div class="eyebrow">For Personal Trainers</div>
            <h1>Organize client work without extra tools.</h1>
            <p>FitFreak Pro is designed first for independent trainers, online coaches, hybrid trainers, and small personalized coaching businesses that manage exercises, plans, nutrition, schedules, and client data without scattered spreadsheets, notes, and messages.</p>
            <div class="cta-actions">
              <a class="btn btn-primary" href="{{ route('home') }}#download" data-track="hero_app_download_cta">Download the Free Coach App</a>
              <a class="btn btn-secondary" href="#trainer-workspace">Explore the workspace</a>
            </div>
            <ul class="trainer-hero-points" aria-label="Key coaching features">
              <li>Free coach account</li>
              <li>Your own exercise library</li>
              <li>Clients and progress</li>
            </ul>
          </div>
          <figure class="trainer-hero-visual">
            <img src="{{ asset('assets/img/app-screen-1.webp') }}" width="619" height="1100" alt="FitFreak Pro coach dashboard for managing clients, workouts, nutrition, and progress" loading="eager" fetchpriority="high" />
          </figure>
        </div>
      </section>
      <section class="section coach-cards-section" id="trainer-workspace">
        <div class="container coach-section-heading">
          <div class="eyebrow">Coach workspace</div>
          <h2>Everything you need for day-to-day coaching.</h2>
          <p>From the first invitation to progress review, the core actions stay inside one clear workflow.</p>
        </div>
        <div class="container route-grid coach-card-grid">
          <article class="route-card"><span class="route-card-index">01</span><h3>Your content</h3><p>Build your own exercise library and use your own videos so clients see your coaching approach.</p></article>
          <article class="route-card"><span class="route-card-index">02</span><h3>Your schedule</h3><p>Plan client work with schedule blocks in the coach calendar.</p></article>
          <article class="route-card"><span class="route-card-index">03</span><h3>Your clients</h3><p>Invite clients, assign plans, and review progress information from the coach dashboard.</p></article>
          <article class="route-card"><span class="route-card-index">04</span><h3>Client workflow</h3><p>Workouts, nutrition, and progress review stay in one working flow for coach and client.</p></article>
        </div>
      </section>
      <section class="section coach-gallery-section">
        <div class="container coach-gallery-heading">
          <span class="section-kicker">Inside the app</span>
          <h2>The tools you need, always within reach.</h2>
        </div>
        <div class="container coach-screenshot-grid">
          <figure><img src="{{ asset('assets/img/app-screen-4.webp') }}" width="619" height="1100" alt="Coach exercise library sections in FitFreak Pro" loading="lazy" /><figcaption>Exercise library</figcaption></figure>
          <figure><img src="{{ asset('assets/img/app-screen-11.webp') }}" width="619" height="1100" alt="Coach calendar with schedule blocks in FitFreak Pro" loading="lazy" /><figcaption>Coach calendar</figcaption></figure>
          <figure><img src="{{ asset('assets/img/app-screen-8.webp') }}" width="619" height="1100" alt="Exercise details with video and set information" loading="lazy" /><figcaption>Client programs</figcaption></figure>
          <figure><img src="{{ asset('assets/img/app-screen-9.webp') }}" width="619" height="1100" alt="Nutrition target tracking screen" loading="lazy" /><figcaption>Nutrition targets</figcaption></figure>
        </div>
      </section>
      <section class="section"><div class="container cta-panel"><h2>Build around your own coaching, not generic templates.</h2><p>Download FitFreak Pro to start with a free coach account.</p><div class="cta-actions"><a class="btn btn-primary" href="{{ route('home') }}#download" data-track="hero_app_download_cta">Download the Free Coach App</a><a class="btn btn-secondary" href="{{ route('pricing') }}">View pricing</a></div></div></section>
    </main>
</x-layouts.public>
