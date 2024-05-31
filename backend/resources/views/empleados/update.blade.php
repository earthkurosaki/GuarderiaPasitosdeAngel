<x-app-layout>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('empleados.update', ['id_empleado' => $empleado->id_empleado]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Empleados') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Actualiza un {{ __('empleado') }}</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('View_Empleados') }}"
                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Atrás</a>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-black">Nombre</label>
                                <input type="text" placeholder="Nombre" name="nombre" id="nombre-{{ $empleado->id_empleado }}" value="{{ $empleado->nombre }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Apellido</label>
                                <input type="text" placeholder="Apellido" name="apellido" id="apellido-{{ $empleado->id_empleado }}" value="{{ $empleado->apellido }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Cédula</label>
                                <input type="number" placeholder="Cédula" name="cedula" id="cedula-{{ $empleado->id_empleado }}" value="{{ $empleado->cedula}}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Fecha de Nacimiento</label>
                                <input type="date" placeholder="Fecha de Nacimiento" name="fechanac" id="fechanac-{{ $empleado->id_empleado }}" value="{{ $empleado->fechanac }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Género</label>
                                <select name="genero" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="Masculino" {{ $empleado->genero == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                    <option value="Femenino" {{ $empleado->genero == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Dirección</label>
                                <input type="text" placeholder="Dirección" name="dirrecion" id="dirrecion-{{ $empleado->id_empleado }}" value="{{ $empleado->dirrecion }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            
                            <div>
                                <label class="block text-sm font-bold text-black">Teléfono</label>
                                <input type="number" placeholder="Teléfono" name="telefono" id="telefono-{{ $empleado->id_empleado }}" value="{{ $empleado->telefono }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Correo Electrónico</label>
                                <input type="text" placeholder="Correo Electrónico" name="correo_electronico" id="correo_electronico-{{ $empleado->id_empleado }}" value="{{ $empleado->correo_electronico }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            
                            <div>
                                <label class="block text-sm font-bold text-black">Fecha de Ingreso</label>
                                <input type="date" placeholder="Fecha de Ingreso" name="fechaingreso" id="fechaingreso-{{ $empleado->id_empleado }}" value="{{ $empleado->fechaingreso }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Horario Laboral</label>
                                <input type="text" placeholder="Horario Laboral" name="horariolabo" id="horariolabo-{{ $empleado->id_empleado }}" value="{{ $empleado->horariolabo}}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Fora Académica</label>
                                <input type="text" placeholder="Fora Académica" name="foracademica" id="foracademica-{{ $empleado->id_empleado }}" value="{{ $empleado->foracademica}}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Teléfono de Emergencia</label>
                                <input type="number" placeholder="Teléfono de Emergencia" name="teleemergencia" id="teleemergencia-{{ $empleado->id_empleado }}" value="{{ $empleado->teleemergencia }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Puesto</label>
                                <input type="number" placeholder="Puesto" name="id_puesto" id="id_puesto-{{ $empleado->id_empleado }}" value="{{ $empleado->id_puesto }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Sueldo Base</label>
                                <input type="number" placeholder="Sueldo Base" name="sueldo_base" id="sueldo_base-{{ $empleado->id_empleado }}" value="{{ $empleado->sueldo_base }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
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

