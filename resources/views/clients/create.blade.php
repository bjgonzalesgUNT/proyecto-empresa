<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __("Crear cliente") }}
        </h2>
    </x-slot>
    <div class="py-12 lg:px-40">
        <div class="flex w-full justify-center">
            <form
                method="POST"
                action="{{ route("clients.store") }}"
                enctype="multipart/form-data"
                class="flex w-1/2 flex-col gap-4 rounded-md bg-white/50 p-5 shadow-md"
            >
                @method("POST")
                @include("clients.partials.form-fields", ["btnTitle" => "Guardar", "disabled" => false])
            </form>
        </div>
    </div>
</x-app-layout>
