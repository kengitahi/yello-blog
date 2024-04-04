@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 focus:outline-none
focus:border-yellow-500 transition duration-150 ease-in-out space-x-2 hover:text-yellow-900 hover:border-yellow-900
text-yellow-500 font-bold border-b-2 border-transparent'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500
hover:text-yellow-500 hover:border-yellow-500 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition
duration-150 ease-in-out';
@endphp

<a wire:navigate {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>