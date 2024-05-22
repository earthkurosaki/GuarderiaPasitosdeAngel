<x-app-layout>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="GET" action="{{ route('tutores.store') }}">
                        @csrf
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Niños') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Registra un {{ __('niño') }}</p>
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
                                <label class="block text-sm font-bold text-black">Fecha de nacimiento</label>
                                <input type="date" placeholder="Fecha de nacimiento" name="fecha_nac"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Edad</label>
                                <input type="number" placeholder="Edad" name="edad"
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
                                <label class="block text-sm font-bold text-black">Nacionalidad</label>
                                <input type="text" placeholder="Nacionalidad" name="nacionalidad"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Modo de nacer</label>
                                <select name="modo_nacer"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="Natural">Natural</option>
                                    <option value="Cesárea">Cesárea</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Cantidad de hermanos</label>
                                <input type="number" placeholder="Cantidad de hermanos" name="cant_hermanos"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Nivel educativo</label>
                                <input type="text" placeholder="Nivel educativo" name="niv_educativo"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">¿Tiene alergias?</label>
                                <select name="alergia" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="Sí">Sí</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Descripción de alergia</label>
                                <input type="text" placeholder="Descripción de alergia" name="desc_alergia"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">¿Tiene discapacidad?</label>
                                <select name="discapacidad"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="Sí">Sí</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Descripción de discapacidad</label>
                                <input type="text" placeholder="Descripción de discapacidad" name="desc_discapacidad"
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
