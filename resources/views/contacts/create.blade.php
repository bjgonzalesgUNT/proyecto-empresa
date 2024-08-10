<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __("Crear cliente") }}
        </h2>
    </x-slot>
    <div class="px-40 py-12">
        <div class="flex w-full flex-col items-center justify-center">
            <form
                method="POST"
                class="flex w-1/3 flex-col gap-2 rounded-md p-2 shadow-md"
                action="{{ route("contacts.store") }}"
            >
                @csrf
                @include("contacts.partials.form-fields", ["btnTitle" => "guardar"])
            </form>
        </div>
    </div>
</x-app-layout>
