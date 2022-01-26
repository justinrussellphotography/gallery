@props(['name', 'options', 'label' => null, 'value' => null])

<x-form.field>
    <div class="flex flex-row p-1">
        <div class="flex-none mr-2">
            <input type="hidden" name="{{ $name }}" value="0">
            <input 
                type="checkbox" 
                id="{{ $name }}"
                name="{{ $name }}"
                value="1"
                @if ($value ?? old($name))
                    checked="checked"
                @endif
                class="rounded-sm p-3 md:p-1 lg:p-0"
               >
        </div>
        <div>
            <label for="{{ $name }}">{{ $label }}</label>
        </div>
    </div>
    
    <x-form.error name="{{ $name }}" />
</x-form.field>