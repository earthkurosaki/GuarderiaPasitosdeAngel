<x-app-layout>
    @php
    $datos = DB::select('select * from tutor_ninov');
@endphp
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tutores y Niños') }}
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
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id del Tutor</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre del Tutor</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Apellido del Tutor</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id del Niño</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre del Niño</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre del Apellido</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Relación Parental</th>
                                
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($datos as $dato)
                                <tr>
                                    <!-- Muestra los datos de las columnas -->
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $dato->id_tutor }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->tutor_nombre }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->tutor_apellido}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->id_nino }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->niño}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->niño_apellido}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->relacion_parental }}</td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    
                </div>
            </div>
          
    
</x-app-layout>
