@csrf
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="surname">Apellidos</label>
    <input type="text" id="surname" name="surname" class="p-1 rounded-md bg-slate-200"
        value="{{ old('surname', $person->surname) }}">
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="name">Nombres</label>
    <input type="text" id="name" name="name" class="p-1 rounded-md bg-slate-200"
        value="{{ old('name', $person->name) }}">
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="address">Dirección</label>
    <input type="text" id="address" name="address" class="p-1 rounded-md bg-slate-200"
        value="{{ old('address', $person->address) }}">
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="birthday">Fecha de nacimiento</label>
    <input type="date" id="birthday" name="birthday" class="p-1 rounded-md bg-slate-200"
        value="{{ old('birthday', $person->birthday) }}">
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="age">Edad</label>
    <input type="number" id="age" name="age" class="p-1 rounded-md bg-slate-200"
        value="{{ old('age', $person->age) }}">
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="salary">Sueldo</label>
    <input type="number" id="salary" name="salary" class="p-1 rounded-md bg-slate-200"
        value="{{ old('salary', $person->salary) }}">
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="status">Estado</label>
    <select name="status" id="status" class="p-1 rounded-md bg-slate-200">
        <option value="1" {{ $person->status == 1 ? "selected" : null }}>Activo</option>
        <option value="0" {{ $person->status == 0 ? "selected" : null }}>Inactivo</option>
    </select>
</div>
<input type="submit" value="{{ $btnTitle }}"
    class="w-full col-span-2 bg-indigo-800 text-white p-2 rounded-md cursor-pointer hover:bg-indigo-950 transition-colors duration-150 uppercase">
