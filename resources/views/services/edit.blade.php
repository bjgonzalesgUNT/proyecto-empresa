<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __("Editar servicio #" . $service->id) }}
        </h2>
    </x-slot>
    <div class="px-40 py-12">
        <div class="flex w-full justify-center">
            <form
                method="POST"
                class="flex w-1/2 flex-col gap-4 rounded-md bg-gray-200 p-5 shadow-md"
                enctype="multipart/form-data"
                action="{{ route("services.update", $service) }}"
            >
                @csrf
                @method("PATCH")
                @include("services.partials.form-fields", ["btnTitle" => "actualizar", "disabled" => false])
            </form>
        </div>
    </div>
</x-app-layout>