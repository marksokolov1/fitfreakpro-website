@php
$page = json_decode(<<<'PAGE'
{
  "title": "How FitFreak Pro Works for Personal Trainers | FitFreak Pro",
  "description": "Create a free trainer account, build your exercise library, invite clients, assign workouts, set nutrition targets, and review client progress.",
  "canonical": "https://fitfreakpro.com/how-it-works/",
  "ogTitle": "How FitFreak Pro Works for Personal Trainers | FitFreak Pro",
  "ogDescription": "Create a free trainer account, build your exercise library, invite clients, assign workouts, set nutrition targets, and review client progress.",
  "ogImage": "https://fitfreakpro.com/assets/img/app-screen-4.webp",
  "ogImageWidth": "619",
  "ogImageHeight": "1100",
  "ogImageAlt": "FitFreak Pro exercise library screen showing coach-created sections",
  "twitterCard": "summary_large_image",
  "twitterTitle": "How FitFreak Pro Works for Personal Trainers | FitFreak Pro",
  "twitterDescription": "Create a free trainer account, build your exercise library, invite clients, assign workouts, set nutrition targets, and review client progress.",
  "twitterImage": "https://fitfreakpro.com/assets/img/app-screen-4.webp",
  "twitterImageAlt": "FitFreak Pro exercise library screen showing coach-created sections",
  "schema": "[\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"WebPage\",\n      \"@id\": \"https://fitfreakpro.com/how-it-works/#webpage\",\n      \"url\": \"https://fitfreakpro.com/how-it-works/\",\n      \"name\": \"How FitFreak Pro Works for Personal Trainers\",\n      \"description\": \"Create a free trainer account, build your exercise library, invite clients, assign workouts, set nutrition targets, and review client progress.\",\n      \"isPartOf\": { \"@id\": \"https://fitfreakpro.com/#website\" },\n      \"about\": { \"@id\": \"https://fitfreakpro.com/#software\" },\n      \"inLanguage\": \"en\"\n    },\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"BreadcrumbList\",\n      \"itemListElement\": [\n        { \"@type\": \"ListItem\", \"position\": 1, \"name\": \"Home\", \"item\": \"https://fitfreakpro.com/\" },\n        { \"@type\": \"ListItem\", \"position\": 2, \"name\": \"How It Works\", \"item\": \"https://fitfreakpro.com/how-it-works/\" }\n      ]\n    }\n  ]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
      <section class="route-hero"><div class="container"><div class="eyebrow">How It Works</div><h1>From coach registration to a clear client plan.</h1><p>FitFreak Pro helps personal trainers organize their exercises, videos, client plans, nutrition targets, and progress information inside one focused coaching app.</p></div></section>
      <section class="section" style="padding-top:0;"><div class="container"><div class="workflow-timeline">
        <article class="workflow-step"><img src="{{ asset('assets/img/app-screen-1.webp') }}" width="619" height="1100" alt="Coach dashboard screen in FitFreak Pro" loading="lazy" /><div><span>Step 1</span><h2>Create your free coach account</h2><p>Download FitFreak Pro and register as a coach.</p></div></article>
        <article class="workflow-step"><img src="{{ asset('assets/img/app-screen-4.webp') }}" width="619" height="1100" alt="Exercise library screen in FitFreak Pro" loading="lazy" /><div><span>Step 2</span><h2>Build your exercise library</h2><p>Add your own exercises, videos, instructions, and coaching notes.</p></div></article>
        <article class="workflow-step"><img src="{{ asset('assets/img/app-screen-10.webp') }}" width="619" height="1100" alt="Client invitation screen in FitFreak Pro" loading="lazy" /><div><span>Step 3</span><h2>Invite a client</h2><p>Send an invitation so the client can access the workouts and guidance you assign.</p></div></article>
        <article class="workflow-step"><img src="{{ asset('assets/img/app-screen-6.webp') }}" width="619" height="1100" alt="Nutrition target screen in FitFreak Pro" loading="lazy" /><div><span>Step 4</span><h2>Assign plans and review progress</h2><p>Assign workouts, set nutrition targets, and review the progress information submitted by the client.</p></div></article>
      </div></div></section>
      <section class="section"><div class="container cta-panel"><h2>See whether FitFreak Pro fits the way you coach.</h2><p>See how FitFreak Pro can organize the work you currently manage through spreadsheets, notes, video links, and messages.</p><div class="cta-actions"><a class="btn btn-primary" href="{{ route('home') }}#download" data-track="hero_app_download_cta">Download the Free Coach App</a><a class="btn btn-secondary" href="mailto:support@fitfreakpro.com?subject=FitFreak%20Pro%20walkthrough" data-track="founder_walkthrough_click">Request a Product Walkthrough</a></div></div></section>
    </main>
</x-layouts.public>
