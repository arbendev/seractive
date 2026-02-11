<?php

use App\Livewire\Components\Hero;
use App\Livewire\Components\Services;
use App\Livewire\Components\CoreCapabilities;
use App\Livewire\Components\TrustedPartners;
use App\Livewire\Components\CaseStudy;
use App\Livewire\Components\CallToAction;
use Livewire\Livewire;

it('renders hero component', function () {
    Livewire::test(Hero::class)
        ->assertStatus(200);
});

it('renders services component', function () {
    Livewire::test(Services::class)
        ->assertStatus(200);
});

it('renders core capabilities component', function () {
    Livewire::test(CoreCapabilities::class)
        ->assertStatus(200);
});

it('renders trusted partners component', function () {
    Livewire::test(TrustedPartners::class)
        ->assertStatus(200);
});

it('renders case study component', function () {
    Livewire::test(CaseStudy::class)
        ->assertStatus(200);
});

it('renders call to action component', function () {
    Livewire::test(CallToAction::class)
        ->assertStatus(200);
});

it('renders the home page with all components', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSeeLivewire('components.hero');
    $response->assertSeeLivewire('components.services');
    $response->assertSeeLivewire('components.core-capabilities');
    $response->assertSeeLivewire('components.trusted-partners');
    $response->assertSeeLivewire('components.case-study');
    $response->assertSeeLivewire('components.call-to-action');
});
