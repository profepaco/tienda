<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Departamentos') }}
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departamentos as $departamento)
                                <tr>
                                    <td class="py-4 px-6 whitespace-nowrap border-b border-gray-200 dark:border-indigo-600">{{$departamento->id}}</td>
                                    <td class="py-4 px-6 whitespace-nowrap border-b border-gray-200 dark:border-indigo-600">{{$departamento->nombre}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
