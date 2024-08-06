@props(['back' => null])
<div class="flex items-center justify-between pt-4 border-t mt-16 border-graydark">
    <div>
        {{ $back }}
    </div>

    <div>
        {{ $slot }}
    </div>
</div>
