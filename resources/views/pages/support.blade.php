@php
$page = json_decode(<<<'PAGE'
{
  "title": "FitFreak Pro Support | Coaches and Clients",
  "description": "Get FitFreak Pro support for coach accounts, client access, subscriptions, workouts, nutrition targets, progress tracking, billing, and login issues.",
  "canonical": "https://fitfreakpro.com/support/",
  "ogTitle": "FitFreak Pro Support | Coaches and Clients",
  "ogDescription": "Find help for coach accounts, client invitations, subscriptions, workouts, nutrition targets, progress tracking, and login issues.",
  "ogImage": "https://fitfreakpro.com/assets/img/fitfreak-logo.png",
  "ogImageWidth": "640",
  "ogImageHeight": "640",
  "ogImageAlt": "FitFreak Pro logo",
  "twitterCard": "summary",
  "twitterTitle": "FitFreak Pro Support | Coaches and Clients",
  "twitterDescription": "Find help for coach accounts, client invitations, subscriptions, workouts, nutrition targets, progress tracking, and login issues.",
  "twitterImage": "https://fitfreakpro.com/assets/img/fitfreak-logo.png",
  "twitterImageAlt": "FitFreak Pro logo",
  "schema": "[\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"ContactPage\",\n      \"@id\": \"https://fitfreakpro.com/support/#webpage\",\n      \"url\": \"https://fitfreakpro.com/support/\",\n      \"name\": \"FitFreak Pro Support\",\n      \"description\": \"Get FitFreak Pro support for coach accounts, client access, subscriptions, workouts, nutrition targets, progress tracking, billing, and login issues.\",\n      \"isPartOf\": { \"@id\": \"https://fitfreakpro.com/#website\" },\n      \"about\": { \"@id\": \"https://fitfreakpro.com/#software\" },\n      \"inLanguage\": \"en\"\n    },\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"FAQPage\",\n      \"@id\": \"https://fitfreakpro.com/support/#faq\",\n      \"mainEntity\": [\n        {\n          \"@type\": \"Question\",\n          \"name\": \"Is FitFreak Pro for coaches or clients?\",\n          \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"FitFreak Pro is built for coaches. Coaches use the platform to manage clients, assign workouts, set nutrition targets, and review client progress. Clients access the app after being invited by their coach.\" }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"Is it free for coaches?\",\n          \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"Yes. Trainers can register for free and start building their exercise library and managing their coaching workflow.\" }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"How much do clients pay?\",\n          \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"Clients pay $12.99/month after being invited by their coach.\" }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"Can coaches use their own exercise videos?\",\n          \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"Yes. FitFreak Pro allows trainers to build their own exercise library and use their own videos.\" }\n        },\n        {\n          \"@type\": \"Question\",\n          \"name\": \"Is FitFreak Pro a medical or healthcare service?\",\n          \"acceptedAnswer\": { \"@type\": \"Answer\", \"text\": \"No. FitFreak Pro is a coaching management platform. It is not a medical provider, healthcare provider, emergency service, or substitute for professional medical advice.\" }\n        }\n      ]\n    },\n    {\n      \"@context\": \"https://schema.org\",\n      \"@type\": \"BreadcrumbList\",\n      \"itemListElement\": [\n        { \"@type\": \"ListItem\", \"position\": 1, \"name\": \"Home\", \"item\": \"https://fitfreakpro.com/\" },\n        { \"@type\": \"ListItem\", \"position\": 2, \"name\": \"Support\", \"item\": \"https://fitfreakpro.com/support/\" }\n      ]\n    }\n  ]"
}
PAGE, true, 512, JSON_THROW_ON_ERROR);
@endphp

