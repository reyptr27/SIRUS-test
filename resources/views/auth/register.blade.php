<x-guest-layout>

    @section('title', __('Register'))

    <x-authentication-card>
        <!-- Validation Errors -->
        <x-authentication-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="grid gap-6">
                <!-- NIK -->
                <div class="space-y-2">
                    <x-label for="nik" :value="__('NIK')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-identification aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="nik" class="form-input block w-full" type="text" name="nik" :value="old('nik')"
                            required autofocus placeholder="NIK" autocomplete="off" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Name -->
                <div class="space-y-2">
                    <x-label for="name" :value="__('Name')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="name" class="form-input block w-full" type="text" name="name" :value="old('name')"
                            required autofocus placeholder="{{ __('Name') }}" autocomplete="name" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Username -->
                <div class="space-y-2">
                    <x-label for="username" :value="__('Username')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user-circle aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="username" class="form-input block w-full" type="text" name="username" :value="old('username')"
                            required autofocus placeholder="{{ __('Username') }}" autocomplete="off" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Email Address -->
                <div class="space-y-2">
                    <x-label for="email" :value="__('Email')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="email" class="form-input block w-full" type="email" name="email"
                            :value="old('email')" required placeholder="{{ __('Email') }}" autocomplete="email" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <x-label for="password" :value="__('Password')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="password" class="form-input block w-full" type="password" name="password" required
                            autocomplete="new-password" placeholder="{{ __('Password') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <!-- Confirm Password -->
                <div class="space-y-2">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="password_confirmation" class="form-input block w-full" type="password"
                            name="password_confirmation" required placeholder="{{ __('Confirm Password') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="space-y-2">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms"/>

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-blue-600 hover:text-blue-900 dark:hover:text-blue-400">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-blue-600 hover:text-blue-900 dark:hover:text-blue-400">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                <div>
                    <x-button class="justify-center w-full gap-2">
                        <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />
                        <span>{{ __('Register') }}</span>
                    </x-button>
                </div>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Already registered?') }}
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">
                        {{ __('Login') }}
                    </a>
                </p>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
