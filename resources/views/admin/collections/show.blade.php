<x-admin-layout>
	<div class="container mx-auto flex flex-row">
		<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200 flex-grow">{{ $collection->name }}</h2>
        <a class="flex items-center justify-between py-2 px-4 my-6 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple flex-none" href="{{ route('admin.collections.edit', $collection->id) }}">Edit</a>
	</div>

	<div class="w-full overflow-hidden rounded-lg shadow-xs">
		<div class="w-full overflow-x-auto">
			<h3 class="my-4 text-lg font-semibold text-gray-700 dark:text-gray-200 flex-grow">Photos</h3>
			<table class="w-full whitespace-no-wrap">
				<thead>
					<tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
						<th class="px-4 py-3">Name</th>
						<th class="px-4 py-3">Dimensions</th>
					</tr>
				</thead>
				<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
					@forelse ($collection->photos as $photo)
						<tr class="text-gray-700 dark:text-gray-400">
							<td class="px-4 py-3">
								<p class="font-semibold"><a href="{{ route('admin.collections.show', $collection->id) }}" class="text-gray-800 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100 underline">{{ $collection->name }}</a></p>
								<p class="text-xs text-gray-600 dark:text-gray-400">{{ $collection->date->format('F j, Y') }}</p>
							</td>
							<td class="px-4 py-3 text-sm">
								{{ $collection->photos->count() }}
							</td>
							<td>
								<a href="{{ route('admin.collections.edit', $collection->id) }}">Edit</a>
								<a href="{{ route('admin.collections.destroy', $collection->id) }}">Delete</a>
							</td>
						</tr>
					@empty
						<tr class="text-gray-700 dark:text-gray-400">
							<td colspan="3" class="px-4 py-3">
								No photos in this collection yet.
							</td>
						</tr>
					@endforelse
				</tbody>
			</table>
			<form id="fileUpload" action="{{ route('admin.photos.create') }}?collection_id={{ $collection->id }}" class="dropzone border-gray-700 dark:border-gray-400 text-gray-700 dark:text-gray-400 bg-white dark:bg-gray-800 my-2"></form>
		</div>
	</div>
</x-admin-layout>
