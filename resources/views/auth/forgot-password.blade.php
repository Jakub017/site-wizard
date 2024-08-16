<x-guest-layout>
    <x-authentication-card>
        <div
            class="mb-4 flex flex-col justify-center items-center gap-8 h-full"
        >
            <div class="flex flex-col gap-4">
                <h2
                    class="text-2xl lg:text-3xl font-bold text-center text-gray-800"
                >
                    {{ __("Zapomniane hasło") }}
                </h2>
                <div class="text-sm text-gray-600 text-center">
                    {{
                        __(
                            "Zapomniałeś hasła? Nie ma problemu. Po prostu podaj nam swój adres e-mail, a my wyślemy Ci link do zresetowania hasła, który pozwoli Ci wybrać nowe."
                        )
                    }}
                </div>

                @session('status')
                <div class="font-medium text-sm text-green-600 text-center">
                    {{ $value }}
                </div>
                @endsession

                <!-- <x-validation-errors class="mb-4" /> -->
            </div>
            <form
                method="POST"
                action="{{ route('password.email') }}"
                class="w-full"
            >
                @csrf

                <x-label for="email" value="{{ __('Adres email') }}" />
                <div class="block w-full relative">
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

                <div class="flex items-center justify-end mt-4">
                    <x-button>
                        {{ __("Wyślij link do resetu hasła") }}
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
