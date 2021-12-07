<x-layouts.guest>
    <x-cards.auth title="{{ __('auth.login') }}">

        <x-messages.errors class="mb-4" />
        <x-messages.success class="mb-4" />

        <form method="POST" action="{{ localization()->route('login') }}">
            @csrf

            <div>
                <x-forms.label for="email" value="{{ __('auth.email') }}" />
                <x-forms.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-forms.label for="password" value="{{ __('auth.password') }}" />
                <x-forms.input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-forms.checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('auth.remember_me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-forms.button class="ml-4">
                    {{ __('auth.log_in') }}
                </x-forms.button>
            </div>

        </form>

        <x-slot name="footer">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ localization()->route('password.request') }}">
                {{ __('auth.forgot_password') }}
            </a>
        </x-slot>
    </x-cards.auth>
</x-layouts.guest>
