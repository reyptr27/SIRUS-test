<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    {{-- Examples --}}

    {{-- <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')" /> --}}
        
    {{-- <x-sidebar.dropdown title="Buttons" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Text button" href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')" />
        <x-sidebar.sublink title="Icon button" href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')" />
        <x-sidebar.sublink title="Text with icon" href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown> --}}
    
    @if (auth()->user()->can('user-read') || auth()->user()->can('role-read') || auth()->user()->can('permission-read') )
        <x-sidebar.dropdown title="Manage User" 
            :active="
                Str::startsWith(request()->route()->uri(), 'user') || 
                Str::startsWith(request()->route()->uri(), 'role') || 
                Str::startsWith(request()->route()->uri(), 'permission')" >

            <x-slot name="icon">
                <x-heroicon-o-user-group class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </x-slot>

            @can('user-read') 
            <x-sidebar.sublink title="Users" href="{{ route('user-index') }}"
                :active="request()->routeIs('user-index')" />
            @endcan

            @can('role-read') 
            <x-sidebar.sublink title="Roles" href="{{ route('role-index') }}"
                :active="request()->routeIs('role-index')" />
            @endcan

            @can('permission-read') 
            <x-sidebar.sublink title="Permissions" href="{{ route('permission-index') }}"
                :active="request()->routeIs('permission-index')" />
            @endcan
        </x-sidebar.dropdown>
    @endif

    <x-sidebar.dropdown title="Manage Organization" :active="Str::startsWith(request()->route()->uri(), '#')">
        <x-slot name="icon">
            <x-heroicon-o-office-building class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Departments" href="#"
            :active="request()->routeIs('#')" />
        <x-sidebar.sublink title="Divisions" href="#"
            :active="request()->routeIs('#')" />
        <x-sidebar.sublink title="Branchs" href="#"
            :active="request()->routeIs('#')" />
    </x-sidebar.dropdown>
       
</x-perfect-scrollbar>