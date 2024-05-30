<x-app-layout>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="GET" action="{{ route('empleado.store') }}">
                        @csrf
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Empleados') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Registra un {{ __('empleado') }}</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('View') }}"
                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Atrás</a>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-black">Nombre</label>
                                <input type="text" placeholder="Nombre" name="nombre"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Apellido</label>
                                <input type="text" placeholder="Apellido" name="apellido"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Cédula</label>
                                <input type="date" placeholder="Cédula" name="cedula"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Fecha de Nacimiento</label>
                                <input type="number" placeholder="Fecha de Nacimiento" name="fechanac"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Género</label>
                                <select name="genero" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Dirección</label>
                                <input type="text" placeholder="Dirección" name="direccion"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            
                            <div>
                                <label class="block text-sm font-bold text-black">Teléfono</label>
                                <input type="text" placeholder="Teléfono" name="telefono"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Correo Eléctronico</label>
                                <input type="number" placeholder="Correo Eléctronico" name="correo_electronico"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            
                            
                            <div>
                                <label class="block text-sm font-bold text-black">Fora Académica</label>
                                <input type="text" placeholder="Fora Académica" name="foracademica"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            
                            <div>
                                <label class="block text-sm font-bold text-black">Teléfono de Emergencia</label>
                                <input type="text" placeholder="Teléfono de Emergencia" name="teleemergencia"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                        

                            <div>
                                <label class="block text-sm font-bold text-black">Puesto</label>
                                <input type="text" placeholder="Puesto" name="puesto"
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
