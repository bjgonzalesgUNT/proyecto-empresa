@extends('layouts.app')

@section('title')
    clientes
@endsection

@section('content')
    <div class="w-full mb-4">
        <a href="{{ route('clients.create') }}" class="bg-indigo-800 text-white p-2 rounded-md">
            Crear cliente
        </a>
    </div>
    <div class="w-full mb-4">
        <div>
            <h2 class="text-2xl font-bold">Listado de clientes</h2>
            <table class="mt-4">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-y-2 border-black">Apellido</th>
                        <th class="px-4 py-2 border-y-2 border-black">Nombre</th>
                        <th class="px-4 py-2 border-y-2 border-black">Direccion</th>
                        <th class="px-4 py-2 border-y-2 border-black">Fecha Nacimiento</th>
                        <th class="px-4 py-2 border-y-2 border-black">Edad</th>
                        <th class="px-4 py-2 border-y-2 border-black">Sueldo</th>
                        <th class="px-4 py-2 border-y-2 border-black">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($people as $person)
                        <tr>
                            <td class="px-4 py-2 border-y-2 border-black">{{ $person->surname }}</td>
                            <td class="px-4 py-2 border-y-2 border-black">{{ $person->name }}</td>
                            <td class="px-4 py-2 border-y-2 border-black">{{ $person->address }}</td>
                            <td class="px-4 py-2 border-y-2 border-black">{{ $person->birthday }}</td>
                            <td class="px-4 py-2 border-y-2 border-black">{{ $person->age }}</td>
                            <td class="px-4 py-2 border-y-2 border-black">{{ $person->salary }}</td>
                            <td class="px-4 py-2 border-y-2 border-black">{{ $person->status }}</td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
