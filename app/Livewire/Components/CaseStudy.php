<?php

namespace App\Livewire\Components;

use Livewire\Component;

class CaseStudy extends Component
{
    public $caseStudies;

    public function mount()
    {
        $this->caseStudies = \App\Models\CaseStudy::whereNotNull('published_at')
            ->latest('published_at')
            ->take(5)
            ->get();
    }

    public function render()
    {
        return view('livewire.components.case-study');
    }
}
