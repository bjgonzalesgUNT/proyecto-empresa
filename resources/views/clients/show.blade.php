<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear cliente') }}
        </h2>
    </x-slot>
    <div class="py-12 px-40">
        <div class="w-full flex justify-center">
            <form class="bg-gray-50 p-5 rounded-md shadow-md flex flex-col gap-4 w-1/2">
                @include('clients.partials.form-fields', ['disabled' => true])
            </form>
        </div>
    </div>
</x-app-layout>
