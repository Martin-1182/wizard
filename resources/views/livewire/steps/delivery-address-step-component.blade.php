<form wire:submit="submit" class="mt-6">
    <h5 class="text-lg font-medium text-gray-900">{{'Do your work, then step back.'}}</h5>
    <x-livewire::buttons>
        <x-slot:back>
            <button type="button" wire:click="previousStep"
                    class="inline-flex items-center justify-center rounded-md bg-graydark py-2 px-4 text-center font-medium text-white hover:bg-opacity-90 lg:px-2 xl:px-4">
                {{ __('Back') }}
            </button>
        </x-slot:back>
        <button
            class="inline-flex items-center justify-center rounded-md bg-black py-2 px-4 text-center font-medium text-white hover:bg-opacity-90 lg:px-2 xl:px-4">
            {{ __('Next step') }}
        </button>
    </x-livewire::buttons>
</form>
