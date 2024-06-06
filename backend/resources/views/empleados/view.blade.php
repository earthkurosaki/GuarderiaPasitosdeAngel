<x-app-layout>
    @php
        $empleados = isset($empleados) ? $empleados : []; // Para evitar errores si $empleados no está definido
    @endphp

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empleados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Empleados') }}</h1>
                            <p class="mt-2 text-sm text-gray-700">Lista de todos los {{ __('empleados') }}</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('registrar_empleado') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Añadir</a>
                        </div>
                    </div>

                    <form method="GET" action="{{ route('View_EmpleadoV') }}" class="mb-4 flex items-center space-x-2">
                        <input type="text" name="search" class="border rounded px-2 py-1" placeholder="Buscar por nombre" value="{{ request()->get('search') }}">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded flex items-center space-x-2">
                            <i class="fas fa-search"></i>
                            <span>Buscar</span>
                        </button>
                        @if (request()->get('search'))
                            <a href="{{ route('View_EmpleadoV') }}" class="bg-gray-500 text-white px-4 py-2 rounded flex items-center space-x-2">
                                <i class="fas fa-times"></i>
                                <span>Limpiar</span>
                            </a>
                        @endif
                    </form>

                    <!-- Botón de Borrar Búsqueda -->
                    @if(request('search'))
                        <form method="GET" action="{{ route('View_EmpleadosD') }}" class="mt-4">
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Borrar Búsqueda</button>
                        </form>
                    @endif

                    <div class="flow-root mt-6">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-300">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Id</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Nombre</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Apellido</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Cédula</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Fecha_Nac</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Género</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Dirección</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Teléfono</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Correo Electrónico</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Fecha_Ingreso</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Horario Laboral</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Fora Académica</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Teléfono de Emergencia</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Puesto</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Sueldo Base</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        @foreach ($empleados as $empleado)
                                            <tr>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->id_empleados }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-900">{{ $empleado->nombre }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-900">{{ $empleado->apellido }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->cedula }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->fechanac }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->genero }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->direccion }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->telefono }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->correo_electronico }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->fechaingreso }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->horariolabo }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->foracademica }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->teleemergencia }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->puesto }}</td>
                                                <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">{{ $empleado->sueldo_base }}</td>
                                                <td class="relative whitespace-nowrap py-3 pl-4 pr-3 text-right text-sm font-medium">
                                                    <a href="{{ route('empleados.show', $empleado->id_empleados) }}" class="text-indigo-600 hover:text-indigo-900">Ver</a>
                                                    <a href="{{ route('empleados.update', $empleado->id_empleados) }}" class="text-yellow-600 hover:text-yellow-900">Editar</a>
                                                    <form action="{{ route('empleados.destroy', $empleado->id_empleados) }}" method="POST" style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
