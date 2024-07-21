<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear cliente') }}
        </h2>
    </x-slot>
    <div class="py-12 px-40">
        @auth
            <div class="w-full flex justify-end items-center">
                <a href="{{ route('contacts.create') }}"
                    class="px-3 py-1.5 rounded-md shadow-md bg-green-500 hover:ring-1 hover:bg-green-800 text-white">
                    Crear contacto
                </a>
            </div>
        @endauth
        <div class="w-full">
            <table class="mt-4 table-fixe w-full">
                <thead>
                    <tr>
                        @include('components.table.table-th', ['value' => 'nombre'])
                        @include('components.table.table-th', ['value' => 'email'])
                        @include('components.table.table-th', ['value' => 'asunto'])
                        @include('components.table.table-th', ['value' => 'mensaje'])
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                        <tr>
                            @include('components.table.table-td', ['value' => $contact->name])
                            @include('components.table.table-td', ['value' => $contact->email])
                            @include('components.table.table-td', ['value' => $contact->case])
                            @include('components.table.table-td', ['value' => $contact->message])
                        </tr>
                    @empty
                        <tr class="text-xl font-bold uppercase text-red-500">
                            <td> No existen servicios para mostrar</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
