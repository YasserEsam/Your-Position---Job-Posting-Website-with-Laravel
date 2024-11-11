@props(['size' => 'base' , 'tag'])

@php
    $classes = 'px-3 py-2 font-medium text-gray-200 bg-white/10 rounded-full hover:bg-white/20 transition-colors';

    if ($size === 'base') {
        $classes .= ' text-sm';
    }

    if ($size === 'sm') {
        $classes .= ' text-[10px]';
    }


@endphp

<a class="{{ $classes }}" href="/tags/{{ strtolower($tag->name) }}">{{ $tag->name }}</a>
