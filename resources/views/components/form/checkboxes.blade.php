@props(['name', 'options', 'label' => null, 'values' => null])

<x-form.field>
    <x-form.label name="{!! $label ?? $name !!}" />
    <x-form.note>Check all that apply.</x-form.note>
    
    @foreach ($options->pluck('label', 'value')->all() as $optionValue => $option)
        <div class="flex flex-row p-1">
            <div class="flex-none mr-2">
                <input 
                    type="checkbox" 
                    id="{{ $name }}_{{ $loop->iteration }}"
                    name="{{ $name }}[]"
                    value="{{ $optionValue }}"
                    @if (is_array($values) && in_array($optionValue, $values))
                        checked="checked"
                    @endif
                    class="rounded-sm p-3 md:p-1 lg:p-0"
                   >
            </div>
            <label for="{{ $name }}_{{ $loop->iteration }}">
                {{ $option }}
            </label>
        </div>
    @endforeach
    
    <x-form.error name="{{ $name }}" />
</x-form.field>