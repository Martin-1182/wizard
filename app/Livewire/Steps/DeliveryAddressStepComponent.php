<?php

namespace App\Livewire\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class DeliveryAddressStepComponent extends StepComponent
{
    public function render(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.steps.delivery-address-step-component');
    }

    public function stepName(): string
    {
        return 'Delivery Address';
    }

    public function submit(): void
    {
        $this->nextStep();
    }
}
