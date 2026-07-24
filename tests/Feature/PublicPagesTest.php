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
        'From coach registration to a clear client plan.',
    ],
    'personal trainers' => [
        'for-personal-trainers',
        'Software for Personal Trainers | FitFreak Pro',
        'Organize client work without extra tools.',
    ],
    'pricing' => [
        'pricing',
        'FitFreak Pro Pricing for Coaches and Clients',
        'Simple pricing built around the trainer-client relationship.',
    ],
    'tutorial' => [
        'tutorial',
        'How to Use FitFreak Pro - Coach and Client Guide',
        'How to Use FitFreak Pro',
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

test('tutorial links to both professional guides and preserved product media', function (): void {
    $this->get(route('tutorial'))
        ->assertOk()
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

test('unknown public pages return not found', function (): void {
    $this->get('/not-a-real-page')->assertNotFound();
});
