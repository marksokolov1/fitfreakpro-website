@php
$page = json_decode(<<<'PAGE'
{
  "title": "FitFreak Pro Pricing for Coaches and Clients",
  "description": "FitFreak Pro coaches can register for free. Invited clients pay $12.99 per month for coach-assigned workouts, nutrition targets, and progress tools.",
  "canonical": "https://fitfreakpro.com/pricing/",
  "ogTitle": "FitFreak Pro Pricing for Coaches and Clients",
  "ogDescription": "Coaches start free. Invited clients pay $12.99 per month for access to the coaching experience their trainer delivers through FitFreak Pro.",
  "ogImage": "https://fitfreakpro.com/assets/img/app-screen-1.webp",
  "ogImageWidth": "619",
  "ogImageHeight": "1100",
  "ogImageAlt": "FitFreak Pro coach dashboard showing client management",
  "twitterCard": "summary_large_image",
  "twitterTitle": "FitFreak Pro Pricing for Coaches and Clients",
  "twitterDescription": "Coaches start free. Invited clients pay $12.99 per month for the coach-led app experience.",
  "twitterImage": "https://fitfreakpro.com/assets/img/app-screen-1.webp",
  "twitterImageAlt": "FitFreak Pro coach dashboard showing client management",
  "schema": "[\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"WebPage\",\n      \"@id\": \"https://fitfreakpro.com/pricing/#webpage\",\n      \"url\": \"https://fitfreakpro.com/pricing/\",\n      \"name\": \"FitFreak Pro Pricing for Coaches and Clients\",\n      \"description\": \"FitFreak Pro coaches can register for free. Invited clients pay $12.99 per month for coach-assigned workouts, nutrition targets, and progress tools.\",\n      \"isPartOf\": { \"@id\": \"https://fitfreakpro.com/#website\" },\n      \"about\": { \"@id\": \"https://fitfreakpro.com/#software\" },\n      \"mainEntity\": {\n        \"@type\": \"OfferCatalog\",\n        \"name\": \"FitFreak Pro pricing\",\n        \"itemListElement\": [\n          {\n            \"@type\": \"Offer\",\n            \"name\": \"Coach account\",\n            \"price\": \"0\",\n            \"priceCurrency\": \"USD\",\n            \"description\": \"Trainers can register for free.\"\n          },\n          {\n            \"@type\": \"Offer\",\n            \"name\": \"Invited client access\",\n            \"price\": \"12.99\",\n            \"priceCurrency\": \"USD\",\n            \"description\": \"Clients pay $12.99 per month after being invited by their coach.\"\n          }\n        ]\n      },\n      \"inLanguage\": \"en\"\n    },\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"BreadcrumbList\",\n      \"itemListElement\": [\n        { \"@type\": \"ListItem\", \"position\": 1, \"name\": \"Home\", \"item\": \"https://fitfreakpro.com/\" },\n        { \"@type\": \"ListItem\", \"position\": 2, \"name\": \"Pricing\", \"item\": \"https://fitfreakpro.com/pricing/\" }\n      ]\n    }\n  ]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
      <section class="route-hero">
        <div class="container">
          <div class="eyebrow">Pricing</div>
          <h1>Simple pricing built around the trainer-client relationship.</h1>
          <p>Start building your coaching system without a monthly coach platform subscription. Clients subscribe after receiving an invitation from their coach.</p>
        </div>
      </section>
      <section class="section" style="padding-top:0;">
        <div class="container">
          <div class="pricing-grid">
            <article class="pricing-card featured"><p class="pricing-label">Coach account</p><div class="price">$0 <small>per month</small></div><p>Create your exercise library, invite clients, and manage active subscribed clients without paying a monthly coach platform fee.</p><ul><li>Build your exercise library</li><li>Add your own videos</li><li>Invite clients</li><li>Assign workouts</li><li>Set nutrition targets</li><li>Review client-submitted progress</li><li>No monthly coach platform fee</li></ul></article>
            <article class="pricing-card"><p class="pricing-label">Invited client access</p><div class="price">$12.99 <small>per month</small></div><p>Clients subscribe after receiving an invitation from their coach.</p><ul><li>Access coach-assigned workouts</li><li>View exercise instructions and videos</li><li>Follow assigned nutrition targets</li><li>Submit progress information</li><li>Stay connected to the coaching plan</li></ul></article>
          </div>
          <div class="content-note"><h2>Why does the client subscribe?</h2><p>The subscription gives the client access to the coaching experience their trainer delivers through FitFreak Pro, including assigned workouts, exercise guidance, nutrition targets, and progress tools.</p></div>
          <div class="cta-panel"><h2>Ready to start as a trainer?</h2><p>Download FitFreak Pro to create your free coach account in the app.</p><div class="cta-actions"><a class="btn btn-primary" href="{{ route('home') }}#download" data-track="pricing_cta_click">Download the Free Coach App</a><a class="btn btn-secondary" href="mailto:support@fitfreakpro.com?subject=FitFreak%20Pro%20walkthrough" data-track="founder_walkthrough_click">Request a Product Walkthrough</a></div></div>
        </div>
      </section>
    </main>
</x-layouts.public>
