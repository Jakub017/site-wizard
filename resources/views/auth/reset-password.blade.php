<x-guest-layout>
    <x-authentication-card>
        <div
            class="mb-4 flex flex-col justify-center items-center gap-8 h-full"
        >
        <div class="flex flex-col gap-4">
             <h2
                    class="text-2xl lg:text-3xl font-bold text-center text-gray-800"
                >
                    {{ __("Reset hasła") }}
                </h2>
                <div class="mb-4 text-sm text-gray-600 text-center">
                    {{
                        __(
                            "Wprowadź nowe, bezpieczne hasło."
                        )
                    }}
                </div>
            <x-validation-errors class="mb-4" />
        </div>

        

        <form method="POST" class="w-full" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="flex flex-col gap-1">
                <x-label for="email" value="{{ __('Adres email') }}" />
                <div class="block relative">
                    <i class="fa-solid fa-envelope absolute top-1/2 -translate-y-1/2 left-3 text-gray-400"></i>
                    <x-input id="email" class="block mt-1 w-full pl-9" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                </div>
            </div>
           
            <div class="flex mt-4 flex-col gap-1">
                <x-label for="password" value="{{ __('Hasło') }}" />
                <div class="relative">
                    <i class="fa-solid fa-lock absolute top-1/2 -translate-y-1/2 left-3 text-gray-400"></i>
                    <x-input id="password" class="block mt-1 w-full pl-9" type="password" name="password" required autocomplete="new-password" />
                </div>
            </div>

            <div class="flex mt-4 flex-col gap-1">
                <x-label for="password_confirmation" value="{{ __('Potwierdź hasło') }}" />
                <div class="relative">
                    <i class="fa-solid fa-lock absolute top-1/2 -translate-y-1/2 left-3 text-gray-400"></i>
                    <x-input id="password_confirmation" class="block mt-1 w-full pl-9" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset hasła') }}
                </x-button>
            </div>
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