<x-layouts.public :page="$page">
<main id="main">
      <section class="page-hero">
        <div class="container">
          <div class="eyebrow">Support</div>
          <h1>How can we help?</h1>
          <p>FitFreak Pro support for personal trainers and their invited clients.</p>
          <p>Get help with coach accounts, client access, subscriptions, workouts, nutrition targets, and progress tracking.</p>
        </div>
      </section>

      <section class="section" style="padding-top:0;">
        <div class="container contact-grid">
          <div class="contact-card">
            <h2>Contact Support</h2>
            <p>For account help, billing questions, technical issues, client access problems, or subscription support, contact the FitFreak Pro support team.</p>
            <p>Email: <a class="email-link" href="mailto:support@fitfreakpro.com" data-track="support_email_click">support@fitfreakpro.com</a></p>
            <div><a class="btn btn-primary" href="mailto:support@fitfreakpro.com" data-track="support_email_click">Email Support</a></div>
          </div>
          <div class="contact-card">
            <h2>Download the app</h2>
            <p>FitFreak Pro is available on the Apple App Store and Google Play Store.</p>
            <div class="store-row">
              <a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Download FitFreak Pro on the App Store"><span>Download on the<strong>App Store</strong></span></a>
              <a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Get FitFreak Pro on Google Play"><span>Get it on<strong>Google Play</strong></span></a>
            </div>
          </div>
        </div>
      </section>

      <section class="section support-categories">
        <div class="container">
          <div class="section-header">
            <div>
              <div class="section-kicker">Support categories</div>
              <h2 class="section-title">Find help for the part of the workflow you are using.</h2>
            </div>
          </div>
          <div class="support-grid">
            <article class="support-card"><div class="feature-icon">👤</div><h3>Coach Account Setup</h3><p>Need help creating your coach account or getting started with FitFreak Pro? Contact support and we can help you understand how to begin setting up your coaching workflow.</p></article>
            <article class="support-card"><div class="feature-icon">✉</div><h3>Inviting Clients</h3><p>Coaches can invite clients to join FitFreak Pro. Once a client is invited and payment is complete, the coach can see and manage that client from the dashboard.</p></article>
            <article class="support-card"><div class="feature-icon">$</div><h3>Client Subscriptions</h3><p>Clients pay $12.99/month for access after being invited by their coach. For subscription questions, billing issues, or payment problems, contact support.</p></article>
            <article class="support-card"><div class="feature-icon">▤</div><h3>Exercise Library</h3><p>FitFreak Pro allows coaches to build their own exercise library. Coaches can organize exercises and use their own coaching content to deliver a more personalized client experience.</p></article>
            <article class="support-card"><div class="feature-icon">✓</div><h3>Workout Plans</h3><p>Coaches can assign workout plans to clients so each client has one clear place to follow their training.</p></article>
            <article class="support-card"><div class="feature-icon">◎</div><h3>Nutrition Targets</h3><p>Coaches can set nutrition targets for clients. Clients can view assigned nutrition values and submit information for coach review.</p></article>
            <article class="support-card"><div class="feature-icon">↗</div><h3>Progress Tracking</h3><p>Clients can submit progress information through FitFreak Pro. Coaches can review submitted information from the dashboard to stay informed and organized.</p></article>
            <article class="support-card"><div class="feature-icon">🔐</div><h3>App Login Issues</h3><p>If you are having trouble logging into the FitFreak Pro app, check that you are using the correct email address and account type. If the issue continues, contact support.</p></article>
            <article class="support-card"><div class="feature-icon">?</div><h3>Billing Questions</h3><p>For billing, subscription, or payment-related questions, email support@fitfreakpro.com.</p></article>
            <article class="support-card"><div class="feature-icon">⚙</div><h3>Technical Support</h3><p>If something is not working correctly, contact support with a description of the issue, your device type, and any screenshots that may help us understand the problem.</p></article>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="section-header">
            <div>
              <div class="section-kicker">FAQ</div>
              <h2 class="section-title">Frequently asked questions</h2>
            </div>
          </div>
          <div class="faq-list">
            <x-ui.faq-item question="Is FitFreak Pro for coaches or clients?">FitFreak Pro is built for coaches. Coaches use the platform to manage clients, assign workouts, set nutrition targets, and review client progress. Clients access the app after being invited by their coach.</x-ui.faq-item>
            <x-ui.faq-item question="Is it free for coaches?">Yes. Trainers can register for free and start building their exercise library and managing their coaching workflow.</x-ui.faq-item>
            <x-ui.faq-item question="How much do clients pay?">Clients pay $12.99/month after being invited by their coach.</x-ui.faq-item>
            <x-ui.faq-item question="Can coaches use their own exercise videos?">Yes. FitFreak Pro allows trainers to build their own exercise library and use their own videos.</x-ui.faq-item>
            <x-ui.faq-item question="Can coaches create their own exercise library?">Yes. FitFreak Pro is designed so coaches can build and manage their own exercise library instead of relying only on generic templates.</x-ui.faq-item>
            <x-ui.faq-item question="What can clients do in the app?">Clients can access coach-assigned workouts, view exercise instructions, follow nutrition targets, and submit progress information for their coach to review.</x-ui.faq-item>
            <x-ui.faq-item question="Where can I download the app?">FitFreak Pro is available on the Apple App Store and Google Play Store.
                <div class="app-download-inline">
                  <a class="store-badge" href="https://apps.apple.com/us/app/fit-freak-pro/id6742347988" target="_blank" rel="noopener noreferrer" data-track="app_store_click" aria-label="Download FitFreak Pro on the App Store"><span>Download on the<strong>App Store</strong></span></a>
                  <a class="store-badge" href="https://play.google.com/store/apps/details?id=com.duseca.fitfreak" target="_blank" rel="noopener noreferrer" data-track="google_play_click" aria-label="Get FitFreak Pro on Google Play"><span>Get it on<strong>Google Play</strong></span></a>
                </div>
            </x-ui.faq-item>
            <x-ui.faq-item question="Who should I contact for billing or login help?">Contact support at <a class="email-link" href="mailto:support@fitfreakpro.com" data-track="support_email_click">support@fitfreakpro.com</a>.</x-ui.faq-item>
            <x-ui.faq-item question="Is FitFreak Pro a medical or healthcare service?">No. FitFreak Pro is a coaching management platform. It is not a medical provider, healthcare provider, emergency service, or substitute for professional medical advice.</x-ui.faq-item>
            <x-ui.faq-item question="What should I include when contacting support?">Please include your name, the email address connected to your FitFreak Pro account, whether you are a coach or client, a clear description of the issue, screenshots if helpful, and your device type, such as iPhone, Android, tablet, or desktop.</x-ui.faq-item>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="cta-panel">
            <h2>Need more help?</h2>
            <p>Send us a message and our support team will help you with your FitFreak Pro account.</p>
            <div class="cta-actions"><a class="btn btn-primary" href="mailto:support@fitfreakpro.com" data-track="support_email_click">Contact Support</a></div>
          </div>
        </div>
      </section>
    </main>
</x-layouts.public>
