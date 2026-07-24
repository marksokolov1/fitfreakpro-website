@php
$page = json_decode(<<<'PAGE'
{
  "title": "Terms | FitFreak Pro",
  "description": "FitFreak Pro terms overview for coaches and clients using the coaching platform.",
  "canonical": "https://fitfreakpro.com/terms/",
  "ogTitle": "Terms | FitFreak Pro",
  "ogDescription": "FitFreak Pro terms overview for coaches and clients using the coaching platform.",
  "ogImage": "https://fitfreakpro.com/assets/img/fitfreak-logo.png",
  "ogImageWidth": "640",
  "ogImageHeight": "640",
  "ogImageAlt": "FitFreak Pro logo",
  "twitterCard": "summary",
  "twitterTitle": "Terms | FitFreak Pro",
  "twitterDescription": "FitFreak Pro terms overview for coaches and clients using the coaching platform.",
  "twitterImage": "https://fitfreakpro.com/assets/img/fitfreak-logo.png",
  "twitterImageAlt": "FitFreak Pro logo",
  "schema": "[\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"WebPage\",\n      \"@id\": \"https://fitfreakpro.com/terms/#webpage\",\n      \"url\": \"https://fitfreakpro.com/terms/\",\n      \"name\": \"Terms | FitFreak Pro\",\n      \"description\": \"FitFreak Pro terms overview for coaches and clients using the coaching platform.\",\n      \"isPartOf\": { \"@id\": \"https://fitfreakpro.com/#website\" },\n      \"about\": { \"@id\": \"https://fitfreakpro.com/#software\" },\n      \"inLanguage\": \"en\"\n    },\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"BreadcrumbList\",\n      \"itemListElement\": [\n        { \"@type\": \"ListItem\", \"position\": 1, \"name\": \"Home\", \"item\": \"https://fitfreakpro.com/\" },\n        { \"@type\": \"ListItem\", \"position\": 2, \"name\": \"Terms\", \"item\": \"https://fitfreakpro.com/terms/\" }\n      ]\n    }\n  ]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
      <!-- LEGAL_REVIEW_REQUIRED: Terms must be reviewed and approved by qualified counsel. -->
      <section class="page-hero"><div class="container"><div class="eyebrow">Terms</div><h1>Terms of Use</h1><p>These terms summarize important responsibilities for coaches and clients using FitFreak Pro.</p></div></section>
      <section class="container policy-layout" style="grid-template-columns:1fr;">
        <div class="policy-content">
          <article class="terms-card"><h2>Platform Use</h2><p>FitFreak Pro is a coaching app for personal trainers and invited clients. Trainers may build exercise libraries, invite clients, assign workouts, set nutrition targets, and review client-submitted information. Clients may access trainer-assigned content after invitation and subscription.</p></article>
          <article class="terms-card"><h2>Coach and Client Responsibilities</h2><p>Trainers are responsible for the coaching guidance, workout plans, nutrition targets, videos, and content they provide through the platform. Clients are responsible for using the platform safely and following their trainer’s guidance appropriately.</p></article>
          <article class="terms-card"><h2>No Medical or Emergency Service</h2><p>FitFreak Pro is not a medical provider, healthcare provider, or emergency service. Users should not rely on FitFreak Pro for emergency, medical, diagnosis, treatment, or healthcare needs.</p></article>
          <article class="terms-card"><h2>Subscriptions</h2><p>Trainers can register for free. Clients pay $12.99/month after being invited by their trainer. Subscription management may be handled through the applicable app store or payment provider.</p></article>
          <article class="terms-card"><h2>Contact</h2><p>Questions about these terms can be sent to <a class="email-link" href="mailto:support@fitfreakpro.com" data-track="support_email_click">support@fitfreakpro.com</a>.</p></article>
        </div>
      </section>
    </main>
</x-layouts.public>
