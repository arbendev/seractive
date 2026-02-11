<?php

namespace App\Livewire\Components;

use Livewire\Component;

class CallToAction extends Component
{
    public $title;
    public $text;
    public $buttonText;
    public $buttonUrl;

    public function mount($title = 'Ready to outrun the competition?', $text = 'Join the forward-thinking companies transforming their operations with Seractive\'s AI solutions.', $buttonText = "Let's talk", $buttonUrl = '/contact')
    {
        $this->title = $title;
        $this->text = $text;
        $this->buttonText = $buttonText;
        $this->buttonUrl = $buttonUrl;
    }

    public function render()
    {
        return view('livewire.components.call-to-action');
    }
}
