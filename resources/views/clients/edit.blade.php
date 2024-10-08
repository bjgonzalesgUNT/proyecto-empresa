<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __("Editar cliente " . $person->id) }}
        </h2>
    </x-slot>
    <div class="px-40 py-12">
        <div class="flex w-full justify-center">
            <form
                method="POST"
                action="{{ route("clients.update", $person) }}"
                class="flex w-1/2 flex-col gap-4 rounded-md bg-white/50 p-5 shadow-md"
                enctype="multipart/form-data"
            >
                @csrf
                @method("PATCH")
                @include("clients.partials.form-fields", ["btnTitle" => "Actualizar", "disabled" => false])
            </form>
        </div>
    </div>
</x-app-layout>
