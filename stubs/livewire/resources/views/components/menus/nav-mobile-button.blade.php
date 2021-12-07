<div x-data="{show: false}" @click.away="show = false" class="relative">
    <button @click="show = ! show" class="block px-3 py-2 text-sm font-medium leading-5 text-gray-900 rounded-md bg-gray-100">
        <div class="flex">
            <svg class="block" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </div>
    </button>
    <div x-show="show" class="absolute right-0 mt-2 py-2 bg-white rounded-lg shadow-xl">
        {{ $slot }}
    </div>
</div>
