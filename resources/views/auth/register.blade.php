<x-guest-layout>
    <!-- Session Status -->
    <div class="md:w-3/5">
        <img
            src="{{ asset("imgs/laravel.png") }}"
            alt="laravel"
            class="h-full object-cover"
        />
    </div>
    <div class="flex flex-col items-center justify-center gap-4 px-20 md:w-2/4">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="space-y-2 text-center text-5xl">
            <span class="font-normal capitalize">bienvenidos a</span>
            <a href="{{ route("login") }}" class="block font-black">
                <span class="capitalize text-red-500">Codigo</span>
                <span class="capitalize">Laravel</span>
            </a>
        </div>
        <form method="POST" action="{{ route("register") }}" class="w-full">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input
                    id="name"
                    class="mt-1 block w-full"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input
                    id="email"
                    class="mt-1 block w-full"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autocomplete="username"
                />
                <x-input-error
                    :messages="$errors->get('email')"
                    class="mt-2"
                />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input
                    id="password"
                    class="mt-1 block w-full"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                />

                <x-input-error
                    :messages="$errors->get('password')"
                    class="mt-2"
                />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label
                    for="password_confirmation"
                    :value="__('Confirm Password')"
                />

                <x-text-input
                    id="password_confirmation"
                    class="mt-1 block w-full"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <x-input-error
                    :messages="$errors->get('password_confirmation')"
                    class="mt-2"
                />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <a
                    class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    href="{{ route("login") }}"
                >
                    {{ __("Already registered?") }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __("Register") }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
