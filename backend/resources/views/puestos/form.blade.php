<x-app-layout>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="GET" action="{{ route('puestos.store') }}">
                        @csrf
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Puestos') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Registra un {{ __('puesto') }}</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('View_Puestos') }}"
                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Atrás</a>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Puesto</label>
                                <select name="puesto" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="Asistente">Asistente</option>
                                    <option value="Docente">Docente</option>
                                    <option value="Mantenimiento">Mantenimiento</option>
                                    <option value="Cuidador">Cuidador</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Descripción del puesto</label>
                                <input type="text" placeholder="Descripción del puesto" name="descpuesto"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>Registrar</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
