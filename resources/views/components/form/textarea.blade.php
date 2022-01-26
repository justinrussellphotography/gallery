@props(['name', 'label' => null, 'value' => null, 'required' => false])

<x-form.field>
    <x-form.label name="{{ $label ?? $name }}" />
    <textarea
        id="{{ $name }}" 
        name="{{ $name }}"
        @if ($required)
            required
        @endif
        class="w-full border border-gray-300 rounded-sm p-2"
        >{{ $value ?? old($name) }}</textarea>
    <x-form.error name="{{ $name }}" />
</x-form.field>