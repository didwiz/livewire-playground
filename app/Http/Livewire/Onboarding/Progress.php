<?php

namespace App\Http\Livewire\Onboarding;

use Livewire\Component;

class Progress extends Component
{
    public $step = 1;
    public function mount()
    {
    }
    public function render()
    {
        return view('livewire.onboarding.progress');
    }
}
