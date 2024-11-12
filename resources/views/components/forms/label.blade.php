@props(['name', 'label'])

<div class="inline-flex items-center gap-2 ">
    <span class="block w-3 h-3 mt-1 text-blue-500">
        <svg width="100%" height="100%" viewBox="0 0 22 22" fill="currentColor">
            <polygon points="12,22 2,2 22,2" />
        </svg>
    </span> <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
</div>