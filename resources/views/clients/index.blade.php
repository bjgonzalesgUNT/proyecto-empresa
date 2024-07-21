<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>
    <div class="py-12 px-40">
        @auth
            <div class="w-full flex justify-end items-center">
                <a href="{{ route('clients.create') }}"
                    class="px-3 py-1.5 rounded-md shadow-md bg-green-500 hover:ring-1 hover:bg-green-800 text-white">
                    Crear cliente
                </a>
            </div>
        @endauth
        <div class="w-full">
            <table class="mt-4 w-full">
                <thead>
                    <tr>
                        @include('components.table.table-th', ['value' => 'apellido'])
                        @include('components.table.table-th', ['value' => 'nombre'])
                        @include('components.table.table-th', ['value' => 'direccion'])
                        @include('components.table.table-th', ['value' => 'fecha nacimiento'])
                        @include('components.table.table-th', ['value' => 'edad'])
                        @include('components.table.table-th', ['value' => 'sueldo'])
                        @include('components.table.table-th', ['value' => 'estado'])
                        @include('components.table.table-th', ['value' => 'acciones'])
                    </tr>
                </thead>
                <tbody>
                    @foreach ($people as $person)
                        <tr>
                            @include('components.table.table-td', ['value' => $person->surname])
                            @include('components.table.table-td', ['value' => $person->name])
                            @include('components.table.table-td', ['value' => $person->address])
                            @include('components.table.table-td', ['value' => $person->birthday])
                            @include('components.table.table-td', ['value' => $person->age])
                            @include('components.table.table-td', ['value' => $person->salary])
                            @include('components.table.table-td', ['value' => $person->status])
                            @component('components.table.table-td-actions')
                                @include('components.buttons.btn-show', [
                                    'route' => 'clients.show',
                                    'id' => $person->id,
                                ])
                                @auth
                                    @include('components.buttons.btn-edit', [
                                        'route' => 'clients.edit',
                                        'id' => $person->id,
                                    ])
                                    @include('components.buttons.btn-delete', [
                                        'route' => 'clients.destroy',
                                        'id' => $person->id,
                                    ])
                                @endauth
                            @endcomponent
                        </tr>
                    @endforeach
            </table>
        </div>
        <div class="mt-4">
            {{ $people->links() }}
        </div>
    </div>
</x-app-layout>
