@extends('layouts.app')

@section('title')
    ver cliente #{{ $person->id }}
@endsection

@section('content')
    <form class="px-10 md:px-32 lg:px-72 mt-4">
        <div class="w-full mb-4 grid grid-cols-2 gap-2">
            <label for="surname">Apellidos</label>
            <input type="text" id="surname" name="surname" class="p-1 rounded-md bg-slate-200"
                value="{{ $person->surname }}" disabled>
        </div>
        <div class="w-full mb-4 grid grid-cols-2 gap-2">
            <label for="name">Nombres</label>
            <input type="text" id="name" name="name" class="p-1 rounded-md bg-slate-200"
                value="{{ $person->name }}" disabled>
        </div>
        <div class="w-full mb-4 grid grid-cols-2 gap-2">
            <label for="address">Dirección</label>
            <input type="text" id="address" name="address" class="p-1 rounded-md bg-slate-200"
                value="{{ $person->address }}" disabled>
        </div>
        <div class="w-full mb-4 grid grid-cols-2 gap-2">
            <label for="birthday">Fecha de nacimiento</label>
            <input type="date" id="birthday" name="birthday" class="p-1 rounded-md bg-slate-200"
                value="{{ $person->birthday }}" disabled>
        </div>
        <div class="w-full mb-4 grid grid-cols-2 gap-2">
            <label for="age">Edad</label>
            <input type="number" id="age" name="age" class="p-1 rounded-md bg-slate-200"
                value="{{ $person->age }}" disabled>
        </div>
        <div class="w-full mb-4 grid grid-cols-2 gap-2">
            <label for="salary">Sueldo</label>
            <input type="number" id="salary" name="salary" class="p-1 rounded-md bg-slate-200"
                value="{{ $person->salary }}" disabled>
        </div>
        <div class="w-full mb-4 grid grid-cols-2 gap-2">
            <label for="status">Estado</label>
            <select name="status" id="status" class="p-1 rounded-md bg-slate-200" disabled>
                <option value="1" {{ $person->status == 1 ? 'selected' : null }}>Activo</option>
                <option value="0" {{ $person->status == 0 ? 'selected' : null }}>Inactivo</option>
            </select>
        </div>
    </form>
@endsection
