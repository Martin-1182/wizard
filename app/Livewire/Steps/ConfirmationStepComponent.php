<?php

namespace App\Livewire\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class ConfirmationStepComponent extends StepComponent
{
    public function render(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.steps.confirmation-step-component');
    }

    public function stepName(): string
    {
        return 'Confirmation';
    }

    public function submit(): void
    {
        $this->nextStep();
    }
}
