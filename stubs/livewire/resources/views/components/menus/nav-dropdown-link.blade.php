@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'block px-4 py-1 text-sm font-medium leading-5 text-gray-900 cursor-default'
                : 'block px-4 py-1 text-sm font-medium leading-5 text-gray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
