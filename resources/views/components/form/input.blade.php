@props(['name', 'label' => null, 'value' => null, 'required' => false])

<x-form.field>
    <x-form.label name="{!! ($label ?? $name) !!}" />
    <input 
        id="{{ $name }}" 
        name="{{ $name }}" 
        value="{{ $value ?? old($name) }}" 
        @if ($required)
            required
        @endif
        class="w-full border border-gray-300 rounded-sm p-2"
        >
    <x-form.error name="{{ $name }}" />
</x-form.field>