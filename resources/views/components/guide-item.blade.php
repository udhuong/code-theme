@props([
    'img',
    'title',
    'content',
    'desktop' => false
])
<div class="mb-5">
    @if(!$desktop)
        <div class="flex mb-2">
            <img src="{{ asset($img) }}" class="object-contain w-[80px] mr-1 flex-shrink-0" />
            <h3 class="font-semibold text-xl">{!! $title !!}</h3>
        </div>
        <p class="text-sm">{!! $content !!}</p>
    @else
        <div class="flex gap-2 mb-2">
            <img src="{{ asset($img) }}" class="object-contain w-[80px] mr-1 flex-shrink-0" />
            <div>
                <h3 class="font-bold text-2xl">{!! $title !!}</h3>
                <p class="text-sm">{!! $content !!}</p>
            </div>
        </div>
    @endif
</div>
