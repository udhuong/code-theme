@props([
    'title',
    'intro',
    'desktop' => false
])
<div class="flex mb-3">
    @if(!$desktop)
        <img src="{{ asset('images/icon-list.png') }}" class="object-contain w-[50px] mr-2" />
        <div class="">
            <h3 class="text-xl">{{ $title }}</h3>
            <p class="text-2xl font-bold">{{ $intro }}</p>
        </div>
    @else
        <img src="{{ asset('images/icon-list.png') }}" class="object-contain w-[50px] mr-2" />
        <div class="">
            <h3 class="text-sm">{{ $title }}</h3>
            <p class="text-xl font-bold">{{ $intro }}</p>
        </div>
    @endif
</div>
