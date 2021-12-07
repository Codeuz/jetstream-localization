<x-layouts.guest>
    <x-cards.auth title="{{ __('auth.register') }}">

        <x-messages.errors class="mb-4" />

        <form method="POST" action="{{ localization()->route('register') }}">
            @csrf

            <div>
                <x-forms.label for="name" value="{{ __('auth.name') }}" />
                <x-forms.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-forms.label for="firstname" value="{{ __('auth.firstname') }}" />
                <x-forms.input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autocomplete="firstname" />
            </div>

            <div class="mt-4">
                <x-forms.label for="email" value="{{ __('auth.email') }}" />
                <x-forms.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-forms.label for="password" value="{{ __('auth.password') }}" />
                <x-forms.input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-forms.label for="password_confirmation" value="{{ __('auth.password_confirm') }}" />
                <x-forms.input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-forms.label for="terms">
                        <div class="flex items-center">
                            <x-forms.checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('auth.accept_terms') !!}
                            </div>
                        </div>
                    </x-forms.label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <x-forms.button class="ml-4">
                    {{ __('auth.register_me') }}
                </x-forms.button>
            </div>
        </form>
    </x-cards.auth>
</x-layouts.guest>
