<?php

use App\Livewire\Components\AiAuditCard;
use Livewire\Livewire;

it('renders ai audit card component', function () {
    Livewire::test(AiAuditCard::class)
        ->assertStatus(200);
});

it('validates email field', function () {
    Livewire::test(AiAuditCard::class)
        ->call('submit')
        ->assertHasErrors(['email']);
});

it('submits form successfully with valid data', function () {
    Livewire::test(AiAuditCard::class)
        ->set('email', 'audit@example.com')
        ->set('company', 'Audit Corp')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('submitted', true)
        ->assertSee('Request Received');
});

it('renders the component on service pages', function () {
    $pages = [
        '/services/autonomic-marketing',
        '/services/growth-concierge',
        '/services/insight-360',
        '/services/nexus-ai-crm',
        '/services/workforce-efficiency',
    ];

    foreach ($pages as $page) {
        $this->get($page)
            ->assertStatus(200)
            ->assertSeeLivewire('components.ai-audit-card');
    }
});
