<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles de los Ingresos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Formulario de búsqueda -->
                <form method="GET" action="{{ route('View_IngresosDet') }}" class="mb-4">
                    <input type="text" name="dia" class="border rounded px-2 py-1" placeholder="Día" value="{{ request()->get('dia') }}">
                    <input type="text" name="mes" class="border rounded px-2 py-1" placeholder="Mes" value="{{ request()->get('mes') }}">
                    <input type="text" name="anio" class="border rounded px-2 py-1" placeholder="Año" value="{{ request()->get('anio') }}">
                    <input type="text" name="semana" class="border rounded px-2 py-1" placeholder="Semana" value="{{ request()->get('semana') }}">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Buscar</button>
                    <button type="button" onclick="limpiarFormulario()" class="bg-gray-300 text-gray-700 px-4 py-2 rounded ml-2">Limpiar</button>
                </form>
                
                <script>
                    function limpiarFormulario() {
                        // Seleccionar todos los inputs del formulario
                        const inputs = document.querySelectorAll('form input');
                        // Iterar sobre los inputs y establecer su valor como vacío
                        inputs.forEach(input => {
                            input.value = '';
                        });
                        // Enviar el formulario
                        window.location.href = '{{ route('View_IngresosDet') }}';
                    }
                </script>

                <div class="overflow-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <!-- Agrega los encabezados de las columnas de tu vista -->
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Monto</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Suma total</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($datos as $dato)
                                <tr>
                                    <!-- Muestra los datos de las columnas -->
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $dato->monto_total }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->fecha }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $dato->suma_total }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
