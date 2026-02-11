<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $company;
    public $industry;
    public $goal;
    public $context;

    public $submitted = false;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'company' => 'required|min:2',
        'industry' => 'required',
        'goal' => 'required',
        'context' => 'nullable|string',
    ];

    public function submit()
    {
        $this->validate();

        // Simulate sending email or processing
        // Mail::to('admin@seractive.com')->send(new ContactFormSubmitted($this->all()));

        $this->submitted = true;
        
        // precise reset of fields
        $this->reset(['name', 'email', 'company', 'industry', 'goal', 'context']);
    }

    public function render()
    {
        return view('livewire.components.contact-form');
    }
}
