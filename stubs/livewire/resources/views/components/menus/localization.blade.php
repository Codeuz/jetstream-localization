<div class="ml-1 md:ml-4 pt-3 md:pt-4">
    <x-menus.nav-dropdown-button label="{{ strtoupper(config('app.locale')) }}">
        @foreach(config('localization.supported_locales') as $locale => $lang)
            @if ($locale != config('app.locale'))
                <x-menus.nav-dropdown-link hreflang="{{ $locale }}" href="{{ localization()->currentRoute($locale) }}">{{ $lang['native'] }}</x-menus.nav-dropdown-link>
            @endif
        @endforeach
    </x-menus.nav-dropdown-button>
</div>
