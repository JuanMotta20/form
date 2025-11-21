<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de administración') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <p class="text-lg font-semibold">
                        {{ __('Hola :name, tienes control total del sistema.', ['name' => auth()->user()->name]) }}
                    </p>
                    <p>
                        {{ __('Desde aquí puedes gestionar usuarios, roles y supervisar las actividades de todos los equipos.') }}
                    </p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>{{ __('Crear y actualizar usuarios con cualquier rol.') }}</li>
                        <li>{{ __('Acceder a los reportes consolidados de desempeño.') }}</li>
                        <li>{{ __('Coordinar con líderes y definir nuevas metas para aprendices.') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

