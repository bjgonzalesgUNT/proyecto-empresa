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
                <span class="capitalize text-red-500">Proyecto</span>
                <span class="capitalize">Empresa</span>
            </a>
        </div>
        <form method="POST" action="{{ route("login") }}" class="w-full">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input
                    id="email"
                    class="mt-1 block w-full px-3 py-1.5"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
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
                    class="mt-1 block w-full px-3 py-1.5"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />

                <x-input-error
                    :messages="$errors->get('password')"
                    class="mt-2"
                />
            </div>

            <!-- Remember Me -->
            <div class="mt-4 block">
                <label for="remember_me" class="inline-flex items-center">
                    <input
                        id="remember_me"
                        type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                        name="remember"
                    />
                    <span class="ms-2 text-sm text-gray-600">
                        {{ __("Remember me") }}
                    </span>
                </label>
            </div>

            <div class="mt-4 flex items-center justify-end">
                @if (Route::has("password.request"))
                    <a
                        class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        href="{{ route("password.request") }}"
                    >
                        {{ __("Forgot your password?") }}
                    </a>
                @endif

                <x-primary-button class="ms-3">
                    {{ __("Log in") }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
