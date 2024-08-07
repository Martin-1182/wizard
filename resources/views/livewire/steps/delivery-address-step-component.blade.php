<div>
    <div class="my-6 border-b-2 border-b-graydark pb-4">
        <x-livewire::navigation :steps="$steps"/>
    </div>

    <form wire:submit="submit" class="mt-6">
        <x-input-label for="address" :value="__('Address')"/>
        <x-text-input
            id="address"
            class="w-full"
        />

        <x-input-label class="mt-4" for="city" :value="__('City')"/>
        <x-text-input
            id="city"
            class="w-full"
        />

        <x-input-label class="mt-4" for="zip" :value="__('Zip')"/>
        <x-text-input
            id="zip"
            class="w-full"
        />

        <x-input-label class="mt-4" for="country" :value="__('Country')"/>
        <x-text-input
            id="country"
            class="w-full"
        />

        <x-livewire::buttons>
            <x-slot:back>
                <x-secondary-button wire:click="previousStep">
                    Back
                </x-secondary-button>
            </x-slot:back>
            <x-primary-button>
                {{ __('Next step') }}
            </x-primary-button>
        </x-livewire::buttons>
    </form>
</div>
