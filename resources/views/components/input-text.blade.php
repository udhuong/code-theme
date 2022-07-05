@props([
  'label',
  'name'
])
<label class="block mb-3">
    <span class="text-gray-700 font-bold text-lg flex items-center"><img src="{{ asset('images/arrow-down.png') }}" class="mr-1"/>{{ $label }}</span>
    <input type="text" name="{{ $name }}" class="mt-1 block w-full" placeholder="">
</label>
