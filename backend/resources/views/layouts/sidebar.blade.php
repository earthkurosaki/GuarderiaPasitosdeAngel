<!-- Navigation Links -->
<div class="w-full flex flex-col gap-5 p-4">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
    {{-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('user')">
        {{ __('User') }}
    </x-nav-link> --}}
    <x-nav-link :href="route('NinoD')" :active="request()->routeIs('NinoD')">
        {{ __('Niños') }}
    </x-nav-link>
    <x-nav-link :href="route('View_Tutores')" :active="request()->routeIs('View_Tutores')">
        {{ __('Tutores') }}
    </x-nav-link>
    <x-nav-link :href="route('View_EmpleadosD')" :active="request()->routeIs('View_EmpleadosD')">
        {{ __('Empleados') }}
    </x-nav-link>

    <x-nav-link :href="route('View_NominaDet')" :active="request()->routeIs('View_NominaDet')">
    {{ __('Nominas') }}
    </x-nav-link>
    
    <x-nav-link :href="route('View_Pagos')" :active="request()->routeIs('View_Pagos')">
        {{ __('Pagos') }}
        </x-nav-link>

    <x-nav-link :href="route('View_IngresosDet')" :active="request()->routeIs('View_IngresosDet')">
    {{ __('Ingresos') }}
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
    <x-nav-link :href="route('View_GananciasDet')" :active="request()->routeIs('View_GananciasDet')">
        {{ __('Ganancias') }}
    </x-nav-link>
    <x-nav-link :href="route('View_Gastos')" :active="request()->routeIs('View_Gastos')">
        {{ __('Gastos') }}
    </x-nav-link>
    <x-nav-link :href="route('View_Cursos')" :active="request()->routeIs('View_Cursos')">
        {{ __('Cursos') }}
    </x-nav-link>
    
</div>