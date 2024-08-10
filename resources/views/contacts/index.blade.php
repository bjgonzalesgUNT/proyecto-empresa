<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __("Crear cliente") }}
        </h2>
    </x-slot>
    <div class="px-40 py-12">
        @auth
            <div class="flex w-full items-center justify-end">
                <a
                    href="{{ route("contacts.create") }}"
                    class="rounded-md bg-green-500 px-3 py-1.5 text-white shadow-md hover:bg-green-800 hover:ring-1"
                >
                    Crear contacto
                </a>
            </div>
        @endauth

        <div class="w-full">
            <table class="table-fixe mt-4 w-full">
                <thead>
                    <tr>
                        @include("components.table.table-th", ["value" => "nombre"])
                        @include("components.table.table-th", ["value" => "email"])
                        @include("components.table.table-th", ["value" => "asunto"])
                        @include("components.table.table-th", ["value" => "mensaje"])
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $contact)
                        <tr>
                            @include("components.table.table-td", ["value" => $contact->name])
                            @include("components.table.table-td", ["value" => $contact->email])
                            @include("components.table.table-td", ["value" => $contact->case])
                            @include("components.table.table-td", ["value" => $contact->message])
                        </tr>
                    @empty
                        <tr class="text-xl font-bold uppercase text-red-500">
                            <td>No existen servicios para mostrar</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
