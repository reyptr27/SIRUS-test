<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SIRUS') }} | @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>

    <body class="font-sans antialiased text-gray-900 dark:text-gray-200">
        <div x-data="mainState" :class="{dark: isDarkMode}" x-cloak>
            <div class="flex flex-col min-h-screen text-gray-900 bg-gray-100 dark:bg-dark-eval-0 dark:text-gray-200">
                {{ $slot }}
                <x-footer />
            </div>

            <div class="fixed top-3 right-3 sm:top-10 sm:right-10">
                <x-button type="button" iconOnly variant="secondary" srText="Toggle dark mode" @click="toggleTheme">
                    <x-heroicon-o-moon x-show="!isDarkMode" aria-hidden="true" class="w-6 h-6" />
                    <x-heroicon-o-sun x-show="isDarkMode" aria-hidden="true" class="w-6 h-6" />
                </x-button>
            </div>
        </div>

        @livewireScripts

        <!-- Extra JS -->
        <script>
            let docTitle = document.title;
            window.addEventListener("blur", () => {
                document.title = "{{ __("Please Comeback! 😭") }}";
            });

            window.addEventListener("focus", () => {
                document.title = docTitle;
            });
        </script>
    </body>
</html>
