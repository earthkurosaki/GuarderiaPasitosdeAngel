<x-app-layout>
    @php
    $empleado = DB::select('select *from empleados');
    $tutor = DB::select('select *from tutores');
    $servicio = DB::select('select *from servicios');
    $nino = DB::select('select *from nino');
   @endphp
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="GET" action="{{ route('pagos.store') }}">
                        @csrf
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Pagos') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Registra un {{ __('pago') }}</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('View_Pagos') }}"
                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Atrás</a>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-black">Tutor</label>
                                <select name="id_tutor">
                                    @foreach ($tutor as $pu)
                                    <option value="{{$pu -> id_tutor}}">{{$pu -> nombre }}</option>
                                    @endforeach
                                   
                                </select>
                            </div>

                  <div>
                    <label class="block text-sm font-bold text-black">Niño </label>
                    <select name="id_nino">
                        @foreach ($nino as $pu)
                        <option value="{{$pu -> id_nino}}">{{$pu -> nombre }}</option>
                        @endforeach
                       
                    </select>
                </div>

                  <div>
                    <label class="block text-sm font-bold text-black">Servicio</label>
                    <select name="id_servicio">
                        @foreach ($servicio as $pu)
                        <option value="{{$pu -> id_servicio}}">{{$pu -> nombre }}</option>
                        @endforeach
                       
                    </select>
                </div>


                            <div>
                                <label class="block text-sm font-bold text-black">Actividad adicional</label>
                                <input type="text" placeholder="Actividad adicional" name="actividad_adicional"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Monto</label>
                                <input type="number" placeholder="Monto" name="monto"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Efectivo</label>
                                <input type="number" placeholder="Monto neto" name="monto_neto"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Metodo de pago</label>
                                <select name="metodo_pago" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="Efectivo">Efectivo</option>
                                    <option value="Tarjeta">Tarjeta</option>
                                


                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Descripción</label>
                                <input type="text" placeholder="Descripción" name="descripcion"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Empleado</label>
                                <select name="id_empleados">
                                    @foreach ($empleado as $pu)
                                    <option value="{{$pu -> id_empleados}}">{{$pu -> nombre }}</option>
                                    @endforeach
                                   
                                </select>
                            </div>

                        

                            <div>
                                <label class="block text-sm font-bold text-black">Facturado</label>
                                <select name="facturado" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                


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
