<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar cliente ' . $person->id) }}
        </h2>
    </x-slot>
    <div class="py-12 px-40">
        <div class="w-full flex justify-center">
            <form method="POST" action="{{ route('clients.update', $person) }}"
                class="bg-gray-200 p-5 rounded-md shadow-md flex flex-col gap-4 w-1/2">
                @csrf
                @method('PATCH')
                @include('clients.partials.form-fields', ['btnTitle' => 'Actualizar', 'disabled' => false])
            </form>
        </div>
    </div>
</x-app-layout>
