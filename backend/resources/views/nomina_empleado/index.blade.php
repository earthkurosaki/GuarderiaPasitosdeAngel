<x-app-layout>
    @php
    $datos = DB::select('select * from nomina_empleado');
@endphp
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles de las Nóminas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="GET" action="{{ route('View_NominaDet') }}" class="mb-4 flex items-center space-x-2">
                    <input type="text" name="search" class="border rounded px-2 py-1" placeholder="Buscar por nombre" value="{{ request()->get('search') }}">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded flex items-center space-x-2">
                        <i class="fas fa-search"></i>
                        <span>Buscar</span>
                    </button>
                    @if (request()->get('search'))
                        <a href="{{ route('View_NominaDet') }}" class="bg-gray-500 text-white px-4 py-2 rounded flex items-center space-x-2">
                            <i class="fas fa-times"></i>
                            <span>Limpiar</span>
                        </a>
                    @endif
                </form>


                <div class="overflow-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <!-- Agrega los encabezados de las columnas de tu vista -->
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id del Empleado</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Apellido</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cédula</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha de Ingreso</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Puesto</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sueldo Base</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Días Laborados</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Horas Extra</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Comisión</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bonificación</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vacaciones</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Monto Final</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($datos as $dato)
                                <tr>
                                    <!-- Muestra los datos de las columnas -->
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $dato->id_empleados }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->nombre }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->apellido }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->cedula }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->fechaingreso }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->puesto }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->sueldo_base }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->dias_laborados }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->hora_extras }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->comision }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->bonificacion }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->vacaciones }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->monto_final }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    
                </div>
            </div>
            <form action="{{ route('nomina_pagar') }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded flex items-center space-x-2">Pagar Nómina</button>
            </form>

            <form action="{{ route('activa_nomina') }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded flex items-center space-x-2">Reactivar Nómina</button>
            </form>
        </div>
    </div>

    
</x-app-layout>
