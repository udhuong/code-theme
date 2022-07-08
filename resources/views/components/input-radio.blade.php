@props([
  'label',
  'name',
  'items'
])
<div class="mt-5 mb-5">
    <div class="text-gray-700 font-bold text-lg leading-relaxed flex items-center mb-2">{{ $label }}</div>
    @foreach($items as $item)
        <label class="block mb-2"><input type="radio" name="{{ $name }}" value="{{ $item }}" class="mr-2">{{ $item }}</label>
    @endforeach
</div>
