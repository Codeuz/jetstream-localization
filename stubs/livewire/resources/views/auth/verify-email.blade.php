<x-layouts.message>
    <x-cards.message>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('auth.verification_msg_success') }}
            </div>
        @endif

        <div class="text-sm text-gray-600">
            {!! __('auth.pending_account_msg') !!}
        </div>

        <form method="POST" action="{{ localization()->route('verification.send') }}">
            @csrf

            <div class="mt-6">
                <x-forms.button-outlet type="submit">
                    {{ __('auth.resend_verification_mail') }}
                </x-forms.button-outlet>
            </div>
        </form>
    </x-cards.message>
</x-layouts.message>
