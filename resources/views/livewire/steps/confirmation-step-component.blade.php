<div>
    <div class="my-6 border-b-2 border-b-graydark pb-4">
        <x-livewire::navigation :steps="$steps"/>
    </div>

    <form wire:submit="submit" class="mt-6">
        {{-- table name email address --}}
        <div>
            <table class="w-full">
                <tr>
                    <td class="w-1/2">Name</td>
                    <td class="w-1/2">{{ 'Martin' }}</td>
                </tr>
                <tr>
                    <td class="w-1/2">Email</td>
                    <td class="w-1/2">{{ 'm.halaj@websystem.sk' }}</td>
                </tr>
            </table>
        </div>
        <x-livewire::buttons>
            <x-slot:back>
                <x-secondary-button wire:click="previousStep">
                    Back
                </x-secondary-button>
            </x-slot:back>
        </x-livewire::buttons>
</form>
</div>
