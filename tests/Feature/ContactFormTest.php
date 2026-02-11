<?php

use App\Livewire\Components\ContactForm;
use Livewire\Livewire;

it('renders contact form component', function () {
    Livewire::test(ContactForm::class)
        ->assertStatus(200);
});

it('validates required fields', function () {
    Livewire::test(ContactForm::class)
        ->call('submit')
        ->assertHasErrors(['name', 'email', 'company', 'industry', 'goal']);
});

it('validates email format', function () {
    Livewire::test(ContactForm::class)
        ->set('email', 'not-an-email')
        ->call('submit')
        ->assertHasErrors(['email']);
});

it('submits form successfully with valid data', function () {
    Livewire::test(ContactForm::class)
        ->set('name', 'John Doe')
        ->set('email', 'john@example.com')
        ->set('company', 'Acme Inc')
        ->set('industry', 'Technology')
        ->set('goal', 'Scale operations')
        ->set('context', 'Looking for AI solutions')
        ->call('submit')
        ->assertHasNoErrors()
        ->assertSet('submitted', true)
        ->assertSee('Message Received');
});

it('renders the contact page with component', function () {
    $response = $this->get('/contact');
    $response->assertStatus(200);
    $response->assertSeeLivewire('components.contact-form');
});
