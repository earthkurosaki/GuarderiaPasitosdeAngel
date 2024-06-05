<x-app-layout>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('inscripcionc.update', ['id_inscripcion' => $inscripcionc->id_inscripcion]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Inscripción') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Actualiza una {{ __('inscripción') }}</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('View_InscripcionC') }}"
                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Atrás</a>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Curso al que asistirá</label>
                                <select name="id_curso" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    @foreach ($cursos as $curso)
<option value="{{ $curso->id_curso }}" {{ $curso->id_curso == $inscripcionc->id_curso ? 'selected' : '' }}>
    {{ $curso->nombre }}
</option>
@endforeach

                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Nombre del niño</label>
                                <select name="id_nino" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    @foreach ($ninos as $nino)
                                        <option value="{{ $nino->id_nino }}" {{ $nino->id_nino == $inscripcionc->id_nino ? 'selected' : '' }}>{{ $nino->nombre }}</option>
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
