<main class="flex flex-col items-center flex-1 px-4 pt-6 sm:justify-center">
    <div>
        <a href="/" class="inline-flex items-center gap-2">
            <x-application-logo aria-hidden="true" class="w-20 h-20" />
            {{-- <span class="sr-only">SIRUS Logo</span> --}}

            <span aria-hidden="true" class="text-5xl text-gray-700 text-transform: uppercase; font-bold tracking-tight leading-none whitespace-nowrap dark:text-white">
                SIRUS<small class="text-lg text-gray-700 text-transform: uppercase; font-thin tracking-tight leading-none whitespace-nowrap dark:text-white"> v2.0</small>
            </span>
        </a>
    </div>

    <div class="w-full px-6 py-4 my-6 overflow-hidden bg-white rounded-md shadow-md sm:max-w-md dark:bg-dark-eval-1">
        {{ $slot }}
    </div>
</main>