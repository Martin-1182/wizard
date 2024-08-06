<div class="flex items-center mt-4">
    @foreach($steps as $index => $step)
        @isset($step->info['icon'])
            <div @class(['flex h-13 w-12.5 items-center justify-center rounded-lg bg-primary opacity-40', 'opacity-95 shadow-2xl' => $step->isCurrent()])>
                <div class="flex items-center justify-center"
                     style="
                        width: 24px;
                        height: 24px;
                        background-image: url({{ asset('storage/16/solid/' . $step->info['icon'] . '.svg') }});
                        filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(360deg) brightness(200%) contrast(200%);
                        background-size: cover;">
                </div>
            </div>
            @if($index < count($steps) - 1)
                <div @class(['w-5 mx-1 border-t-2 border-dotted border-primary opacity-50', 'border-solid opacity-95 shadow-2xl' => $step->isCurrent()])></div>
            @endif
        @endisset
    @endforeach
</div>
