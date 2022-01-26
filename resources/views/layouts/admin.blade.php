<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="adminData" lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Dashboard</title>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
		<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
		<script src="{{ asset('js/admin.js') }}"></script>
	</head>
	<body>
		<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
			<!-- Desktop sidebar -->
			<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
				<div class="py-4 text-gray-500 dark:text-gray-400">
					<a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">Gallery Admin</a>
					<ul class="mt-6">
						<li class="relative px-6 py-3">
							<span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg" aria-hidden="true" ></span>
							<a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="/admin/collections">Collections</a>
						</li>
						{{--
						<li class="relative px-6 py-3">
							<a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="#">Forms</a>
						</li>
						--}}
					</ul>
				</div>
			</aside>
			<div class="flex flex-col flex-1 w-full">
				<main class="h-full overflow-y-auto px-4">
					{{ $slot }}
				</main>
			</div>
		</div>
	</body>
</html>