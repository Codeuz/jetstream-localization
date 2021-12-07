@props(['title' => ''])

<div class="max-w-xl mx-auto sm:px-6 lg:px-8">
    <div class="mt-8 mb-0 sm:mb-4">
        @if ($title)
        <h1 class="text-gray-800 text-2xl font-semibold text-center">{{ $title }}</h1>
        @endif
        <div class="px-6 py-4 bg-white shadow sm:rounded-lg {{ $title ? 'mt-2' : 'mt-0' }}">
            {{ $slot }}
        </div>
        <div class="mt-2 px-6 py-2 sm:px-0 sm:py-0">
            {{ $footer ?? '' }}
        </div>
    </div>
</div>
