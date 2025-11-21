<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de aprendiz') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <p class="text-lg font-semibold">
                        {{ __('Hola :name, este es tu espacio personal de aprendizaje.', ['name' => auth()->user()->name]) }}
                    </p>
                    <p>
                        {{ __('Consulta tus actividades asignadas, comparte avances y mantente al día con tu líder.') }}
                    </p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>{{ __('Visualiza tus objetivos semanales.') }}</li>
                        <li>{{ __('Reporta avances y bloqueos para recibir apoyo rápido.') }}</li>
                        <li>{{ __('Accede a los recursos compartidos por tu líder.') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

