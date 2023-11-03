<x-app-layout>

    @section('title', __('Management Permission'))

    <x-slot name="header">
        <div class="flex flex-col gap-4 items-center sm:items-start">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('List Data Permissions') }}
            </h2>
        </div>

        <div class="p-2 flex flex-col gap-4 items-center sm:items-end " >
            @can('permission-create')
            <x-button target="_blank" href="https://github.com/reyptr27/SIRUS" variant="success"
                class="items-center max-w-xs gap-2">
                <x-heroicon-o-plus class="w-6 h-6" aria-hidden="true" />
                <span>Add new</span>
            </x-button>
            @endcan
        </div>

    </x-slot>

    <div class="p-6 gap-6 overflow-hidden bg-white rounded-md shadow-md lg:flex-row md:justify-between dark:bg-dark-eval-1">
        <livewire:permission-table/>
    </div>
</x-app-layout>