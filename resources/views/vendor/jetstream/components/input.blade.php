@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'py-4 bg-gray-100 border-0 p-3 rounded-full text-sm w-full']) !!}>
