<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
        	<header id="siteHeader">
				<div id="logo">
					<a href="/">
						<h1 class="first"><strong>Justin Russell</strong></h1>
						<img src="https://www.justinrussellphotography.com/wp-content/themes/jrphotography/images/jr.png" data-pin-nopin alt="JR" />
						<h1>Photography</h1>
					</a>
				</div>
				<div id="menuToggle"><i class="fa fa-bars"></i></div>
				<nav>
					<ul>
						<li><a href="/about">About Justin</a></li><li><a href="/unfiltered">Unfiltered</a></li><li><a href="/projects/sand-and-stone">Sand & Stone</a></li><li><a href="/projects/my-look">My Look</a></li><li><a href="/contact">Contact</a></li>
						<?php /* <li><a href="/about">About Justin</a></li><li><a href="/photography-services">Services</a></li><li><a href="/projects">Projects</a></li><li><a href="/contact">Contact</a></li><li><a href="http://photos.justinrussellphotography.com">Buy Prints</a></li><li><a href="http://www.justinrussellphotography.com/business-product-photography">Biz</a></li> */ ?>
					</ul>
				</nav>
			</header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
