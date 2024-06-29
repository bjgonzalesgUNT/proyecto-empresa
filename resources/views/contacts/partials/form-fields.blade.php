@csrf
<div class="w-full">
    <label for="name">Titulo</label>
    <input type="text" name="name" class="w-full rounded-md shadow-md p-1" value="{{ old('name', $contact->name) }}">
    @error('name')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<div class="w-full">
    <label for="email">Email</label>
    <input type="email" name="email" class="w-full rounded-md shadow-md p-1"
        value="{{ old('email', $contact->email) }}">
    @error('email')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<div class="w-full">
    <label for="case">Asunto</label>
    <input type="case" name="case" class="w-full rounded-md shadow-md p-1"
        value="{{ old('case', $contact->case) }}">
    @error('case')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<div class="w-full">
    <label for="message">Mensaje</label>
    <textarea name="message" class="w-full rounded-md shadow-md p-1 h-32 resize-none">{{ old('message', $contact->message) }}</textarea>
    @error('case')
        <p class="text-red-500 font-semibold">{{ $message }}</p>
    @enderror
</div>
<input type="submit"
    class="w-full bg-indigo-800 uppercase text-white rounded-md p-2 font-bold cursor-pointer hover:bg-indigo-900 transition-all duration-300 ease-in-out hover:ring-2 hover:ring-white"
    value="{{ $btnTitle }}">
