@php
$page = json_decode(<<<'PAGE'
{
  "title": "How FitFreak Pro Works for Personal Trainers | FitFreak Pro",
  "description": "Build your exercise library, invite clients, assign personalized programs, set nutrition targets, and review progress through one focused coaching experience.",
  "canonical": "https://fitfreakpro.com/how-it-works/",
  "ogTitle": "How FitFreak Pro Works for Personal Trainers | FitFreak Pro",
  "ogDescription": "Build your exercise library, invite clients, assign personalized programs, set nutrition targets, and review progress through one focused coaching experience.",
  "ogImage": "https://fitfreakpro.com/assets/img/app-screen-4.webp",
  "ogImageWidth": "619",
  "ogImageHeight": "1100",
  "ogImageAlt": "FitFreak Pro exercise library screen showing coach-created sections",
  "twitterCard": "summary_large_image",
  "twitterTitle": "How FitFreak Pro Works for Personal Trainers | FitFreak Pro",
  "twitterDescription": "Build your exercise library, invite clients, assign personalized programs, set nutrition targets, and review progress through one focused coaching experience.",
  "twitterImage": "https://fitfreakpro.com/assets/img/app-screen-4.webp",
  "twitterImageAlt": "FitFreak Pro exercise library screen showing coach-created sections",
  "schema": "[\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"WebPage\",\n      \"@id\": \"https://fitfreakpro.com/how-it-works/#webpage\",\n      \"url\": \"https://fitfreakpro.com/how-it-works/\",\n      \"name\": \"How FitFreak Pro Works for Personal Trainers\",\n      \"description\": \"Create a free trainer account, build your exercise library, invite clients, assign workouts, set nutrition targets, and review client progress.\",\n      \"isPartOf\": { \"@id\": \"https://fitfreakpro.com/#website\" },\n      \"about\": { \"@id\": \"https://fitfreakpro.com/#software\" },\n      \"inLanguage\": \"en\"\n    },\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"BreadcrumbList\",\n      \"itemListElement\": [\n        { \"@type\": \"ListItem\", \"position\": 1, \"name\": \"Home\", \"item\": \"https://fitfreakpro.com/\" },\n        { \"@type\": \"ListItem\", \"position\": 2, \"name\": \"How It Works\", \"item\": \"https://fitfreakpro.com/how-it-works/\" }\n      ]\n    }\n  ]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main" class="how-it-works-page">
      <section class="route-hero"><div class="container"><div class="eyebrow">How It Works</div><h1>From your coaching method to one clear client experience.</h1><p>Build your exercise library, invite clients, assign personalized programs, set nutrition targets, and review progress through one focused coaching experience.</p></div></section>
      <section class="section how-it-works-workflow-section"><div class="container"><div class="workflow-timeline">
        <article class="workflow-step"><figure class="workflow-app-shot workflow-app-shot-registration"><img src="{{ asset('images/tutorial/coach/01-create-coach-account.png') }}" width="922" height="2000" alt="Coach profile registration screen in FitFreak Pro" loading="lazy" /></figure><div><span>Step 1</span><h2>Create your free coach profile</h2><p>Add your experience, specialization, certifications, and coaching approach.</p></div></article>
        <article class="workflow-step"><figure class="workflow-app-shot"><img src="{{ asset('images/tutorial/coach/02-exercise-library.png') }}" width="922" height="2000" alt="Exercise library screen in FitFreak Pro" loading="lazy" /></figure><div><span>Step 2</span><h2>Build your exercise library</h2><p>Add your own exercises, demonstration videos, instructions, and coaching cues.</p></div></article>
        <article class="workflow-step"><figure class="workflow-app-shot"><img src="{{ asset('images/tutorial/coach/03-invite-client.png') }}" width="922" height="2000" alt="Client invitation screen in FitFreak Pro" loading="lazy" /></figure><div><span>Step 3</span><h2>Invite a client</h2><p>Send an invitation so the client can create an account, activate access, and connect with your coaching.</p></div></article>
        <article class="workflow-step"><figure class="workflow-app-shot workflow-app-collage workflow-app-collage-two"><img src="{{ asset('images/tutorial/coach/04-create-program.png') }}" width="922" height="2000" alt="Program builder showing exercises, sets, weight or time, and repetitions" loading="lazy" /><img src="{{ asset('images/tutorial/coach/05-set-nutrition-targets.png') }}" width="922" height="2000" alt="Coach screen for setting client nutrition targets" loading="lazy" /></figure><div><span>Step 4</span><h2>Assign their program</h2><p>Choose a saved program or create a new one, then set exercises, repetitions, weight or time, and nutrition targets.</p></div></article>
        <article class="workflow-step"><figure class="workflow-app-shot workflow-app-collage workflow-app-collage-review"><img class="workflow-review-primary" src="{{ asset('images/tutorial/coach/07-workout-status.png') }}" width="798" height="1727" alt="Coach view of assigned workouts and completion status" loading="lazy" /><span class="workflow-review-stack"><img src="{{ asset('images/tutorial/coach/08-client-parameters.png') }}" width="798" height="1727" alt="Coach view of client-submitted parameters by date" loading="lazy" /><img src="{{ asset('images/tutorial/coach/09-nutrition-review.png') }}" width="798" height="1727" alt="Coach review of client nutrition progress" loading="lazy" /></span></figure><div><span>Step 5</span><h2>Review and adjust</h2><p>Review workouts, nutrition, parameters, and submitted progress, then update the plan over time.</p></div></article>
      </div><p class="workflow-price-note">Invited clients activate their FitFreak Pro experience for $12.99 per month through Stripe.</p></div></section>
      <section class="section how-it-works-cta-section"><div class="container cta-panel"><h2>See how FitFreak Pro fits the way you coach.</h2><p>See how your spreadsheets, notes, video links, and messages can become one repeatable coaching workflow.</p><div class="cta-actions"><a class="btn btn-primary" href="{{ route('home') }}#download" data-track="hero_app_download_cta">Start Free as a Coach</a><a class="btn btn-secondary" href="mailto:support@fitfreakpro.com?subject=FitFreak%20Pro%20walkthrough" data-track="founder_walkthrough_click">Book a Product Walkthrough</a></div></div></section>
    </main>
</x-layouts.public>
