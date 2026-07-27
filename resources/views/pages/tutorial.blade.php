@php
$page = json_decode(<<<'PAGE'
{
  "title": "How to Use FitFreak Pro - Coach and Client Guide",
  "description": "A quick step-by-step FitFreak Pro guide for coaches and clients. Learn account setup, invitations, workouts, nutrition, and download the complete PDF manuals.",
  "canonical": "https://fitfreakpro.com/tutorial/",
  "ogTitle": "How to Use FitFreak Pro - Coach and Client Guide",
  "ogDescription": "A quick step-by-step FitFreak Pro guide for coaches and clients, with complete PDF manuals for download.",
  "ogImage": "https://fitfreakpro.com/images/tutorial/coach/04-create-program.png",
  "ogImageWidth": "",
  "ogImageHeight": "",
  "ogImageAlt": "FitFreak Pro workout program setup screen",
  "twitterCard": "summary_large_image",
  "twitterTitle": "How to Use FitFreak Pro - Coach and Client Guide",
  "twitterDescription": "Learn the essential coach and client steps, then download the complete FitFreak Pro PDF guides.",
  "twitterImage": "https://fitfreakpro.com/images/tutorial/coach/04-create-program.png",
  "twitterImageAlt": "FitFreak Pro workout program setup screen",
  "schema": "[\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"WebPage\",\n      \"@id\": \"https://fitfreakpro.com/tutorial/#webpage\",\n      \"url\": \"https://fitfreakpro.com/tutorial/\",\n      \"name\": \"How to Use FitFreak Pro - Coach and Client Guide\",\n      \"description\": \"A quick step-by-step FitFreak Pro guide for coaches and clients, with complete PDF manuals for download.\",\n      \"isPartOf\": { \"@id\": \"https://fitfreakpro.com/#website\" },\n      \"about\": { \"@id\": \"https://fitfreakpro.com/#software\" },\n      \"inLanguage\": \"en\"\n    },\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"BreadcrumbList\",\n      \"itemListElement\": [\n        { \"@type\": \"ListItem\", \"position\": 1, \"name\": \"Home\", \"item\": \"https://fitfreakpro.com/\" },\n        { \"@type\": \"ListItem\", \"position\": 2, \"name\": \"Tutorial\", \"item\": \"https://fitfreakpro.com/tutorial/\" }\n      ]\n    }\n  ]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main" class="tutorial-page">
      <section class="tutorial-hero">
        <div class="container tutorial-hero-grid">
          <div class="tutorial-hero-copy">
            <div class="eyebrow">FitFreak Pro - User Guide</div>
            <h1>Start using FitFreak Pro in minutes.</h1>
            <p>Follow the complete trainer and client workflow from account creation to assigned workouts, nutrition targets, and progress tracking.</p>
            <div class="hero-actions tutorial-role-selector" aria-label="Choose trainer or client instructions">
              <a class="btn btn-primary" href="#coach-guide" data-track="tutorial_coach_jump">I'm a Trainer</a>
              <a class="btn btn-secondary" href="#client-guide" data-track="tutorial_client_jump">I'm a Client</a>
            </div>
          </div>
          <div class="tutorial-hero-visual" aria-label="FitFreak Pro trainer and client app screens">
            <figure class="phone-shot tutorial-hero-phone tutorial-hero-phone-primary">
              <img src="{{ asset('images/tutorial/coach/02-exercise-library.png') }}" width="1242" height="2688" alt="FitFreak Pro trainer exercise library for building client programs" loading="eager" />
            </figure>
            <figure class="phone-shot tutorial-hero-phone tutorial-hero-phone-secondary">
              <img src="{{ asset('images/tutorial/client/04-client-dashboard.png') }}" width="1242" height="2688" alt="FitFreak Pro client dashboard with an assigned workout and nutrition targets" loading="eager" />
            </figure>
          </div>
        </div>
      </section>

      <nav class="tutorial-path-nav" aria-label="Tutorial guide navigation">
        <div class="container tutorial-path-nav-inner">
          <span>Choose a guide</span>
          <a href="#coach-guide" data-tutorial-nav="coach-guide">Trainer Guide</a>
          <a href="#client-guide" data-tutorial-nav="client-guide">Client Guide</a>
        </div>
      </nav>

      <section class="section tutorial-journey tutorial-journey-trainer" id="coach-guide">
        <div class="container section-header">
          <div>
            <div class="section-kicker">Trainer Guide</div>
            <h2 class="section-title">Create and manage client programs.</h2>
            <p class="section-copy">For personal trainers creating and managing client programs.</p>
          </div>
        </div>
        <div class="container tutorial-step-list">
          <article class="tutorial-step">
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">01</span>
              <h3>Create your coach account</h3>
              <p>Create the trainer account you will use to manage clients. Add your contact details and professional profile so clients can recognize who is delivering their plan.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/coach/01-create-coach-account.png') }}" width="1242" height="2688" alt="Coach account creation screen in FitFreak Pro" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step is-reverse">
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">02</span>
              <h3>Build your exercise library</h3>
              <p>Build the exercise library you will use in client programs. Add your own exercises, instructions, images, and videos so every assignment reflects how you coach.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/coach/02-exercise-library.png') }}" width="1242" height="2688" alt="Coach exercise library with custom exercise sections" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step">
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">03</span>
              <h3>Create and assign client programs</h3>
              <p>Create a program from exercises in your library, set weight, time, sets, or repetitions, and assign it to the appropriate client. This gives each client a clear plan to follow.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/coach/04-create-program.png') }}" width="1242" height="2688" alt="Workout program creation screen for assigning exercises to a client" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step is-reverse">
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">04</span>
              <h3>Invite your clients</h3>
              <p>Send each client an invitation from your trainer account. The invitation gives the client the code needed to connect their account with your coaching.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/coach/03-invite-client.png') }}" width="1242" height="2688" alt="Client invitation form in the FitFreak Pro trainer workflow" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step">
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">05</span>
              <h3>Set nutrition targets and review progress</h3>
              <p>Set the client’s daily calorie, macro, and water targets, then review the workouts, nutrition, parameters, and progress they submit. This gives you the information needed to adjust the plan over time.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/coach/05-set-nutrition-targets.png') }}" width="1242" height="2688" alt="Coach nutrition target setup screen for a client" loading="lazy" />
            </figure>
          </article>
        </div>
      </section>

      <section class="tutorial-guide-band tutorial-guide-band-trainer" id="coach-pdf">
        <div class="container">
          <article class="tutorial-guide-card">
            <div class="section-kicker">Trainer next step</div>
            <h2>Ready to build your coaching workflow?</h2>
            <p>For optional detailed instructions, the full guide covers account setup, profile details, exercise libraries, client invitations, workout programs, nutrition targets, client parameters, and settings.</p>
            <div class="cta-actions">
              <a class="btn btn-primary" href="{{ route('home') }}#download" data-track="tutorial_coach_app_download">Start Free as a Trainer</a>
              <a class="btn btn-secondary" href="{{ asset('downloads/fitfreak-pro-coach-guide-en.pdf') }}" target="_blank" rel="noopener noreferrer" download data-track="coach_pdf_download">Download the Full Coach Guide (PDF)</a>
            </div>
          </article>
        </div>
      </section>

      <section class="section tutorial-journey tutorial-journey-client" id="client-guide">
        <div class="container section-header">
          <div>
            <div class="section-kicker">Client Guide</div>
            <h2 class="section-title">Join your trainer and follow your plan.</h2>
            <p class="section-copy">For clients joining their trainer and following assigned plans.</p>
          </div>
        </div>
        <div class="container tutorial-step-list">
          <article class="tutorial-step">
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">01</span>
              <h3>Create your client account</h3>
              <p>Create the client account you will use to receive your plan. Select Regular user, verify your email, and complete your profile so the account is ready to connect with your trainer.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/client/01-create-client-account.png') }}" width="1242" height="2688" alt="Client account registration screen in FitFreak Pro" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step is-reverse">
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">02</span>
              <h3>Enter your coach invitation code</h3>
              <p>Enter the invitation code supplied by your coach. This connects your client account with the trainer responsible for assigning your workouts and nutrition targets.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/client/02-enter-coach-code.png') }}" width="1242" height="2688" alt="Client screen for entering a coach invitation code" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step">
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">03</span>
              <h3>Activate your FitFreak Pro subscription through Stripe</h3>
              <p>Review the subscription information in the app and complete payment through Stripe Checkout. Activation opens the digital coaching experience your trainer uses to deliver your plan.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/client/03-stripe.png') }}?v=20260721-price" width="798" height="1727" alt="Stripe Checkout screen showing the $12.99 FitFreak Pro client subscription" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step is-reverse">
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">04</span>
              <h3>Open your assigned plan</h3>
              <p>Open the Dashboard after activation to see the current workout and nutrition goals assigned by your trainer. This keeps the plan you need to follow clear and accessible.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/client/04-client-dashboard.png') }}" width="1242" height="2688" alt="Client dashboard showing an assigned workout and nutrition goals" loading="lazy" />
            </figure>
          </article>
          <article class="tutorial-step">
            <div class="tutorial-step-copy">
              <span class="tutorial-step-number">05</span>
              <h3 class="tutorial-step-title-long">Follow workouts, exercise instructions, nutrition targets, and submit progress</h3>
              <p>Complete the workouts assigned by your trainer, review exercise demonstrations and instructions, follow nutrition and water targets, and submit progress. This gives your trainer the information needed to review your plan over time.</p>
            </div>
            <figure class="tutorial-media">
              <img src="{{ asset('images/tutorial/client/05-exercise-video.png') }}" width="1242" height="2688" alt="Client exercise detail screen with video and workout instructions" loading="lazy" />
            </figure>
          </article>
        </div>
      </section>

      <section class="tutorial-guide-band tutorial-guide-band-client" id="client-pdf">
        <div class="container">
          <article class="tutorial-guide-card">
            <div class="section-kicker">Client next step</div>
            <h2>Ready to join your coach?</h2>
            <p>For optional detailed instructions, the full guide covers registration, Stripe activation, assigned workouts, exercise videos, progress summaries, check-in photos, nutrition, foods, recipes, your coach's profile, and account settings.</p>
            <div class="cta-actions">
              <a class="btn btn-primary" href="{{ route('home') }}#download" data-track="tutorial_client_app_download">Enter Invitation Code</a>
              <a class="btn btn-secondary" href="{{ asset('downloads/fitfreak-pro-client-guide-en.pdf') }}" target="_blank" rel="noopener noreferrer" download data-track="client_pdf_download">Download the Full Client Guide (PDF)</a>
            </div>
          </article>
        </div>
      </section>
    </main>
</x-layouts.public>
