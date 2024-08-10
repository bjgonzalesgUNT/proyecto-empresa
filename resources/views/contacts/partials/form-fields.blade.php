@csrf
<div class="w-full">
    <label for="name">Titulo</label>
    <input
        type="text"
        name="name"
        class="w-full rounded-md p-1 shadow-md"
        value="{{ old("name", $contact->name) }}"
    />
    @error("name")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="w-full">
    <label for="email">Email</label>
    <input
        type="email"
        name="email"
        class="w-full rounded-md p-1 shadow-md"
        value="{{ old("email", $contact->email) }}"
    />
    @error("email")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="w-full">
    <label for="case">Asunto</label>
    <input
        type="case"
        name="case"
        class="w-full rounded-md p-1 shadow-md"
        value="{{ old("case", $contact->case) }}"
    />
    @error("case")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="w-full">
    <label for="message">Mensaje</label>
    <textarea
        name="message"
        class="h-32 w-full resize-none rounded-md p-1 shadow-md"
    >
{{ old("message", $contact->message) }}</textarea
    >
    @error("case")
        <p class="font-semibold text-red-500">{{ $message }}</p>
    @enderror
</div>
<input
    type="submit"
    class="w-full cursor-pointer rounded-md bg-indigo-800 p-2 font-bold uppercase text-white transition-all duration-300 ease-in-out hover:bg-indigo-900 hover:ring-2 hover:ring-white"
    value="{{ $btnTitle }}"
/>
