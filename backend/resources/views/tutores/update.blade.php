<x-app-layout>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('tutores.update', ['id_tutor' => $tutor->id_tutor]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Tutores') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Actualiza un {{ __('tutor') }}</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('View') }}"
                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Atrás</a>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-black">Nombre</label>
                                <input type="text" placeholder="Nombre" name="nombre" id="nombre-{{ $tutor->id_tutor }}" value="{{ $tutor->nombre }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Apellido</label>
                                <input type="text" placeholder="Apellido" name="apellido" id="apellido-{{ $tutor->id_tutor }}" value="{{ $tutor->apellido }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Fecha de nacimiento</label>
                                <input type="date" placeholder="Fecha de nacimiento" name="fechanac" id="fechanac-{{ $tutor->id_tutor }}" value="{{ $tutor->fechanac }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Cédula</label>
                                <input type="text" placeholder="Cédula" name="cedula" id="cedula-{{ $tutor->id_tutor }}" value="{{ $tutor->cedula }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Lugar de trabajo</label>
                                <input type="text" placeholder="Lugar de trabajo" name="lugar_trabajo" id="lugar_trabajo-{{ $tutor->id_tutor }}" value="{{ $tutor->lugar_trabajo }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Cargo</label>
                                <input type="text" placeholder="Cargo que ocupa" name="cargo" id="cargo-{{ $tutor->id_tutor }}" value="{{ $tutor->cargo }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Nivel académico</label>
                                <input type="text" placeholder="Nivel académico" name="nivel_academico" id="nivel_academico-{{ $tutor->id_tutor }}" value="{{ $tutor->nivel_academico }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Profesión</label>
                                <input type="text" placeholder="Profesión" name="profesion" id="profesion-{{ $tutor->id_tutor }}" value="{{ $tutor->profesion }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Dirección</label>
                                <input type="text" placeholder="Dirección" name="direccion" id="direccion-{{ $tutor->id_tutor }}" value="{{ $tutor->direccion }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Teléfono</label>
                                <input type="text" placeholder="Teléfono" name="telefono" id="telefono-{{ $tutor->id_tutor }}" value="{{ $tutor->telefono }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Correo electrónico</label>
                                <input type="text" placeholder="Correo electrónico" name="email" id="email-{{ $tutor->id_tutor }}" value="{{ $tutor->email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Estado civil</label>
                                <input type="text" placeholder="Estado civil" name="estado_civil" id="estado_civil-{{ $tutor->id_tutor }}" value="{{ $tutor->estado_civil }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
                            
                            <div class="mt-6 flex items-center gap-4">
                                <x-primary-button>Actualizar</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

