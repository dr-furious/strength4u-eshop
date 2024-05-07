<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-block w-full rounded-lg bg-blue-500 py-2.5 text-center text-sm text-white shadow-sm transition duration-200 hover:bg-blue-600 hover:shadow-md']) }}>
    {{ $slot }}
</button>
