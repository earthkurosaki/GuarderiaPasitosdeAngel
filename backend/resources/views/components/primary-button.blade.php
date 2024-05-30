<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#00b5ec] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#1696e4] focus:bg-[#1696e4] active:bg-[#00b5ec] focus:outline-none focus:ring-2 focus:ring-[#1696e4] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
