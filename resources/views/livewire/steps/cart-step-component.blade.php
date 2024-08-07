<div>
    <div class="my-6 border-b-2 border-b-graydark pb-4">
        <x-livewire::navigation :steps="$steps"/>
    </div>

    <form wire:submit="submit" class="mt-2">
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input
            id="name"
            class="w-full"
        />

        <x-input-label class="mt-4" for="email" :value="__('Email')"/>
        <x-text-input
            id="email"
            class="w-full"
        />
        <x-livewire::buttons>
            <x-primary-button>
                {{ __('Next step') }}
            </x-primary-button>
        </x-livewire::buttons>
    </form>
</div>

