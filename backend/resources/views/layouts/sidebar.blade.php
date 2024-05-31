<!-- Navigation Links -->
<div class="w-full flex flex-col gap-5 p-4">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
    {{-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('user')">
        {{ __('User') }}
    </x-nav-link> --}}
    <x-nav-link :href="route('View_Nino')" :active="request()->routeIs('View_Nino')">
        {{ __('Niños') }}
    </x-nav-link>
    <x-nav-link :href="route('View_Tutores')" :active="request()->routeIs('View_Tutores')">
        {{ __('Tutores') }}
    </x-nav-link>
    <x-nav-link :href="route('View_Empleados')" :active="request()->routeIs('View_Empleados')">
        {{ __('Empleados') }}
    </x-nav-link>
    <x-nav-link :href="route('View_Puestos')" :active="request()->routeIs('View_Puestos')">
        {{ __('Puestos') }}
    </x-nav-link>
    <x-nav-link :href="route('View_Servicios')" :active="request()->routeIs('View_Servicios')">
        {{ __('Servicios') }}
    </x-nav-link>
    <x-nav-link :href="route('View_Actividades')" :active="request()->routeIs('View_Actividades')">
        {{ __('Actividades') }}
    </x-nav-link>
    <x-nav-link :href="route('View_Ganancias')" :active="request()->routeIs('View_Ganancias')">
        {{ __('Ganancias') }}
    </x-nav-link>
    <x-nav-link :href="route('View_Gastos')" :active="request()->routeIs('View_Gastos')">
        {{ __('Gastos') }}
    </x-nav-link>
    
</div>