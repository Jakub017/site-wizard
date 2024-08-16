<x-guest-layout>
    <x-authentication-card>
        <div
            class="mb-4 flex flex-col justify-center items-center gap-8 h-full"
        >
            <div class="flex flex-col gap-4">
                <img
                    src="{{ asset('img/logo-black.png') }}"
                    class="max-w-44 mx-auto"
                    alt=""
                />
                <h2
                    class="text-2xl lg:text-3xl font-bold text-center text-gray-800"
                >
                    {{ __("Zaloguj się do panelu") }}
                </h2>
                <p class="text-center text-sm text-gray-600">
                    {{
                        __(
                            "Zaloguj się do swojego konta w celu zarzadzania strona internetowa."
                        )
                    }}
                </p>
                <!-- <x-validation-errors /> -->
                @session('status')
                <div class="font-medium text-sm text-green-600 text-center">
                    {{ $value }}
                </div>
                @endsession
            </div>

            <form method="POST" action="{{ route('login') }}" class="w-full">
                @csrf

                <div class="w-full">
                    <x-label for="email" value="{{ __('Adres email') }}" />
                    <div class="relative w-full">
                        <i
                            class="fa-solid fa-envelope absolute top-1/2 -translate-y-1/2 left-3 text-gray-400"
                        ></i>
                        <x-input
                            id="email"
                            class="block mt-1 w-full pl-9"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
                            autocomplete="username"
                        />
                    </div>
                    @error('email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Hasło') }}" />
                    <div class="relative">
                        <i
                            class="fa-solid fa-lock absolute top-1/2 -translate-y-1/2 left-3 text-gray-400"
                        ></i>
                        <x-input
                            id="password"
                            class="block mt-1 w-full pl-9"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                        />
                    </div>
                    @error('password')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-gray-600">{{
                            __("Zapamiętaj mnie")
                        }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="w-full">
                        {{ __("Zaloguj się") }}
                    </x-button>
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}"
                    >
                        {{ __("Zapomniałeś hasła?") }}
                    </a>
                </div>
                @endif
            </form>
        </div>
    </x-authentication-card>
    <div class="hidden lg:flex lg:w-1/2">
        <img
            src="{{ asset('img/login-background.png') }}"
            class="object-cover"
            alt=""
        />
    </div>
</x-guest-layout>
