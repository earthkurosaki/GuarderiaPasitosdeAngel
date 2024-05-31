<!-- Navigation Links -->
<div class="w-full flex flex-col gap-5 p-4">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('user')">
        {{ __('User') }}
    </x-nav-link>
</div>