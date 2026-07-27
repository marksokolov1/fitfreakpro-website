<?php

beforeEach(function (): void {
    $this->withoutVite();
});

test('public pages render their preserved titles and primary headings', function (
    string $route,
    string $title,
    string $heading
): void {
    $this->get(route($route))
        ->assertOk()
        ->assertSee("<title>{$title}</title>", escape: false)
        ->assertSee($heading)
        ->assertSee('FitFreak Pro home')
        ->assertSee('Primary navigation')
        ->assertSee('Footer navigation')
        ->assertDontSee('Struo');
})->with([
    'home' => [
        'home',
        'Personal Trainer Software Built Around Your Coaching | FitFreak Pro',
        'Your coaching. Your exercises.',
    ],
    'how it works' => [
        'how-it-works',
        'How FitFreak Pro Works for Personal Trainers | FitFreak Pro',
        'From your coaching method to one clear client experience.',
    ],
    'personal trainers' => [
        'for-personal-trainers',
        'Software for Personal Trainers | FitFreak Pro',
        'Organize client work without extra tools.',
    ],
    'pricing' => [
        'pricing',
        'FitFreak Pro Pricing for Trainers and Clients',
        'Simple pricing built around the trainer-client relationship.',
    ],
    'tutorial' => [
        'tutorial',
        'How to Use FitFreak Pro - Coach and Client Guide',
        'Start using FitFreak Pro in minutes.',
    ],
    'about' => [
        'about',
        'About FitFreak Pro | Personal Trainer Software',
        'Built to make independent coaching easier.',
    ],
    'support' => [
        'support',
        'FitFreak Pro Support | Coaches and Clients',
        'How can we help?',
    ],
    'privacy' => [
        'privacy',
        'Privacy Policy | FitFreak Pro',
        'Your privacy, built around coach-client management.',
    ],
    'terms' => [
        'terms',
        'Terms | FitFreak Pro',
        'Terms of Use',
    ],
]);

test('pricing is consistent across public content and structured metadata', function (): void {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('$12.99')
        ->assertSee('"price": "12.99"', escape: false)
        ->assertDontSee('$20');

    $this->get(route('pricing'))
        ->assertOk()
        ->assertSee('$12.99')
        ->assertSee('"price": "12.99"', escape: false)
        ->assertDontSee('$20');

    $this->get(route('support'))
        ->assertOk()
        ->assertSee('$12.99/month')
        ->assertDontSee('$20');

    $this->get(route('terms'))
        ->assertOk()
        ->assertSee('$12.99/month')
        ->assertDontSee('$20');
});

test('pricing presents the trainer and client offers as one connected sequence', function (): void {
    $this->get(route('pricing'))
        ->assertOk()
        ->assertSeeInOrder([
            'Trainer creates a free account',
            'Invites a client',
            'Client activates access',
            'Trainer account',
            'Client coaching experience',
        ])
        ->assertSee('Create your coaching system with no monthly trainer platform fee. Clients activate their FitFreak Pro experience after receiving an invitation from their trainer.')
        ->assertSee('Build and deliver your coaching through FitFreak Pro without a monthly trainer platform fee.')
        ->assertSee('Clients activate the personalized digital coaching experience their trainer delivers through FitFreak Pro.')
        ->assertSee('Why does the client subscribe separately?')
        ->assertSee('Start Free as a Trainer')
        ->assertSee('Book a Product Walkthrough')
        ->assertSee('<span>$0</span><small>per month</small>', escape: false)
        ->assertSee('<span>$12.99</span><small>per month</small>', escape: false)
        ->assertSee('https://apps.apple.com/us/app/fit-freak-pro/id6742347988', escape: false)
        ->assertSee('https://play.google.com/store/apps/details?id=com.duseca.fitfreak', escape: false);
});

