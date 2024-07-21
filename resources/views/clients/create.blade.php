<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear cliente') }}
        </h2>
    </x-slot>
    <div class="py-12 px-40">
        <div class="w-full flex justify-center">
            <form method="POST" action="{{ route('clients.store') }}"
                class="bg-gray-200 p-5 rounded-md shadow-md flex flex-col gap-4 w-1/2">
                @method('POST')
                @include('clients.partials.form-fields', ['btnTitle' => 'Guardar'])
            </form>
        </div>
    </div>
</x-app-layout>
