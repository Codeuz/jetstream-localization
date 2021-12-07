<x-layouts.guest>
    <x-cards.auth title="{{ __('auth.forgot_password2') }}">

        <x-messages.errors class="mb-4" />
        <x-messages.success class="mb-4" />

        <div class="mb-4 text-sm text-gray-600">
            {!! __('auth.forgot_password_message') !!}
        </div>

        <form method="POST" action="{{ localization()->route('password.email') }}">
            @csrf

            <div>
                <x-forms.label for="email" value="{{ __('auth.email') }}" />
                <x-forms.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-forms.button class="ml-4">
                    {{ __('auth.send_link') }}
                </x-forms.button>
            </div>

        </form>
    </x-cards.auth>
</x-layouts.guest>