test('tutorial links to both professional guides and preserved product media', function (): void {
    $this->get(route('tutorial'))
        ->assertOk()
        ->assertSee('Tutorial guide navigation')
        ->assertSee('data-tutorial-nav="coach-guide"', escape: false)
        ->assertSee('data-tutorial-nav="client-guide"', escape: false)
        ->assertSee('data-tutorial-progress="coach-guide"', escape: false)
        ->assertSee('data-tutorial-progress="client-guide"', escape: false)
        ->assertSeeInOrder(['Account', 'Exercise Library', 'Programs', 'Invite Clients', 'Progress'])
        ->assertSeeInOrder(['Account', 'Invitation Code', 'Subscription', 'Assigned Plan', 'Progress Tracking'])
        ->assertSeeInOrder(['Trainer Guide', 'Client Guide'])
        ->assertSeeInOrder([
            'Create your coach account',
            'Build your exercise library',
            'Create and assign client programs',
            'Invite your clients',
            'Set nutrition targets and review progress',
        ])
        ->assertSeeInOrder([
            'Create your client account',
            'Enter your coach invitation code',
            'Activate your FitFreak Pro subscription through Stripe',
            'Open your assigned plan',
            'Follow workouts, exercise instructions, nutrition targets, and submit progress',
        ])
        ->assertSee("I'm a Trainer", escape: false)
        ->assertSee("I'm a Client", escape: false)
        ->assertSee('Create programs, invite clients, review progress.')
        ->assertSee('Join your coach, follow workouts, track progress.')
        ->assertSee('Available on iPhone and Android')
        ->assertSee('Secure subscription activation through Stripe')
        ->assertSee('Coach-controlled programs and guidance')
        ->assertSee('Why this matters:')
        ->assertSee('Start Free as a Trainer')
        ->assertSee('Enter Invitation Code')
        ->assertSee('Need the complete walkthrough?')
        ->assertSee('Download the detailed trainer and client guide.')
        ->assertDontSee('Organize your calendar')
        ->assertSee(asset('downloads/fitfreak-pro-coach-guide-en.pdf'), escape: false)
        ->assertSee(asset('downloads/fitfreak-pro-client-guide-en.pdf'), escape: false)
        ->assertSee(asset('images/tutorial/client/03-stripe.png'), escape: false)
        ->assertSee('Stripe Checkout screen showing the $12.99 FitFreak Pro client subscription');

    expect(public_path('downloads/fitfreak-pro-coach-guide-en.pdf'))->toBeFile()
        ->and(public_path('downloads/fitfreak-pro-client-guide-en.pdf'))->toBeFile()
        ->and(public_path('images/tutorial/client/03-stripe.png'))->toBeFile();
});

test('store and support destinations remain unchanged', function (): void {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('https://apps.apple.com/us/app/fit-freak-pro/id6742347988', escape: false)
        ->assertSee('https://play.google.com/store/apps/details?id=com.duseca.fitfreak', escape: false)
        ->assertSee('support@fitfreakpro.com');
});

test('navigation renders the current page state on the server', function (
    string $route,
    string $label
): void {
    $this->get(route($route))
        ->assertOk()
        ->assertSee('aria-current="page"', escape: false)
        ->assertSee($label);
})->with([
    'how it works link' => ['how-it-works', 'How It Works'],
    'tutorial link' => ['tutorial', 'Tutorial'],
    'privacy link' => ['privacy', 'Privacy'],
]);

test('homepage section navigation is not highlighted before a section is selected', function (): void {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('data-section-nav="features"', escape: false)
        ->assertSee('data-section-nav="faq"', escape: false)
        ->assertDontSee('data-section-nav="features" aria-current', escape: false)
        ->assertDontSee('data-section-nav="faq" aria-current', escape: false);
});

test('how it works uses clean product screenshots for every workflow step', function (): void {
    $this->get(route('how-it-works'))
        ->assertOk()
        ->assertSee('Create your free coach profile')
        ->assertSee('Build your exercise library')
        ->assertSee('Invite a client')
        ->assertSee('Assign their program')
        ->assertSee('Review and adjust')
        ->assertSee('Add your experience, specialization, certifications, and coaching approach.')
        ->assertSee('Add your own exercises, demonstration videos, instructions, and coaching cues.')
        ->assertSee('Send an invitation so the client can create an account, activate access, and connect with your coaching.')
        ->assertSee('Choose a saved program or create a new one, then set exercises, repetitions, weight or time, and nutrition targets.')
        ->assertSee('Review workouts, nutrition, parameters, and submitted progress, then update the plan over time.')
        ->assertSee('See how FitFreak Pro fits the way you coach.')
        ->assertSee('Start Free as a Coach')
        ->assertSee('Book a Product Walkthrough')
        ->assertSee('images/tutorial/coach/01-create-coach-account.png', escape: false)
        ->assertSee('images/tutorial/coach/02-exercise-library.png', escape: false)
        ->assertSee('images/tutorial/coach/03-invite-client.png', escape: false)
        ->assertSee('images/tutorial/coach/04-create-program.png', escape: false)
        ->assertSee('images/tutorial/coach/09-nutrition-review.png', escape: false)
        ->assertDontSee('workflow-app-collage', escape: false)
        ->assertSee('Invited clients activate their FitFreak Pro experience for $12.99 per month through Stripe.');
});

test('faq controls render stable accessible relationships', function (): void {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('id="faq-what-is-fitfreak-pro-button"', escape: false)
        ->assertSee('aria-controls="faq-what-is-fitfreak-pro-answer"', escape: false)
        ->assertSee('aria-labelledby="faq-what-is-fitfreak-pro-button"', escape: false)
        ->assertSee('FitFreak Pro is personal trainer software for building an exercise library');

    $this->get(route('support'))
        ->assertOk()
        ->assertSee('id="faq-how-much-do-clients-pay-button"', escape: false)
        ->assertSee('aria-controls="faq-how-much-do-clients-pay-answer"', escape: false)
        ->assertSee('Clients pay $12.99/month after being invited by their coach.');
});

test('unknown public pages return not found', function (): void {
    $this->get('/not-a-real-page')->assertNotFound();
});
