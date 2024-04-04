@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-100 focus:outline-none
focus:border-grey-900 focus:ring-2 outline-none border border-gray-300 rounded-md text-md text-gray-700
placeholder:text-gray-400']) !!}>