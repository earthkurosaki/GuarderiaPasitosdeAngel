<x-app-layout>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('gastos.update', ['id_gasto' => $gasto->id_gasto]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Gastos') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Actualiza un {{ __('gasto') }}</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('View') }}"
                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Atrás</a>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Concepto</label>
                                <input type="text" placeholder="Concepto" name="concepto" id="concepto-{{ $gasto->id_gasto }}" value="{{ $gasto->concepto }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
  
                            <div>
                                <label class="block text-sm font-bold text-black">Monto</label>
                                <input type="text" placeholder="Monto" name="monto" id="monto-{{ $gasto->id_gasto }}" value="{{ $gasto->monto }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Fecha</label>
                                <input type="text" placeholder="Fecha" name="fecha" id="fecha-{{ $gasto->id_gasto }}" value="{{ $gasto->fecha }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Descripción</label>
                                <input type="text" placeholder="Descripción" name="descripcion" id="descripcion-{{ $gasto->id_gasto }}" value="{{ $gasto->descripcion }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
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

