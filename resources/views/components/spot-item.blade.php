@props([
    'title',
    'intro',
    'map',
    'desktop' => false
])
@if(!$desktop)
    <div class="flex items-center justify-between mb-3 pb-3 border-b-2 border-dashed">
        <div class="flex">
            <img src="{{ asset('images/icon-list.png') }}" class="object-contain w-[45px] mr-2"/>
            <div class="">
                <h3 class="text-base">{{ $title }}</h3>
                <p class="text-xl font-bold">{{ $intro }}</p>
            </div>
        </div>
        <a href="{{ $map }}" class="bg-red-500 text-white font-bold py-1 px-3 text-2xl js-show-map rounded">MAP</a>
    </div>
@else
    <div class="flex mb-3">
        <img src="{{ asset('images/icon-list.png') }}" class="object-contain w-[50px] mr-2"/>
        <div class="">
            <h3 class="text-sm">{{ $title }}</h3>
            <p class="text-xl font-bold">{{ $intro }}</p>
        </div>
    </div>
@endif
