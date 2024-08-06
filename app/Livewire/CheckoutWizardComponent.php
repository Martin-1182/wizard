<?php

namespace App\Livewire;

use App\Livewire\Steps\CartStepComponent;
use App\Livewire\Steps\ConfirmationStepComponent;
use App\Livewire\Steps\DeliveryAddressStepComponent;
use Spatie\LivewireWizard\Components\WizardComponent;

class CheckoutWizardComponent extends WizardComponent
{
    public function steps(): array
    {
        return [
            CartStepComponent::class,
            DeliveryAddressStepComponent::class,
            ConfirmationStepComponent::class,
        ];
    }
}
