<?php

namespace App\Livewire\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class CartStepComponent extends StepComponent
{
    public function render(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.steps.cart-step-component');
    }

    public function stepInfo(): array
    {
        return [
            'icon' => 'check-circle',
        ];
    }

    public function submit(): void
    {
        $this->nextStep();
    }

}
