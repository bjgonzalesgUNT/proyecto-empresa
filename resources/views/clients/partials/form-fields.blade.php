@csrf
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="surname">Apellidos</label>
    <input type="text" id="surname" name="surname" class="p-1 rounded-md disabled:cursor-not-allowed bg-slate-200"
        value="{{ old('surname', $person->surname) }}" @disabled($disabled)>
    @error('surname')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="name">Nombres</label>
    <input type="text" id="name" name="name" class="p-1 rounded-md disabled:cursor-not-allowed bg-slate-200"
        value="{{ old('name', $person->name) }}" @disabled($disabled)>
    @error('name')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="address">Dirección</label>
    <input type="text" id="address" name="address" class="p-1 rounded-md disabled:cursor-not-allowed bg-slate-200"
        value="{{ old('address', $person->address) }}" @disabled($disabled)>
    @error('address')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="birthday">Fecha de nacimiento</label>
    <input type="date" id="birthday" name="birthday" class="p-1 rounded-md disabled:cursor-not-allowed bg-slate-200"
        value="{{ old('birthday', $person->birthday) }}" @disabled($disabled)>
    @error('birthday')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="age">Edad</label>
    <input type="number" id="age" name="age" class="p-1 rounded-md disabled:cursor-not-allowed bg-slate-200"
        value="{{ old('age', $person->age) }}" @disabled($disabled)>
    @error('age')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="salary">Sueldo</label>
    <input type="number" id="salary" name="salary" class="p-1 rounded-md disabled:cursor-not-allowed bg-slate-200"
        value="{{ old('salary', $person->salary) }}" @disabled($disabled)>
    @error('salary')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<div class="w-full mb-4 grid grid-cols-2 gap-2">
    <label for="status">Estado</label>
    <select name="status" id="status" class="p-1 rounded-md disabled:cursor-not-allowed bg-slate-200"
        @disabled($disabled)>
        <option value="1" {{ $person->status == 1 ? 'selected' : null }}>Activo</option>
        <option value="0" {{ $person->status == 0 ? 'selected' : null }}>Inactivo</option>
    </select>
    @error('status')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
@isset($btnTitle)
    <input type="submit" value="{{ $btnTitle }}"
        class="w-full col-span-2 bg-indigo-800 text-white p-2 rounded-md disabled:cursor-not-allowed bg-slate-200 cursor-pointer hover:bg-indigo-950 transition-colors duration-150 uppercase">
@endisset
