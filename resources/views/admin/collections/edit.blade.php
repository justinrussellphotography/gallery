<x-admin-layout>
	<div class="container mx-auto flex flex-row">
		<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200 flex-grow">Edit {{ $collection->name }}</h2>
	</div>

	<div class="bg-white w-full overflow-hidden rounded-lg shadow-sm p-4">
		<form method="POST" action="{{ route('admin.collections.store') }}">
			@method('PATCH')
			@csrf
			<x-form.input name="name" />
			<x-form.input name="slug" />
			<x-form.input name="date" />
			<x-form.button />
		</form>
	</div>
</x-admin-layout>
