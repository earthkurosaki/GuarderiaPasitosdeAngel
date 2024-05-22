<x-app-layout>
    <div class="sm:flex-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold leading-tight text-gray-900">{{ __('Actualizar niño') }}</h1>
        <p class="mt-2 text-md text-gray-600">Actualiza los datos del niño.</p>
    </div>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('nino.update', ['id_nino' => $nino->id_nino]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-black">Nombre</label>
                                <input type="text" placeholder="Nombre" name="nombre" id="nombre-{{ $nino->id_nino }}" value="{{ $nino->nombre }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Apellido</label>
                                <input type="text" placeholder="Apellido" name="apellido" id="apellido-{{ $nino->id_nino }}" value="{{ $nino->apellido }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Fecha de nacimiento</label>
                                <input type="date" placeholder="Fecha de nacimiento" name="fecha_nac" id="fecha_nac-{{ $nino->id_nino }}" value="{{ $nino->fecha_nac }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Edad</label>
                                <input type="number" placeholder="Edad" name="edad" id="edad-{{ $nino->id_nino }}" value="{{ $nino->edad }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Género</label>
                                <select name="genero" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="Masculino" {{ $nino->genero == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                    <option value="Femenino" {{ $nino->genero == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Nacionalidad</label>
                                <input type="text" placeholder="Nacionalidad" name="nacionalidad" id="nacionalidad-{{ $nino->id_nino }}" value="{{ $nino->nacionalidad }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Modo de nacer</label>
                                <select name="modo_nacer" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="Natural" {{ $nino->modo_nacer == 'Natural' ? 'selected' : '' }}>Natural</option>
                                    <option value="Cesárea" {{ $nino->modo_nacer == 'Cesárea' ? 'selected' : '' }}>Cesárea</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Cantidad de hermanos</label>
                                <input type="number" placeholder="Cantidad de hermanos" name="cant_hermanos" id="cant_hermanos-{{ $nino->id_nino }}" value="{{ $nino->cant_hermanos }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Nivel educativo</label>
                                <input type="text" placeholder="Nivel educativo" name="niv_educativo" id="niv_educativo-{{ $nino->id_nino }}" value="{{ $nino->niv_educativo }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">¿Tiene alergias?</label>
                                <select name="alergia" id="alergia" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="Sí" {{ $nino->alergia == 'Sí' ? 'selected' : '' }}>Sí</option>
                                    <option value="No" {{ $nino->alergia == 'No' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Descripción de alergia</label>
                                <input type="text" placeholder="Descripción de alergia" name="desc_alergia" id="desc_alergia-{{ $nino->id_nino }}" value="{{ $nino->desc_alergia }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">¿Tiene discapacidad?</label>
                                <select name="discapacidad" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="Sí" {{ $nino->discapacidad == 'Sí' ? 'selected' : '' }}>Sí</option>
                                    <option value="No" {{ $nino->discapacidad == 'No' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Descripción de discapacidad</label>
                                <input type="text" placeholder="Descripción de discapacidad" name="desc_discapacidad" id="desc_discapacidad-{{ $nino->id_nino }}" value="{{ $nino->desc_discapacidad }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
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

