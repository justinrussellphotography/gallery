@props(['name'])

<label for="{{ $name }}" class="font-bold text-gray-700 block pb-1">
    {!! ucfirst($name) !!}
</label>