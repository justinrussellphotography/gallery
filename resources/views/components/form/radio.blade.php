@props(['name', 'options', 'label' => null, 'value' => null])

<x-form.field>
    <x-form.label name="{!! $label ?? $name !!}" />
    
    @foreach ($options->pluck('label', 'value')->all() as $optionValue => $option)
        <div class="flex flex-row p-1">
            <div class="flex-none mr-2">
                <input 
                    type="radio" 
                    id="{{ $name }}_{{ $loop->iteration }}"
                    name="{{ $name }}"
                    value="{{ $optionValue }}"
                    @if (($value ?? old($name)) == $optionValue)
                        checked="checked"
                    @endif
                    class="p-3 md:p-1 lg:p-0"
                   >
            </div>
            <label for="{{ $name }}_{{ $loop->iteration }}">
                {{ $option }}
            </label>
        </div>
    @endforeach
    
    <x-form.error name="{{ $name }}" />
</x-form.field>