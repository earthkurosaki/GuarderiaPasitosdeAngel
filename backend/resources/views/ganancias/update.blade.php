<x-app-layout>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('ganancias.update', ['id_ganancia' => $ganancia->id_ganancia]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="space-y-6">
                            <div class="sm:flex sm:items-center">
                                <div class="sm:flex-auto">
                                    <h1 class="text-2xl font-semibold leading-6 text-gray-900">{{ __('Ganancias') }}</h1>
                                    <p class="mt-2 mb-5 text-sm text-gray-700">Actualiza una {{ __('ganancia') }}</p>
                                </div>
                                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                    <a type="button" href="{{ route('View_Ganancias') }}"
                                        class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Atrás</a>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Descripción</label>
                                <input type="text" placeholder="Descripción" name="descripcion" id="descripcion-{{ $ganancia->id_ganancia }}" value="{{ $ganancia->descripcion }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>
  
                            <div>
                                <label class="block text-sm font-bold text-black">Monto</label>
                                <input type="text" placeholder="Monto" name="monto" id="monto-{{ $ganancia->id_ganancia }}" value="{{ $ganancia->monto }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-black">Fecha</label>
                                <input type="text" placeholder="Fecha" name="fecha" id="fecha-{{ $ganancia->id_ganancia }}" value="{{ $ganancia->fecha }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"/>
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

