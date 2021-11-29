<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full rounded-full bg-indigo-800 text-white text-center py-4 px-4']) }}>
    {{ $slot }}
</button>
