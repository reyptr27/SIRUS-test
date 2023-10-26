<div class="flex items-center justify-between flex-shrink-0 px-3">
    <!-- Logo -->
    <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2">
        <x-application-logo aria-hidden="true" class="w-10 h-auto" />
        {{-- <span class="sr-only">SIRUS Logo</span> --}}
        
        <span x-show="isSidebarOpen || isSidebarHovered" aria-hidden="true" class="text-3xl text-gray-700 text-transform: uppercase; font-bold tracking-tight leading-none whitespace-nowrap dark:text-white">
            SIRUS<small class="text-sm text-gray-700 text-transform: uppercase; font-thin tracking-tight leading-none whitespace-nowrap dark:text-white"> v2.0</small>
        </span>
    </a>

    <!-- Toggle button -->
    <x-button type="button" iconOnly srText="Toggle sidebar" variant="secondary"
        x-show="isSidebarOpen || isSidebarHovered" @click="isSidebarOpen = !isSidebarOpen">
        <x-icons.menu-fold-right x-show="!isSidebarOpen" aria-hidden="true" class="hidden w-6 h-6 lg:block" />
        <x-icons.menu-fold-left x-show="isSidebarOpen" aria-hidden="true" class="hidden w-6 h-6 lg:block" />
        <x-heroicon-o-x aria-hidden="true" class="w-6 h-6 lg:hidden" />
    </x-button>
</div>