@props(['value'])

<label {{ $attributes->merge(['class' => 'block pb-1 text-sm text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>
