@php
$page = json_decode(<<<'PAGE'
{
  "title": "About FitFreak Pro | Personal Trainer Software",
  "description": "FitFreak Pro is personal trainer software for organizing exercise libraries, client workouts, nutrition targets, schedules, and progress updates.",
  "canonical": "https://fitfreakpro.com/about/",
  "ogTitle": "About FitFreak Pro | Personal Trainer Software",
  "ogDescription": "A practical coaching utility for exercise libraries, workout assignment, nutrition targets, schedules, and client progress.",
  "ogImage": "https://fitfreakpro.com/assets/img/fitfreak-logo.png",
  "ogImageWidth": "640",
  "ogImageHeight": "640",
  "ogImageAlt": "FitFreak Pro logo",
  "twitterCard": "summary",
  "twitterTitle": "About FitFreak Pro | Personal Trainer Software",
  "twitterDescription": "FitFreak Pro helps coaches move client work out of scattered spreadsheets, notes, messages, and video links.",
  "twitterImage": "https://fitfreakpro.com/assets/img/fitfreak-logo.png",
  "twitterImageAlt": "FitFreak Pro logo",
  "schema": "[\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"AboutPage\",\n      \"@id\": \"https://fitfreakpro.com/about/#webpage\",\n      \"url\": \"https://fitfreakpro.com/about/\",\n      \"name\": \"About FitFreak Pro\",\n      \"description\": \"FitFreak Pro is a coach-led fitness utility for organizing exercise libraries, client workouts, nutrition targets, schedules, and progress updates.\",\n      \"isPartOf\": { \"@id\": \"https://fitfreakpro.com/#website\" },\n      \"about\": { \"@id\": \"https://fitfreakpro.com/#software\" },\n      \"inLanguage\": \"en\"\n    },\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"BreadcrumbList\",\n      \"itemListElement\": [\n        { \"@type\": \"ListItem\", \"position\": 1, \"name\": \"Home\", \"item\": \"https://fitfreakpro.com/\" },\n        { \"@type\": \"ListItem\", \"position\": 2, \"name\": \"About\", \"item\": \"https://fitfreakpro.com/about/\" }\n      ]\n    }\n  ]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
      <section class="route-hero"><div class="container"><div class="eyebrow">About</div><h1>Built to make independent coaching easier.</h1><p>FitFreak Pro is being built as a practical tool for personal trainers who are tired of managing programming, videos, nutrition targets, and client updates across disconnected tools.</p></div></section>
      <section class="section" style="padding-top:0;"><div class="container split-panel compact"><div><h2>Built to make independent coaching easier.</h2><p class="section-copy">FitFreak Pro is designed for personal trainers who want a clearer way to deliver individualized programs without managing workouts, videos, nutrition targets, and client updates across disconnected tools.</p><p class="section-copy">The trainer remains at the center of the experience. FitFreak Pro provides the structure for organizing exercises, assigning plans, and reviewing client progress.</p></div><div class="founder-card"><h3>Talk with the FitFreak Pro team.</h3><p>See the coach and client workflow, ask questions, and decide whether FitFreak Pro fits the way you work.</p><a class="btn btn-primary" href="mailto:support@fitfreakpro.com?subject=FitFreak%20Pro%20walkthrough" data-track="founder_walkthrough_click">Request a Product Walkthrough</a></div></div></section>
      <section class="section"><div class="container route-grid"><article class="route-card"><h2>What FitFreak Pro is</h2><p>Personal trainer software for exercise libraries, workout assignment, nutrition targets, client invitations, and progress review.</p></article><article class="route-card"><h2>What FitFreak Pro is not</h2><p>It is not a medical service, healthcare provider, generic consumer workout app, premade-workout marketplace, gym-membership platform, class-booking system, or replacement for a personal trainer.</p></article></div></section>
    </main>
</x-layouts.public>
