@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#00b5ec] focus:ring-[#1696e4] rounded-md shadow-sm']) !!}>
