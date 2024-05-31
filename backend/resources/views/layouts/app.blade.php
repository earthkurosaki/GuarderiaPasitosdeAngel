<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Guardería Pasitos de Ángeles</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/imgs/favicon.png') }}">

</head>

<body class="font-sans antialiased">
    <div class="flex" id="wrapper" x-data="{ isOpen: true }">
        <div id="sidebar" class="h-screen overflow-y-auto bg-[#dff6fc] transition-all duration-200"
            :class="isOpen ? 'w-48' : 'w-0'">
            <div class="w-full h-auto p-4 flex justify-center bg-[#dff6fc]">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('assets/imgs/logo.png') }}" alt="Logo" width="120px">
                    </a>
                </div>
            </div>
            @include('layouts.sidebar')
        </div>
        <div id="body" class="w-full h-screen overflow-y-auto transition-all duration-200">
            <div class="w-full h-auto p-4 flex justify-between bg-white">
                <button @click.prevent="isOpen = !isOpen"><ion-icon name="menu-outline"
                        class="text-3xl cursor-pointer block"></ion-icon></button>
                <!-- Settings Dropdown -->
                <div class="flex items-center ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>Hola, {{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Perfil') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

            </div>
            <div class="p-2">
                <!-- Page Heading -->
                @if (isset($header))
                        <div class="max-w-7xl py-6 px-e sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>       
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
</body>

</html>
