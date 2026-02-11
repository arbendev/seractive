<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AiAuditCard extends Component
{
    public $email;
    public $company;
    public $submitted = false;

    protected $rules = [
        'email' => 'required|email',
        'company' => 'nullable|string',
    ];

    public function submit()
    {
        $this->validate();

        // Simulate processing
        // Mail::to('admin@seractive.com')->send(new AuditRequested($this->email, $this->company));

        $this->submitted = true;
        $this->reset(['email', 'company']);
    }

    public function render()
    {
        return view('livewire.components.ai-audit-card');
    }
}
