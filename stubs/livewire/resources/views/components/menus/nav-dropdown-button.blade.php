@props(['label'])

<div x-data="{show: false}" @click.away="show = false" class="relative">
    <button @click="show = ! show" class="block pl-3 md:pl-2 pr-1 md:pr-0 py-2 md:py-1 text-sm font-medium leading-5 text-gray-900 rounded bg-gray-100">
        <div class="flex">
            <span>{{ $label }}</span>
            <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="24">
                <path d="M7 10l5 5 5-5z" />
                <path d="M0 0h24v24H0z" fill="none" />
            </svg>
        </div>
    </button>
    <div x-show="show" class="absolute right-0 mt-2 py-2 bg-white rounded-lg shadow-xl">
        {{ $slot }}
    </div>
</div>
