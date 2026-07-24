@php
$page = json_decode(<<<'PAGE'
{
  "title": "Personal Trainer Software Built Around Your Coaching | FitFreak Pro",
  "description": "Build your own exercise library, use your own videos, assign client workouts, set nutrition targets, and review progress in one clear app. Trainer accounts are free.",
  "canonical": "https://fitfreakpro.com/",
  "ogTitle": "Personal Trainer Software Built Around Your Coaching | FitFreak Pro",
  "ogDescription": "Build your own exercise library, use your own videos, assign client workouts, set nutrition targets, and review progress in one clear app. Trainer accounts are free.",
  "ogImage": "https://fitfreakpro.com/assets/img/app-screen-1.webp",
  "ogImageWidth": "619",
  "ogImageHeight": "1100",
  "ogImageAlt": "FitFreak Pro coach dashboard showing client management in one app",
  "twitterCard": "summary_large_image",
  "twitterTitle": "Personal Trainer Software Built Around Your Coaching | FitFreak Pro",
  "twitterDescription": "Trainer accounts are free. Build your own exercise library, use your own videos, assign workouts, set nutrition targets, and review progress.",
  "twitterImage": "https://fitfreakpro.com/assets/img/app-screen-1.webp",
  "twitterImageAlt": "FitFreak Pro coach dashboard showing client management in one app",
  "schema": "{\n  \"@context\": \"https://schema.org\",\n  \"@graph\": [\n    {\n      \"@type\": \"Organization\",\n      \"@id\": \"https://fitfreakpro.com/#organization\",\n      \"name\": \"FitFreak Pro\",\n      \"url\": \"https://fitfreakpro.com/\",\n      \"logo\": \"https://fitfreakpro.com/assets/img/fitfreak-logo.png\",\n      \"sameAs\": [\n        \"https://www.linkedin.com/company/fitfreak-pro/\"\n      ],\n      \"contactPoint\": {\n        \"@type\": \"ContactPoint\",\n        \"email\": \"support@fitfreakpro.com\",\n        \"contactType\": \"customer support\"\n      }\n    },\n    {\n      \"@type\": \"WebSite\",\n      \"@id\": \"https://fitfreakpro.com/#website\",\n      \"name\": \"FitFreak Pro\",\n      \"url\": \"https://fitfreakpro.com/\",\n      \"publisher\": {\n        \"@id\": \"https://fitfreakpro.com/#organization\"\n      },\n      \"inLanguage\": \"en\"\n    },\n    {\n      \"@type\": \"SoftwareApplication\",\n      \"@id\": \"https://fitfreakpro.com/#software\",\n      \"name\": \"FitFreak Pro\",\n      \"applicationCategory\": \"BusinessApplication\",\n      \"operatingSystem\": \"iOS, Android\",\n      \"description\": \"Personal trainer software for building exercise libraries, using coach-owned videos, assigning workouts, setting nutrition targets, and reviewing client progress.\",\n      \"url\": \"https://fitfreakpro.com/\",\n      \"publisher\": {\n        \"@id\": \"https://fitfreakpro.com/#organization\"\n      },\n      \"downloadUrl\": [\n        \"https://apps.apple.com/us/app/fit-freak-pro/id6742347988\",\n        \"https://play.google.com/store/apps/details?id=com.duseca.fitfreak\"\n      ],\n      \"offers\": [\n        {\n          \"@type\": \"Offer\",\n          \"name\": \"Coach account\",\n          \"price\": \"0\",\n          \"priceCurrency\": \"USD\",\n          \"description\": \"Trainers can register for free.\"\n        },\n        {\n          \"@type\": \"Offer\",\n          \"name\": \"Invited client access\",\n          \"price\": \"12.99\",\n          \"priceCurrency\": \"USD\",\n          \"description\": \"Clients pay $12.99 per month after being invited by their coach.\"\n        }\n      ]\n    },\n    {\n      \"@type\": \"FAQPage\",\n      \"@id\": \"https://fitfreakpro.com/#faq\",\n      \"mainEntity\": [\n        {\n          \"@type\": \"Question\",\n          \"name\": \"What is FitFreak Pro?\",\n          \"acceptedAnswer\": {\n            \"@type\": \"Answer\",\n            \"text\": \"FitFreak Pro is personal trainer software for building an exercise library, using your own videos, assigning workouts, setting nutrition targets, and reviewing client progress.\"\n          }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"Who is FitFreak Pro for?\",\n          \"acceptedAnswer\": {\n            \"@type\": \"Answer\",\n            \"text\": \"It is built for independent personal trainers, online coaches, hybrid trainers, and small personalized coaching businesses.\"\n          }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"Is FitFreak Pro free for trainers?\",\n          \"acceptedAnswer\": {\n            \"@type\": \"Answer\",\n            \"text\": \"Yes. Trainers can register for free, build their exercise library, invite clients, and manage active subscribed clients without a monthly coach platform fee.\"\n          }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"Why does the client pay a monthly subscription?\",\n          \"acceptedAnswer\": {\n            \"@type\": \"Answer\",\n            \"text\": \"The subscription gives the client access to workouts, exercise videos, nutrition targets, and progress tools provided by their trainer through FitFreak Pro.\"\n          }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"Can trainers use their own exercise videos?\",\n          \"acceptedAnswer\": {\n            \"@type\": \"Answer\",\n            \"text\": \"Yes. Trainers can build their own exercise library and use their own videos, demonstrations, instructions, and coaching notes.\"\n          }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"Can FitFreak Pro support online and in-person clients?\",\n          \"acceptedAnswer\": {\n            \"@type\": \"Answer\",\n            \"text\": \"Yes. FitFreak Pro supports trainers who work online, in person, or through a hybrid coaching model.\"\n          }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"How does a client join?\",\n          \"acceptedAnswer\": {\n            \"@type\": \"Answer\",\n            \"text\": \"A client joins after receiving an invitation from their trainer. After subscription access is active, the trainer can manage that client from the dashboard.\"\n          }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"Where can the application be downloaded?\",\n          \"acceptedAnswer\": {\n            \"@type\": \"Answer\",\n            \"text\": \"FitFreak Pro is available on the Apple App Store and Google Play.\"\n          }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"How can a trainer request a walkthrough?\",\n          \"acceptedAnswer\": {\n            \"@type\": \"Answer\",\n            \"text\": \"Email support@fitfreakpro.com with the subject FitFreak Pro walkthrough.\"\n          }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"Is FitFreak Pro a healthcare or medical service?\",\n          \"acceptedAnswer\": {\n            \"@type\": \"Answer\",\n            \"text\": \"No. FitFreak Pro is not a healthcare provider, medical service, emergency service, or substitute for professional medical advice.\"\n          }\n        }\n      ]\n    }\n  ]\n}"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
      <section class="hero redesign-hero">
        <div class="container hero-grid">
          <div class="hero-copy-wrap">
            <div class="eyebrow">Personal trainer software built around your coaching</div>
            <h1>Your coaching. Your exercises. <span class="lime-text">One clear plan for every client.</span></h1>
            <p class="hero-copy">Build your own exercise library, use your own videos, assign personalized workouts, set nutrition targets, and review client progress without managing everything through spreadsheets, notes, and endless messages.</p>
            <div class="hero-actions">
              <a class="btn btn-primary" href="#download" data-track="hero_app_download_cta">Download the Free Coach App</a>
              <a class="btn btn-secondary" href="#workflow" data-track="see_workflow_click">See How It Works</a>
            </div>
            <p class="download-label">$0 monthly coach account. Available on iPhone and Android.</p>
          </div>
          <div class="product-shot-grid" aria-label="FitFreak Pro product screenshots">
            <figure class="phone-shot phone-shot-primary">
              <img src="{{ asset('assets/img/app-screen-1.webp') }}" width="619" height="1100" alt="FitFreak Pro coach dashboard for managing clients, workouts, nutrition, and progress" loading="eager" />
            </figure>
            <figure class="phone-shot phone-shot-secondary">
              <img src="{{ asset('assets/img/app-screen-11.webp') }}" width="619" height="1100" alt="FitFreak Pro coach calendar screen with schedule blocks" loading="eager" />
            </figure>
          </div>
        </div>
      </section>

      <section class="download-strip" id="download" aria-labelledby="download-heading">
        <div class="container download-strip-inner">
          <div>
            <h2 id="download-heading">Download FitFreak Pro</h2>
            <p>Register as a coach for free or access a coach invitation in the app.</p>
          </div>
          <div class="store-row" aria-label="App download links">
            <a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Download FitFreak Pro on the App Store"><span>Download on the<strong>App Store</strong></span></a>
            <a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Get FitFreak Pro on Google Play"><span>Get it on<strong>Google Play</strong></span></a>
          </div>
        </div>
      </section>

      <section class="section" id="product">
        <div class="container section-header">
          <div>
            <div class="section-kicker">Product</div>
            <h2 class="section-title">Your coaching should not live across five different tools.</h2>
            <p class="section-copy">Workouts in spreadsheets. Client updates in messages. Exercise videos stored in folders. Nutrition targets written in notes. FitFreak Pro brings the core coaching-delivery process into one place for you and your clients.</p>
          </div>
        </div>
        <div class="container metrics-row">
          <div class="metric-card"><strong>$0</strong><span>coach registration</span></div>
          <div class="metric-card"><strong>$12.99</strong><span>monthly client access</span></div>
          <div class="metric-card"><strong>1</strong><span>app for coaching delivery</span></div>
        </div>
      </section>

      <section class="section" id="workflow">
        <div class="container section-header">
          <div>
            <div class="section-kicker">Coach workflow</div>
            <h2 class="section-title">One coach workflow from setup to review.</h2>
            <p class="section-copy">FitFreak Pro helps personal trainers organize their exercises, videos, client plans, nutrition targets, and progress information inside one focused coaching app.</p>
          </div>
        </div>
        <div class="container workflow-flow" aria-label="Coach workflow steps">
          <article class="workflow-card"><div class="feature-icon" aria-hidden="true">01</div><h3>Create your exercise library</h3><p>Organize exercises into sections, add your own videos, and keep coaching notes in one place.</p></article>
          <article class="workflow-card"><div class="feature-icon" aria-hidden="true">02</div><h3>Plan client work</h3><p>Create schedule blocks in the coach calendar so your time stays connected to the clients you manage.</p></article>
          <article class="workflow-card"><div class="feature-icon" aria-hidden="true">03</div><h3>Invite and assign</h3><p>Invite clients, create workout programs from your library, and assign plans to the right person.</p></article>
          <article class="workflow-card"><div class="feature-icon" aria-hidden="true">04</div><h3>Review progress</h3><p>Clients follow workouts and nutrition targets in the app, then submit information for coach review.</p></article>
        </div>
      </section>

      <section class="section feature-split" id="coach-calendar">
        <div class="container split-panel reverse">
          <figure class="feature-image"><img src="{{ asset('assets/img/app-screen-11.webp') }}" width="619" height="1100" alt="Coach calendar screen with schedule blocks in FitFreak Pro" loading="lazy" /></figure>
          <div>
            <div class="section-kicker">Coach schedule</div>
            <h2>Plan your work with clients.</h2>
            <p>FitFreak Pro includes a coach calendar so client scheduling can stay close to workouts, nutrition targets, and progress review.</p>
            <ul class="check-list">
              <li>Create schedule blocks for selected days.</li>
              <li>Manage coach time inside the same workspace.</li>
              <li>Keep planning connected to client assignments.</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section feature-split" id="coach-owned-content">
        <div class="container split-panel">
          <div>
            <div class="section-kicker">Coach Your Way</div>
            <h2>Keep your coaching style at the center.</h2>
            <p>Your clients hired you, not a generic workout library. Use your own exercise videos, explanations, coaching notes, and programming so the app supports the experience you already deliver.</p>
            <div class="pill-row"><span>Your own exercise library</span><span>Your own videos and demonstrations</span><span>Reusable exercise sections</span><span>Programming built around each client</span></div>
          </div>
          <img class="panel-image" src="{{ asset('assets/img/app-screen-2.webp') }}" width="619" height="1100" alt="FitFreak Pro exercise video library screen" loading="lazy" />
        </div>
      </section>

      <section class="section feature-split" id="client-experience">
        <div class="container split-panel reverse">
          <img class="panel-image" src="{{ asset('assets/img/app-screen-7.webp') }}" width="619" height="1100" alt="Client dashboard showing nutrition values and current workout" loading="lazy" />
          <div>
            <div class="section-kicker">For Your Clients</div>
            <h2>Give every client a clear plan to follow.</h2>
            <p>Clients can view coach-assigned workouts, exercise details, nutrition targets, and the progress information their coach expects them to submit.</p>
            <ul class="check-list">
              <li>Workouts, sets, reps, and videos stay organized.</li>
              <li>Nutrition targets stay easy to understand and track.</li>
              <li>Progress information is available for coach review.</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section pricing-section" id="pricing">
        <div class="container">
          <div class="section-kicker">Pricing</div>
          <div class="section-header">
            <div>
              <h2 class="section-title">Simple pricing built around the trainer-client relationship.</h2>
              <p class="section-copy">Trainers can start without a monthly platform subscription. Invited clients subscribe when they join the app experience their trainer provides.</p>
            </div>
          </div>
          <div class="pricing-grid">
            <article class="pricing-card featured">
              <p class="pricing-label">Coach account</p>
              <div class="price">$0 <small>per month</small></div>
              <p>Create your exercise library, invite clients, and manage active subscribed clients without paying a monthly coach platform fee.</p>
              <ul>
                <li>Build your exercise library</li>
                <li>Add your own videos</li>
                <li>Invite clients</li>
                <li>Assign workouts</li>
                <li>Set nutrition targets</li>
                <li>Review client-submitted progress</li>
                <li>No monthly coach platform fee</li>
              </ul>
            </article>
            <article class="pricing-card">
              <p class="pricing-label">Invited client access</p>
              <div class="price">$12.99 <small>per month</small></div>
              <p>Clients subscribe after receiving an invitation from their coach.</p>
              <ul>
                <li>Access assigned workouts</li>
                <li>View exercise instructions and videos</li>
                <li>Follow assigned nutrition targets</li>
                <li>Submit progress information</li>
                <li>Follow the plan created by their trainer</li>
              </ul>
            </article>
          </div>
          <div class="content-note">
            <h3>Why does the client subscribe?</h3>
            <p>The subscription gives the client access to the coaching experience their trainer delivers through FitFreak Pro, including assigned workouts, exercise guidance, nutrition targets, and progress tools.</p>
          </div>
        </div>
      </section>

      <section class="section founder-section" id="about">
        <div class="container split-panel compact">
          <div>
            <div class="section-kicker">Product walkthrough</div>
            <h2 class="section-title">Talk with the FitFreak Pro team.</h2>
            <p class="section-copy">See the coach and client workflow, ask questions, and decide whether FitFreak Pro fits the way you work.</p>
          </div>
          <div class="founder-card">
            <h3>Request a product walkthrough.</h3>
            <p>See how FitFreak Pro can organize the work you currently manage through spreadsheets, notes, video links, and messages.</p>
            <a class="btn btn-primary" href="mailto:support@fitfreakpro.com?subject=FitFreak%20Pro%20walkthrough" data-track="founder_walkthrough_click">Request a Product Walkthrough</a>
          </div>
        </div>
      </section>

      <section class="section faq-section" id="faq">
        <div class="container">
          <div class="section-kicker">FAQ</div>
          <h2 class="section-title">Questions personal trainers ask before getting started.</h2>
          <div class="faq-list">
            <x-ui.faq-item question="What is FitFreak Pro?">FitFreak Pro is personal trainer software for building an exercise library, using your own videos, assigning workouts, setting nutrition targets, and reviewing client progress.</x-ui.faq-item>
            <x-ui.faq-item question="Who is FitFreak Pro for?">It is built for independent personal trainers, online coaches, hybrid trainers, and small personalized coaching businesses.</x-ui.faq-item>
            <x-ui.faq-item question="Is FitFreak Pro free for trainers?">Yes. Trainers can register for free, build their exercise library, invite clients, and manage active subscribed clients without a monthly coach platform fee.</x-ui.faq-item>
            <x-ui.faq-item question="Why does the client pay a monthly subscription?">The subscription gives the client access to workouts, exercise videos, nutrition targets, and progress tools provided by their trainer through FitFreak Pro.</x-ui.faq-item>
            <x-ui.faq-item question="Can trainers use their own exercise videos?">Yes. Trainers can build their own exercise library and use their own videos, demonstrations, instructions, and coaching notes.</x-ui.faq-item>
            <x-ui.faq-item question="Can FitFreak Pro support online and in-person clients?">Yes. FitFreak Pro supports trainers who work online, in person, or through a hybrid coaching model.</x-ui.faq-item>
            <x-ui.faq-item question="How does a client join?">A client joins after receiving an invitation from their trainer. After subscription access is active, the trainer can manage that client from the dashboard.</x-ui.faq-item>
            <x-ui.faq-item question="Where can the application be downloaded?">FitFreak Pro is available on the Apple App Store and Google Play.</x-ui.faq-item>
            <x-ui.faq-item question="How can a trainer request a walkthrough?">Email <a class="email-link" href="mailto:support@fitfreakpro.com?subject=FitFreak%20Pro%20walkthrough" data-track="founder_walkthrough_click">support@fitfreakpro.com</a> with the subject FitFreak Pro walkthrough.</x-ui.faq-item>
            <x-ui.faq-item question="Is FitFreak Pro a healthcare or medical service?">No. FitFreak Pro is not a healthcare provider, medical service, emergency service, or substitute for professional medical advice.</x-ui.faq-item>
          </div>
        </div>
      </section>

      <section class="section final-cta">
        <div class="container cta-panel">
          <h2>Bring your coaching process into one organized app.</h2>
          <p>See how FitFreak Pro can organize the work you currently manage through spreadsheets, notes, video links, and messages.</p>
          <div class="cta-actions">
            <a class="btn btn-primary" href="#download" data-track="hero_app_download_cta">Download the Free Coach App</a>
            <a class="btn btn-secondary" href="mailto:support@fitfreakpro.com?subject=FitFreak%20Pro%20walkthrough" data-track="founder_walkthrough_click">Request a Product Walkthrough</a>
          </div>
        </div>
      </section>
    </main>
</x-layouts.public>
