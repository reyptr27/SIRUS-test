<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <x-button target="_blank" href="https://github.com/reyptr27/SIRUS" variant="black"
                class="items-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Watch the code here!</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 flex flex-col gap-6 overflow-hidden bg-white rounded-md shadow-md lg:flex-row md:justify-between dark:bg-dark-eval-1">
        <div>You're logged in!</div>

        <div>
            <a href="https://jetstream.laravel.com/2.x/introduction.html" class="text-blue-600 hover:underline" target="_blank">
                Jetstream Documentation
            </a>
        </div>
    </div>
</x-app-layout>
