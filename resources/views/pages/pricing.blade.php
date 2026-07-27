@php
$page = json_decode(<<<'PAGE'
{
  "title": "FitFreak Pro Pricing for Trainers and Clients",
  "description": "FitFreak Pro trainers can register for free. Invited clients pay $12.99 per month for trainer-assigned workouts, nutrition targets, and progress tools.",
  "canonical": "https://fitfreakpro.com/pricing/",
  "ogTitle": "FitFreak Pro Pricing for Trainers and Clients",
  "ogDescription": "Trainers start free. Invited clients pay $12.99 per month for access to the coaching experience their trainer delivers through FitFreak Pro.",
  "ogImage": "https://fitfreakpro.com/assets/img/app-screen-1.webp",
  "ogImageWidth": "619",
  "ogImageHeight": "1100",
  "ogImageAlt": "FitFreak Pro trainer dashboard showing client management",
  "twitterCard": "summary_large_image",
  "twitterTitle": "FitFreak Pro Pricing for Trainers and Clients",
  "twitterDescription": "Trainers start free. Invited clients pay $12.99 per month for the trainer-led app experience.",
  "twitterImage": "https://fitfreakpro.com/assets/img/app-screen-1.webp",
  "twitterImageAlt": "FitFreak Pro trainer dashboard showing client management",
  "schema": "[\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"WebPage\",\n      \"@id\": \"https://fitfreakpro.com/pricing/#webpage\",\n      \"url\": \"https://fitfreakpro.com/pricing/\",\n      \"name\": \"FitFreak Pro Pricing for Trainers and Clients\",\n      \"description\": \"FitFreak Pro trainers can register for free. Invited clients pay $12.99 per month for trainer-assigned workouts, nutrition targets, and progress tools.\",\n      \"isPartOf\": { \"@id\": \"https://fitfreakpro.com/#website\" },\n      \"about\": { \"@id\": \"https://fitfreakpro.com/#software\" },\n      \"mainEntity\": {\n        \"@type\": \"OfferCatalog\",\n        \"name\": \"FitFreak Pro pricing\",\n        \"itemListElement\": [\n          {\n            \"@type\": \"Offer\",\n            \"name\": \"Trainer account\",\n            \"price\": \"0\",\n            \"priceCurrency\": \"USD\",\n            \"description\": \"Trainers can register for free.\"\n          },\n          {\n            \"@type\": \"Offer\",\n            \"name\": \"Client coaching experience\",\n            \"price\": \"12.99\",\n            \"priceCurrency\": \"USD\",\n            \"description\": \"Clients pay $12.99 per month after being invited by their trainer.\"\n          }\n        ]\n      },\n      \"inLanguage\": \"en\"\n    },\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"BreadcrumbList\",\n      \"itemListElement\": [\n        { \"@type\": \"ListItem\", \"position\": 1, \"name\": \"Home\", \"item\": \"https://fitfreakpro.com/\" },\n        { \"@type\": \"ListItem\", \"position\": 2, \"name\": \"Pricing\", \"item\": \"https://fitfreakpro.com/pricing/\" }\n      ]\n    }\n  ]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main" class="pricing-page">
      <section class="route-hero">
        <div class="container">
          <div class="eyebrow">Pricing</div>
          <h1>Simple pricing built around the trainer-client relationship.</h1>
          <p>Create your coaching system with no monthly trainer platform fee. Clients activate their FitFreak Pro experience after receiving an invitation from their trainer.</p>
        </div>
      </section>
      <section class="section pricing-model-section">
        <div class="container">
          <div class="pricing-sequence" aria-label="How FitFreak Pro pricing works">
            <div class="pricing-sequence-step"><span>1</span><strong>Trainer creates a free account</strong></div>
            <div class="pricing-sequence-step"><span>2</span><strong>Invites a client</strong></div>
            <div class="pricing-sequence-step"><span>3</span><strong>Client activates access</strong></div>
          </div>
          <div class="pricing-grid">
            <article class="pricing-card featured"><p class="pricing-label">Trainer account</p><div class="price"><span>$0</span><small>per month</small></div><p>Build and deliver your coaching through FitFreak Pro without a monthly trainer platform fee.</p><ul><li>Build your exercise library</li><li>Add your own videos and instructions</li><li>Invite and manage clients</li><li>Assign personalized programs and nutrition targets</li><li>Review client-submitted progress</li><li>No monthly trainer platform fee</li></ul></article>
            <article class="pricing-card"><p class="pricing-label">Client coaching experience</p><div class="price"><span>$12.99</span><small>per month</small></div><p>Clients activate the personalized digital coaching experience their trainer delivers through FitFreak Pro.</p><ul><li>Follow trainer-assigned workouts</li><li>View exercise demonstrations and instructions</li><li>Review nutrition and water targets</li><li>Submit progress information</li><li>Stay connected to one current coaching plan</li></ul></article>
          </div>
          <div class="content-note"><h2>Why does the client subscribe separately?</h2><p>The trainer’s professional fee covers their expertise and coaching service. The $12.99 FitFreak Pro subscription activates the digital coaching experience where the trainer delivers workouts, demonstrations, nutrition targets, and progress tools.</p></div>
          <div class="cta-panel pricing-cta-panel">
            <div><h2>Ready to start as a trainer?</h2><p>Download FitFreak Pro to create your free trainer account in the app.</p><div class="cta-actions"><a class="btn btn-primary" href="{{ route('home') }}#download" data-track="pricing_cta_click">Start Free as a Trainer</a><a class="btn btn-secondary" href="mailto:support@fitfreakpro.com?subject=FitFreak%20Pro%20walkthrough" data-track="founder_walkthrough_click">Book a Product Walkthrough</a></div></div>
            <div class="store-row"><a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Download FitFreak Pro on the App Store"><span>Download on the<strong>App Store</strong></span></a><a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Get FitFreak Pro on Google Play"><span>Get it on<strong>Google Play</strong></span></a></div>
          </div>
        </div>
      </section>
    </main>
</x-layouts.public>
