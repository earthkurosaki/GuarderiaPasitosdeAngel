<x-app-layout>
@php
 $curso = DB::select('select *from cursos');
 $nino = DB::select('select *from nino');
@endphp
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="GET" action="{{ route('inscripcionc.store') }}">
                        @csrf
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Inscripción') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Registra una {{ __('inscripción') }}</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none" >
                                    <a type="button" href="{{ route('View_InscripcionC') }}"
                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ver niños inscritos</a>
                                        
                                   
                                    <a type="button" href="{{ route('View_Cursos') }}" class="block rounded-md bg-green-600 px-3 py-2 mt-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Atrás</a>
                                </div>
                                </div>
                            <div>
                                <label class="block text-sm font-bold text-black">Curso al que asistirá</label>
                                <select name="id_curso">
                                    @foreach ($curso as $pu)
                                    <option value="{{$pu -> id_curso}}">{{$pu -> nombre }}</option>
                                    @endforeach
                                   
                                </select>
                            </div>

                  <div>
                    <label class="block text-sm font-bold text-black">Nombre del niño</label>
                    <select name="id_nino">
                        @foreach ($nino as $ya)
                        <option value="{{$ya -> id_nino}}">{{$ya -> nombre }}</option>
                        @endforeach
                       
                    </select>
                </div>
                            <div class="flex items-center gap-4">
                                <x-primary-button>Registrar</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
