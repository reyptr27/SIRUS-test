<x-guest-layout>

    @section('title', 'Terms Of Service')
    
    <div class="pt-4 bg-gray-100 dark:bg-dark-eval-0">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <a href="/" class="inline-flex items-center gap-2">
                    <x-application-logo aria-hidden="true" class="w-20 h-20" />
                    {{-- <span class="sr-only">SIRUS Logo</span> --}}

                    <span aria-hidden="true" class="text-5xl text-gray-700 text-transform: uppercase; font-bold tracking-tight leading-none whitespace-nowrap dark:text-white">
                        SIRUS<small class="text-lg text-gray-700 text-transform: uppercase; font-thin tracking-tight leading-none whitespace-nowrap dark:text-white"> v2.0</small>
                    </span>
                </a>
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white dark:bg-dark-eval-1 shadow-md overflow-hidden sm:rounded-lg prose dark:prose-invert">
                {!! $terms !!}
            </div>
        </div>
    </div>
</x-guest-layout>
