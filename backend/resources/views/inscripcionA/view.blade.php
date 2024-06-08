<x-app-layout>
    @php
        $inscripciones = DB::table('inscripciones_actividades')
            ->join('actividades_adicionales', 'inscripciones_actividades.id_actividad', '=', 'actividades_adicionales.id_actividad')
            ->join('nino', 'inscripciones_actividades.id_nino', '=', 'nino.id_nino')
            ->select('inscripciones_actividades.*', 'actividades_adicionales.nombre as nombre_actividad', 'nino.nombre as nombre_nino')
            ->get();
    @endphp

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inscripción') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Inscripción') }}</h1>
                            <p class="mt-2 text-sm text-gray-700">Lista de todas las {{ __('inscripciones') }}</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a type="button" href="{{ route('registrar_inscripcion') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Añadir</a>
                            <a type="button" href="{{ route('View_Actividades') }}" class="block rounded-md bg-green-600 px-3 py-2 mt-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Atrás</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-300">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Id</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Actividad</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Niño</th>
                                            <th scope="col" class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        @foreach ($inscripciones as $inscripcion)
                                            <tr class="even:bg-gray-50">
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $inscripcion->id_inscripcion }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $inscripcion->nombre_actividad }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $inscripcion->nombre_nino }}</td>
                                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                    <a href="{{ route('inscripciona.show', $inscripcion->id_inscripcion) }}" class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Editar') }}</a>
                                                    <form action="{{ route('inscripciona.destroy', $inscripcion->id_inscripcion) }}" method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('inscripciona.destroy', $inscripcion->id_inscripcion) }}" class="text-red-600 font-bold hover:text-red-900" onclick="event.preventDefault(); confirm('¿Quieres eliminar este dato?') ? this.closest('form').submit() : false;">{{ __('Borrar') }}</a>
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
