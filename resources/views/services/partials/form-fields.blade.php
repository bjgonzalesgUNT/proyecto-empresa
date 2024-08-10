@csrf
<div class="w-full">
    <label for="title" class="mb-2 text-lg font-semibold capitalize">
        titulo
    </label>
    <input
        type="text"
        name="title"
        id="title"
        class="w-full rounded-md p-1 shadow-md disabled:cursor-not-allowed disabled:bg-gray-300"
        value="{{ old("title", $service->title) }}"
        @disabled($disabled)
    />
    @error("title")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="w-full">
    <label for="description" class="mb-2 text-lg font-semibold capitalize">
        {{ __("descripcion") }}
    </label>
    <input
        type="text"
        name="description"
        id="description"
        class="w-full rounded-md p-1 shadow-md disabled:cursor-not-allowed disabled:bg-gray-300"
        value="{{ old("description", $service->description) }}"
        @disabled($disabled)
    />
    @error("description")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="w-full">
    <label for="description" class="mb-2 text-lg font-semibold capitalize">
        {{ __("Categoria") }}
    </label>
    <select
        name="category_id"
        id="category_id"
        class="w-full rounded-md p-1 shadow-md disabled:cursor-not-allowed disabled:bg-gray-300"
        @disabled($disabled)
    >
        <option value="">{{ __("Seleccione una categoria") }}</option>
        @foreach ($categories as $category)
            <option
                value="{{ $category->id }}"
                {{ old("category_id", $service->category_id) == $category->id ? "selected" : "" }}
            >
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>
<div class="w-full">
    <label for="image" class="mb-2 text-lg font-semibold capitalize">
        {{ __("Imagen") }}
    </label>
    <input
        type="file"
        name="image"
        id="image"
        class="w-full rounded-md p-1 shadow-md disabled:cursor-not-allowed disabled:bg-gray-300"
        value="{{ old("image", $service->image) }}"
        @disabled($disabled)
    />
    @error("image")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror

    <div class="relative hidden" id="previewCtn">
        <img
            src="{{ asset("storage/" . $service->image) }}"
            alt="{{ $service->title }}"
            class="h-64 w-full rounded-md object-cover shadow-md"
            id="preview"
        />
        <button
            type="button"
            id="removeImg"
            class="absolute right-4 top-4 size-10 rounded-full bg-white text-black transition-colors hover:bg-cyan-800 hover:text-white disabled:cursor-not-allowed"
            @disabled($disabled)
        >
            X
        </button>
    </div>
</div>
@if (! $disabled)
    <input
        type="submit"
        class="w-full cursor-pointer rounded-md bg-indigo-800 p-2 font-bold uppercase text-white transition-all duration-300 ease-in-out hover:bg-indigo-900 hover:ring-2 hover:ring-white"
        value="{{ $btnTitle }}"
    />
@endif

<script src="{{ asset("js/service.js") }}"></script>
