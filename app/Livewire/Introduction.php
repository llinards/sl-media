<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class Introduction extends Component
{
    public bool $isVisible = true;

    public function toggleVisibility(): void
    {
        $this->isVisible = ! $this->isVisible;
        $this->dispatch('show-form');
    }

    public function render(): View
    {
        return view('livewire.introduction');
    }
}
