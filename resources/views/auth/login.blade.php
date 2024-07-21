<x-guest-layout>
    <!-- Session Status -->
    <div class="md:w-3/5">
        <img src="{{ asset('imgs/laravel.png') }}" alt="laravel" class="object-cover h-full">
    </div>
    <div class="md:w-2/4 flex items-center flex-col gap-4 justify-center px-20">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="text-5xl text-center space-y-2">
            <span class="font-normal capitalize">bienvenidos a</span>
            <a href="{{ route('login') }}" class="font-black block">
                <span class="text-red-500 capitalize">Proyecto</span>
                <span class="capitalize">Empresa</span>
            </a>
        </div>
        <form method="POST" action="{{ route('login') }}" class="w-full">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full px-3 py-1.5" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full px-3 py-1.5" type="password" name="password" required
                    autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
