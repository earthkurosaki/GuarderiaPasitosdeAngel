<x-app-layout>
    @php
$puesto = DB::select('select * from puestos');
@endphp
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('empleados.update', ['id_empleados' => $empleado->id_empleados]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-black">Nombre</label>
                                <input type="text" placeholder="Nombre" name="nombre" id="nombre-{{ $empleado->id_empleados }}" value="{{ $empleado->nombre }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
                    
                            <div>
                                <label class="block text-sm font-bold text-black">Apellido</label>
                                <input type="text" placeholder="Apellido" name="apellido" id="apellido-{{ $empleado->id_empleados }}" value="{{ $empleado->apellido }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
                    
                            <div>
                                <label class="block text-sm font-bold text-black">Cédula</label>
                                <input type="text" placeholder="Cédula" name="cedula" id="cedula-{{ $empleado->id_empleados }}" value="{{ $empleado->cedula }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
                    
                            <div>
                                <label class="block text-sm font-bold text-black">Fecha de Nacimiento</label>
                                <input type="date" placeholder="Fecha de Nacimiento" name="fechanac" id="fechanac-{{ $empleado->id_empleados }}" value="{{ $empleado->fechanac }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
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
                                <input type="text" placeholder="Dirección" name="direccion" id="direccion-{{ $empleado->id_empleados }}" value="{{ $empleado->direccion }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
                    
                            <div>
                                <label class="block text-sm font-bold text-black">Teléfono</label>
                                <input type="text" placeholder="Teléfono" name="telefono" id="telefono-{{ $empleado->id_empleados }}" value="{{ $empleado->telefono }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
                    
                            <div>
                                <label class="block text-sm font-bold text-black">Correo Electrónico</label>
                                <input type="text" placeholder="Correo Electrónico" name="correo_electronico" id="correo_electronico-{{ $empleado->id_empleados }}" value="{{ $empleado->correo_electronico }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
                    
                            <div>
                                <label class="block text-sm font-bold text-black">Fecha de Ingreso</label>
                                <input type="date" placeholder="Fecha de Ingreso" name="fechaingreso" id="fechaingreso-{{ $empleado->id_empleados }}" value="{{ $empleado->fechaingreso }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
                    
                            <div>
                                <label class="block text-sm font-bold text-black">Horario Laboral</label>
                                <input type="text" placeholder="Horario Laboral" name="horariolabo" id="horariolabo-{{ $empleado->id_empleados }}" value="{{ $empleado->horariolabo }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
                    
                            <div>
                                <label class="block text-sm font-bold text-black">Fora Académica</label>
                                <input type="text" placeholder="Fora Académica" name="foracademica" id="foracademica-{{ $empleado->id_empleados }}" value="{{ $empleado->foracademica }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
                    
                            <div>
                                <label class="block text-sm font-bold text-black">Teléfono de Emergencia</label>
                                <input type="text" placeholder="Teléfono de Emergencia" name="teleemergencia" id="teleemergencia-{{ $empleado->id_empleados }}" value="{{ $empleado->teleemergencia }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
                    
                            <div>
                                <label class="block text-sm font-bold text-black">Puesto</label>
                                <select name="id_puesto" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    @foreach ($puesto as $puesto)
                                        <option value="{{ $puesto->id_puesto }}" {{ $empleado->id_puesto == $puesto->id_puesto ? 'selected' : '' }}>{{ $puesto->puesto }}</option>
                                    @endforeach
                                </select>
                            </div>
                    
                            <div>
                                <label class="block text-sm font-bold text-black">Sueldo Base</label>
                                <input type="number" placeholder="Sueldo Base" name="sueldo_base" id="sueldo_base-{{ $empleado->id_empleados }}" value="{{ $empleado->sueldo_base }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
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

