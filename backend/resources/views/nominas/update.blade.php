<x-app-layout>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('nomina.update', ['cod_nomina' => $nomina->cod_nomina]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Nomina') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Llena los campos faltantes:</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('View_Nominas') }}"
                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Atrás</a>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-black">Salario</label>
                                <input type="text" placeholder="Salario" name="cod_salario" id="cod_salario-{{ $nomina->cod_nomina }}" value="{{ $nomina->cod_salario }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Sueldo con Deducciones</label>
                                <input type="text" placeholder="Sueldo con deducciones" name="sueldo_d" id="sueldo_d-{{ $nomina->cod_nomina }}" value="{{ $nomina->sueldo_d }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Días Laborados</label>
                                <input type="number" placeholder="Días Laborados" name="dias_laborados" id="dias_laborados-{{ $nomina->cod_nomina }}" value="{{ $nomina->dias_laborados }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Horas Extra</label>
                                <input type="number" placeholder="Horas Extra" name="hora_extras" id="hora_extras-{{ $nomina->cod_nomina }}" value="{{ $nomina->hora_extras }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Comisión</label>comision
                                <input type="number" placeholder="Comisión" name="comision" id="comision-{{ $nomina->cod_nomina }}" value="{{ $nomina->comision }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Bonificación</label>
                                <input type="number" placeholder="Bonificación" name="bonificacion" id="bonificacion-{{ $nomina->cod_nomina }}" value="{{ $nomina->bonificacion }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Vacaciones</label>
                                <input type="text" placeholder="Vacaciones" name="vacaciones" id="vacaciones-{{ $nomina->cod_nomina }}" value="{{ $nomina->vacaciones }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Pago Final</label>
                                <input type="text" placeholder="Pago Final" name="pago_final" id="pago_final-{{ $nomina->cod_nomina }}" value="{{ $nomina->pago_final }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Estado</label>
                                <input type="text" placeholder="Estado" name="estado" id="estado-{{ $nomina->cod_nomina }}" value="{{ $nomina->estado }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
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

