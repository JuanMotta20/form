<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de líder') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <p class="text-lg font-semibold">
                        {{ __('Hola :name, aquí puedes coordinar a tu equipo.', ['name' => auth()->user()->name]) }}
                    </p>
                    <p>
                        {{ __('Monitorea el progreso de los aprendices y comparte retroalimentación en un solo lugar.') }}
                    </p>
                    <ul class="list-disc list-inside text-gray-700 space-y-2">
                        <li>{{ __('Revisa los objetivos activos de tu grupo.') }}</li>
                        <li>{{ __('Registra notas y avances por aprendiz.') }}</li>
                        <li>{{ __('Comparte requerimientos con el administrador.') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

