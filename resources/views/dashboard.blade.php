<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel general') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-lg font-semibold mb-2">
                        {{ __('Hola, :name', ['name' => auth()->user()->name]) }}
                    </p>
                    <p class="mb-6">
                        {{ __('Tu rol actual es: :role', ['role' => ucfirst(auth()->user()->role)]) }}
                    </p>

                    @php
                        $roleRoutes = [
                            'administrador' => ['route' => 'admin.dashboard', 'label' => 'Ir al panel de administración'],
                            'lider' => ['route' => 'lider.dashboard', 'label' => 'Ir al panel de líder'],
                            'aprendiz' => ['route' => 'aprendiz.dashboard', 'label' => 'Ir al panel de aprendiz'],
                        ];
                        $currentRole = auth()->user()->role;
                    @endphp

                    @if(isset($roleRoutes[$currentRole]))
                        <a
                            href="{{ route($roleRoutes[$currentRole]['route']) }}"
                            class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mb-6"
                        >
                            {{ __($roleRoutes[$currentRole]['label']) }}
                        </a>
                    @endif

                    <p class="text-sm text-gray-600">
                        {{ __('Necesitas actualizar tus datos? Visita la sección de perfil en el menú superior.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
