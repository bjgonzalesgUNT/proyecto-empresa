@csrf
<div class="mb-4 grid w-full grid-cols-2 gap-2">
    <label for="surname">Apellidos</label>
    <input
        type="text"
        id="surname"
        name="surname"
        class="rounded-md bg-black/5 p-1 disabled:cursor-not-allowed"
        value="{{ old("surname", $person->surname) }}"
        @disabled($disabled)
    />
    @error("surname")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="mb-4 grid w-full grid-cols-2 gap-2">
    <label for="name">Nombres</label>
    <input
        type="text"
        id="name"
        name="name"
        class="rounded-md bg-black/5 p-1 disabled:cursor-not-allowed"
        value="{{ old("name", $person->name) }}"
        @disabled($disabled)
    />
    @error("name")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="mb-4 grid w-full grid-cols-2 gap-2">
    <label for="address">Dirección</label>
    <input
        type="text"
        id="address"
        name="address"
        class="rounded-md bg-black/5 p-1 disabled:cursor-not-allowed"
        value="{{ old("address", $person->address) }}"
        @disabled($disabled)
    />
    @error("address")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="mb-4 grid w-full grid-cols-2 gap-2">
    <label for="birthday">Fecha de nacimiento</label>
    <input
        type="date"
        id="birthday"
        name="birthday"
        class="rounded-md bg-black/5 p-1 disabled:cursor-not-allowed"
        value="{{ old("birthday", $person->birthday) }}"
        @disabled($disabled)
    />
    @error("birthday")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="mb-4 grid w-full grid-cols-2 gap-2">
    <label for="age">Edad</label>
    <input
        type="number"
        id="age"
        name="age"
        class="rounded-md bg-black/5 p-1 disabled:cursor-not-allowed"
        value="{{ old("age", $person->age) }}"
        @disabled($disabled)
    />
    @error("age")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="mb-4 grid w-full grid-cols-2 gap-2">
    <label for="salary">Sueldo</label>
    <input
        type="number"
        id="salary"
        name="salary"
        class="rounded-md bg-black/5 p-1 disabled:cursor-not-allowed"
        value="{{ old("salary", $person->salary) }}"
        @disabled($disabled)
    />
    @error("salary")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="mb-4 grid w-full grid-cols-2 gap-2">
    <label for="status">Estado</label>
    <select
        name="status"
        id="status"
        class="rounded-md bg-black/5 p-1 disabled:cursor-not-allowed"
        @disabled($disabled)
    >
        <option value="1" {{ $person->status == 1 ? "selected" : null }}>
            Activo
        </option>
        <option value="0" {{ $person->status == 0 ? "selected" : null }}>
            Inactivo
        </option>
    </select>
    @error("status")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="mb-4 grid w-full grid-cols-2 gap-2">
    <label for="image">Imagen</label>
    <input
        type="file"
        id="image"
        name="image"
        class="rounded-md bg-black/5 p-1 disabled:cursor-not-allowed"
        value="{{ old("image", $person->image) }}"
        @disabled($disabled)
    />
    @error("image")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror

    <div class="relative mt-4" id="previewCtn">
        <img
            src="{{ isset($person->image) ? asset("storage/" . $person->image) : null }}"
            alt="Foto de perfil"
            id="preview"
            class="w-full rounded-md"
        />
        <button
            type="button"
            class="absolute right-4 top-4 size-12 rounded-full bg-cyan-800 text-white"
            id="removePreview"
            @disabled($disabled)
        >
            X
        </button>
    </div>
</div>
@isset($btnTitle)
    <input
        type="submit"
        value="{{ $btnTitle }}"
        class="col-span-2 w-full cursor-pointer rounded-md bg-indigo-800 p-2 uppercase text-white transition-colors duration-150 hover:bg-indigo-950 disabled:cursor-not-allowed"
    />
@endisset

<script src="{{ asset("js/client.js") }}"></script>
