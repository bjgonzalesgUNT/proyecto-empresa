<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __("Servicios") }}
        </h2>
    </x-slot>
    <div class="px-40 py-12">
        @auth
            <div class="flex w-full items-center justify-end">
                <a
                    class="rounded-md bg-green-500 p-3 text-white shadow-md transition-colors duration-100 hover:bg-green-800"
                    href="{{ route("services.create") }}"
                >
                    Crear servicio
                </a>
            </div>
        @endauth

        <div class="w-full">
            <table class="table-fixe mt-4 w-full">
                <thead>
                    <tr>
                        @include("components.table.table-th", ["value" => "titulo"])
                        @include("components.table.table-th", ["value" => "descripcion"])
                        @include("components.table.table-th", ["value" => "categoria"])
                        @include("components.table.table-th", ["value" => "acciones"])
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                        <tr>
                            @include("components.table.table-td", ["value" => $service->title])
                            @include("components.table.table-td", ["value" => $service->description])
                            <td
                                class="border-b border-b-gray-300 py-2 text-center text-lg normal-case"
                            >
                                @if ($service->category)
                                    <a
                                        href="{{ route("categories.show", $service->category) }}"
                                        class="underline transition-colors hover:text-red-500"
                                    >
                                        {{ $service->category->name }}
                                    </a>
                                @endif
                            </td>
                            @component("components.table.table-td-actions")
                                @include(
                                    "components.buttons.btn-show",
                                    [
                                        "route" => "services.show",
                                        "id" => $service->id,
                                    ]
                                )
                                @auth
                                    @include(
                                        "components.buttons.btn-edit",
                                        [
                                            "route" => "services.edit",
                                            "id" => $service->id,
                                        ]
                                    )
                                    @include(
                                        "components.buttons.btn-delete",
                                        [
                                            "route" => "services.destroy",
                                            "id" => $service->id,
                                        ]
                                    )
                                @endauth
                            @endcomponent
                        </tr>
                    @empty
                        <tr class="text-xl font-bold uppercase text-red-500">
                            <td>No existen servicios para mostrar</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4">{{ $services->links() }}</div>
        </div>
    </div>
    @if (session("status"))
        <div
            class="fixed bottom-5 right-5 rounded-lg bg-green-500 p-4 text-lg text-white"
        >
            {{ session("status") }}
        </div>
    @endif
</x-app-layout>
