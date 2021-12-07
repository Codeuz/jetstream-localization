<div class="ml-1 pt-3 md:pt-4">
    <x-menus.nav-dropdown-button label="{{ Auth::user()->full_name }}">
        <div class="block px-4 py-1 text-sm font-medium leading-5 text-gray-500">
            <form action="{{ localization()->route('logout') }}" method="POST">
                @csrf
                <button class="btn p-0" type="submit">
                    {{ __('auth.logout') }}
                </button>
            </form>
        </div>
    </x-menus.nav-dropdown-button>
</div>
