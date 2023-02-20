<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">-->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
				@if(session('alert'))
				<div x-data="{alertBox:true}" x-show="alertBox" x-init="setTimeout(function(){alertBox = false}, 3000)" class="fixed left-auto right-5 top-5 z-50 border border-3 bg-gray-100 text-white rounded-lg">
					<span class="p-3 flex items-center h-10 w-full rounded bg-green-600 shadow-lg shadow-green-500/70">
						{{session('alert.message')}}
					</span>
				</div>
				@endif
				
                {{ $slot }}
            </main>
        </div>
		<!-- Page footer -->
		@if (isset($footer))
			<footer class="bg-white shadow">
				<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
					{{ $footer }}
				</div>
			</footer>
		@endif


        @stack('modals')

        @livewireScripts
    </body>
</html>
