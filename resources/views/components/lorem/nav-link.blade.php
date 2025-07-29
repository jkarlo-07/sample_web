@props(['active'])

@php
    $classes = $active
        ? 'border-[#3e516e]'
        : 'hover:border-[#3e516e] border-transparent ';
@endphp

<a {{ $attributes->merge(['class' => "px-2 py-1.5 text-sm border-2 rounded-xl $classes cursor-pointer"]) }}>
    {{ $slot }}
</a>