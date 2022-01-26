@props(['href', 'class' => null])

<a class="justify-between py-2 px-4 my-6 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple {{ $class }}" href="{{ $href }}">
	{{ $slot }}
</a>