@extends('layouts.app')

@section('title')
    clientes
@endsection

@section('content')
    <div class="w-full flex justify-end items-center">
        <a href="{{ route('clients.create') }}"
            class="p-3 rounded-md shadow-md bg-indigo-800 hover:ring-1 hover:bg-indigo-950 hover:ring-indigo-300 text-white">
            Crear cliente
        </a>
    </div>
    <div class="w-full px-40">

        <h2 class="text-2xl font-bold">Listado de clientes</h2>
        <table class="mt-4 table-fixe w-full">
            <thead>
                <tr>
                    @include('components.table.table-th', ['value' => 'apellido'])
                    @include('components.table.table-th', ['value' => 'nombre'])
                    @include('components.table.table-th', ['value' => 'direccion'])
                    @include('components.table.table-th', ['value' => 'fecha nacimiento'])
                    @include('components.table.table-th', ['value' => 'edad'])
                    @include('components.table.table-th', ['value' => 'sueldo'])
                    @include('components.table.table-th', ['value' => 'estado'])
                    @include('components.table.table-th', ['value' => 'acciones'])
                </tr>
            </thead>
            <tbody>
                @foreach ($people as $person)
                    <tr>
                        @include('components.table.table-td', ['value' => $person->surname])
                        @include('components.table.table-td', ['value' => $person->name])
                        @include('components.table.table-td', ['value' => $person->address])
                        @include('components.table.table-td', ['value' => $person->birthday])
                        @include('components.table.table-td', ['value' => $person->age])
                        @include('components.table.table-td', ['value' => $person->salary])
                        @include('components.table.table-td', ['value' => $person->status])
                        @component('components.table.table-td-actions')
                            @slot('show')
                                @include('components.buttons.btn-show', [
                                    'route' => 'clients.show',
                                    'id' => $person->id,
                                ])
                            @endslot
                            @slot('edit')
                                @include('components.buttons.btn-edit', [
                                    'route' => 'clients.edit',
                                    'id' => $person->id,
                                ])
                            @endslot
                            @slot('delete')
                                @include('components.buttons.btn-delete', [
                                    'route' => 'clients.destroy',
                                    'id' => $person->id,
                                ])
                            @endslot
                        @endcomponent
                    </tr>
                @endforeach
        </table>
    </div>
@endsection
