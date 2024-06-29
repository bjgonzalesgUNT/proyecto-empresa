@extends('layouts.app')

@section('title')
    contactos
@endsection

@section('content')
    <div class="w-full flex justify-end items-center">
        <a class="p-3 rounded-md shadow-md bg-indigo-800 hover:ring-1 hover:bg-indigo-950 hover:ring-indigo-300 text-white"
            href="{{ route('contacts.create') }}">
            Crear contacto
        </a>
    </div>
    <div class="w-full px-40">
        <table class="mt-4 table-fixe w-full">
            <thead>
                <tr>
                    @include('components.table.table-th', ['value' => 'nombre'])
                    @include('components.table.table-th', ['value' => 'email'])
                    @include('components.table.table-th', ['value' => 'asunto'])
                    @include('components.table.table-th', ['value' => 'mensaje'])
                    @include('components.table.table-th', ['value' => 'acciones'])
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                    <tr>
                        @include('components.table.table-td', ['value' => $contact->name])
                        @include('components.table.table-td', ['value' => $contact->email])
                        @include('components.table.table-td', ['value' => $contact->case])
                        @include('components.table.table-td', ['value' => $contact->message])
                        @component('components.table.table-td-actions')
                            @slot('show')
                                @include('components.buttons.btn-show', [
                                    'route' => 'services.show',
                                    'id' => $contact->id,
                                ])
                            @endslot
                            @slot('edit')
                                @include('components.buttons.btn-edit', [
                                    'route' => 'services.edit',
                                    'id' => $contact->id,
                                ])
                            @endslot
                            @slot('delete')
                                @include('components.buttons.btn-delete', [
                                    'route' => 'services.destroy',
                                    'id' => $contact->id,
                                ])
                            @endslot
                        @endcomponent
                    </tr>
                @empty
                    <tr class="text-xl font-bold uppercase text-red-500">
                        <td> No existen servicios para mostrar</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
