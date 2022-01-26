<x-admin-layout>
	<div class="container mx-auto flex flex-row">
		<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200 flex-grow">{{ $collection->name }}</h2>
		<div clas="flex items-center flex-none">
	        <x-button href="{{ route('admin.collections.edit', $collection->id) }}">Edit</x-button>
		</div>
	</div>

	<div class="w-full overflow-hidden rounded-lg shadow-xs">
		<div class="w-full overflow-x-auto">
			<h3 class="my-4 text-lg font-semibold text-gray-700 dark:text-gray-200 flex-grow">Photos</h3>
			<table class="w-full whitespace-no-wrap">
				<thead>
					<tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
						<th class="px-4 py-3">Name</th>
						<th class="px-4 py-3">Dimensions</th>
						<th class="px-4 py-3">Actions</th>
					</tr>
				</thead>
				<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
					@forelse ($collection->photos as $photo)
						<tr class="text-gray-700 dark:text-gray-400">
							<td class="font-semibold px-4 py-3">
								<a href="{{ route('admin.photos.edit', $photo->id) }}" class="text-gray-800 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100 underline">{{ $photo->name }}</a>
							</td>
							<td class="px-4 py-3 text-sm">
								{{ $photo->width }} x {{ $photo->height }}
							</td>
							<td>
								<x-button href="{{ route('admin.photos.edit', $photo->id) }}" class="mx-1">Edit</x-button>
								<x-button href="{{ route('admin.photos.destroy', $photo->id) }}" class="mx-1">Delete</x-button>
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
			<form id="fileUpload" action="{{ route('admin.photos.store') }}" class="dropzone border-gray-700 dark:border-gray-400 text-gray-700 dark:text-gray-400 bg-white dark:bg-gray-800 my-2">
				@csrf
				<input type="hidden" name="collection_id" value="{{ $collection->id }}">
			</form>
		</div>
	</div>
</x-admin-layout>
