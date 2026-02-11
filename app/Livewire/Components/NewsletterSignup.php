<?php

namespace App\Livewire\Components;

use Livewire\Component;

class NewsletterSignup extends Component
{
    public $email = '';

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        // Here you would typically add the newsletter subscription logic
        // For now, we'll just simulate a successful subscription

        session()->flash('message', 'Thank you for subscribing!');

        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.components.newsletter-signup');
    }
}
