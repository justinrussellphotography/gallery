@props(['name' => 'submit', 'label' => null, 'role' => 'primary'])

<button name="{{ $name }}" value="{{ $label ?? '' }}" class="@if ($role == 'secondary') text-gray-600 hover:text-gray-700 bg-gray-200 hover:bg-gray-300 @else text-white hover:text-gray-100 bg-blue-600 hover:bg-blue-800 @endif m-2 px-4 py-2 rounded-md">{{ $label ?? ucfirst($name) }}</button>