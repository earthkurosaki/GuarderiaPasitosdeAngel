<x-app-layout>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('curso.update', ['id_curso' => $curso->id_curso]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Cursos') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Actualiza un {{ __('curso') }}</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('View_Cursos') }}"
                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Atrás</a>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-black">Nombre</label>
                                <input type="text" placeholder="Nombre" name="nombre" id="nombre-{{ $curso->id_curso }}" value="{{ $curso->nombre }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Descripción</label>
                                <input type="text" placeholder="Descripción" name="descripcion" id="descripcion-{{ $curso->id_curso }}" value="{{ $curso->descripcion }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Duración</label>
                                <input type="text" placeholder="Duración" name="duracion" id="duracion-{{ $curso->id_curso }}" value="{{ $curso->duracion }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Horario</label>
                                <input type="text" placeholder="Horario" name="horario" id="horario-{{ $curso->id_curso }}" value="{{ $curso->horario }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                        

                            <div>
                                <label class="block text-sm font-bold text-black">Día</label>
                                <input type="text" placeholder="Día" name="dia" id="dia-{{ $curso->id_curso }}" value="{{ $curso->dia }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                    

                            <div>
                                <label class="block text-sm font-bold text-black">Empleado</label>
                                <select name="id_empleados" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    @foreach ($empleado as $empleado)
                                <option value="{{ $empleado->id_empleado }}" {{ $empleado->id_empleados == $curso->id_empleados ? 'selected' : '' }}>
                                {{ $empleado->nombre }}
                             </option>
                                 @endforeach

                                </select>
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

