<x-guest-layout>

    @section('title', 'Forgot Password')

    <x-authentication-card>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a
            password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-authentication-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-authentication-validation-errors class="mb-4" :errors="$errors" />

    	<form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="grid gap-6">
                <!-- Email Address -->
                <div class="space-y-2">
                    <x-label for="email" :value="__('Email')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="email" class="form-input block w-full" type="email" name="email"
                            :value="old('email')" required autofocus placeholder="{{ __('Email') }}" autocomplete="email" />
                    </x-input-with-icon-wrapper>
                </div>

                <div>
                    <x-button class="justify-center w-full">
                        {{ __('Email Password Reset Link') }}
                    </x-button>
                </div>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
