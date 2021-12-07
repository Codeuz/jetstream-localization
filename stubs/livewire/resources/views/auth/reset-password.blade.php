<x-layouts.guest>

    <x-cards.auth title="{{ __('auth.new_password') }}">

        <x-messages.errors class="mb-4" />
        <x-messages.success class="mb-4" />

        <form method="POST" action="{{ localization()->route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div>
                <x-forms.label for="email" value="{{ __('auth.email') }}" />
                <x-forms.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-forms.label for="password" value="{{ __('auth.password') }}" />
                <x-forms.input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-forms.label for="password_confirmation" value="{{ __('auth.password_confirm') }}" />
                <x-forms.input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-forms.button class="ml-4">
                    {{ __('auth.reset_password') }}
                </x-forms.button>
            </div>

        </form>
    </x-cards.auth>
</x-layouts.guest>
