<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-sm font-extrabold leading-4 text-gray-500 dark:text-gray-200 border-b border-gray-200 dark:border-indigo-600 bg-gray-200 dark:bg-indigo-800">ID</th>
                                <th class="px-6 py-3 text-sm font-extrabold leading-4 text-gray-500 dark:text-gray-200 border-b border-gray-200 dark:border-indigo-600 bg-gray-200 dark:bg-indigo-800">Nombre</th>
                                <th class="px-6 py-3 text-sm font-extrabold leading-4 text-gray-500 dark:text-gray-200 border-b border-gray-200 dark:border-indigo-600 bg-gray-200 dark:bg-indigo-800">Precio</th>
                                <th class="px-6 py-3 text-sm font-extrabold leading-4 text-gray-500 dark:text-gray-200 border-b border-gray-200 dark:border-indigo-600 bg-gray-200 dark:bg-indigo-800">Departamento</th>
                                <th class="px-6 py-3 text-sm font-extrabold leading-4 text-gray-500 dark:text-gray-200 border-b border-gray-200 dark:border-indigo-600 bg-gray-200 dark:bg-indigo-800">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                                <tr>
                                    <td class="py-4 px-6 whitespace-nowrap border-b border-gray-200 dark:border-indigo-600">{{$producto->id}}</td>
                                    <td class="py-4 px-6 whitespace-nowrap border-b border-gray-200 dark:border-indigo-600">{{$producto->nombre}}</td>
                                    <td class="py-4 px-6 whitespace-nowrap border-b border-gray-200 dark:border-indigo-600">{{$producto->precio}}</td>
                                    <td class="py-4 px-6 whitespace-nowrap border-b border-gray-200 dark:border-indigo-600">{{$producto->departamento_id}}</td>
                                    <td class="py-4 px-6 whitespace-nowrap border-b border-gray-200 dark:border-indigo-600">
                                        <a href="{{route('productos.edit',['producto'=>$producto])}}" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">Modificar</a>
                                        <form method="POST" action="{{route('productos.destroy',['producto'=>$producto])}}">
                                            @csrf
                                            @method('DELETE')
                                            <x-secondary-button type="submit">Eliminar</x-secondary-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a href="{{route('productos.create')}}" class="m-6 px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-sm text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 ease-in-out duration-150 inline-flex">Agregar producto</a>
            </div>
        </div>
    </div>
</x-app-layout>
