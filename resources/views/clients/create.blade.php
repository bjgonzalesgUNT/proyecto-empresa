@extends('layouts.app')

@section('title')
    Crear cliente
@endsection

@section('content')
    <div class="w-full flex-col gap-4 flex items-center justify-center">
        @if ($errors->any())
            <div class="w-3/4">
                <ul class="grid grid-cols-1 gap-2">
                    @foreach ($errors->all() as $error)
                        <li class="bg-red-500 text-white p-1 rounded-md text-center">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('clients.store') }}" class="w-3/4">
            @csrf
            @method('POST')
            <div class="w-full mb-4 grid grid-cols-2 gap-2">
                <label for="surname">Apellidos</label>
                <input type="text" id="surname" name="surname" class="p-1 rounded-md bg-slate-300">
            </div>
            <div class="w-full mb-4 grid grid-cols-2 gap-2">
                <label for="name">Nombres</label>
                <input type="text" id="name" name="name" class="p-1 rounded-md bg-slate-300">
            </div>
            <div class="w-full mb-4 grid grid-cols-2 gap-2">
                <label for="address">Dirección</label>
                <input type="text" id="address" name="address" class="p-1 rounded-md bg-slate-300">
            </div>
            <div class="w-full mb-4 grid grid-cols-2 gap-2">
                <label for="birthday">Fecha de nacimiento</label>
                <input type="date" id="birthday" name="birthday" class="p-1 rounded-md bg-slate-300">
            </div>
            <div class="w-full mb-4 grid grid-cols-2 gap-2">
                <label for="age">Edad</label>
                <input type="number" id="age" name="age" class="p-1 rounded-md bg-slate-300">
            </div>
            <div class="w-full mb-4 grid grid-cols-2 gap-2">
                <label for="salary">Sueldo</label>
                <input type="number" id="salary" name="salary" class="p-1 rounded-md bg-slate-300">
            </div>
            <div class="w-full mb-4 grid grid-cols-2 gap-2">
                <label for="status">Estado</label>
                <select name="status" id="status" class="p-1 rounded-md bg-slate-300">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
            <input type="submit" value="Guardar"
                class="w-full col-span-2 bg-indigo-800 text-white p-2 rounded-md cursor-pointer hover:bg-indigo-950 transition-colors duration-150">
        </form>
    </div>
@endsection
