@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'mb-5 mt-1 w-full rounded-lg border px-3 py-2 text-sm outline-blue-600']) !!}>
