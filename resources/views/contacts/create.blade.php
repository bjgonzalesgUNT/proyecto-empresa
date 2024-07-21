<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear cliente') }}
        </h2>
    </x-slot>
    <div class="py-12 px-40">
        <div class="flex flex-col justify-center w-full items-center">
            <form method="POST" class="w-1/3 flex flex-col gap-2 shadow-md rounded-md p-2"
                action="{{ route('contacts.store') }}">
                @csrf
                @include('contacts.partials.form-fields', ['btnTitle' => 'guardar'])
            </form>
        </div>
    </div>
</x-app-layout>
