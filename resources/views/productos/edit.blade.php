<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{route('productos.update',['producto'=>$producto])}}" novalidate>
                        @csrf
                        @method('PUT')
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre')" />
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="$producto->nombre" required autofocus autocomplete="nombre"/>
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="descripcion" :value="__('Descripción')" />
                            <textarea class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-md dark:bg-gray-900" id="descripcion" name="descripcion" required autofocus>{{$producto->descripcion}}</textarea>
                            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="precio" :value="__('Precio')" />
                            <x-text-input id="precio" class="block mt-1 w-full" type="number" name="precio" :value="$producto->precio" required autofocus autocomplete="precio"/>
                            <x-input-error :messages="$errors->get('precio')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="departamento_id" :value="__('Departamento')" />
                            <select id="departamento_id" name="departamento_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-md dark:bg-gray-900">
                                <option>Selecciona un departamento</option>
                                @foreach($departamentos as $departamento)
                                    <option value="{{$departamento->id}}" {{$producto->departamento_id === $departamento->id ? "selected":""}}>{{$departamento->nombre}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('departamento_id')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-primary-button>
                                {{__('Actualizar')}}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
