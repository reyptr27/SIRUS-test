<x-app-layout>

    @section('title', __('Create API Token'))

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('API Tokens') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('api.api-token-manager')
        </div>
    </div>

</x-app-layout>
