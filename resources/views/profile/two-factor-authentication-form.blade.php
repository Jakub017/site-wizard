<!-- prettier-ignore -->
<x-action-section>
    <x-slot name="title">
        {{ __('Uwierzytelnianie dwuskładnikowe') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Dodaj dodatkowe zabezpieczenia do swojego konta za pomocą uwierzytelniania dwuskładnikowego.') }}
    </x-slot>

    <x-slot name="content">
        
            @if ($this->enabled)
                @if ($showingConfirmation)
                   <h3 class="text-base font-medium text-gray-900">{{ __('Dokończ konfigurację uwierzytelniania dwuskładnikowego.') }}</h3> 
                @else
                    <h3 class="text-base font-medium text-green-500">{{ __('Włączono uwierzytelnianie dwuskładnikowe.') }}</h3>
                @endif
            @else
                <h3 class="text-base font-medium text-red-500">{{ __('Nie włączono uwierzytelniania dwuskładnikowego.') }}</h3>
            @endif
        </h3>

        <div class="mt-1 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('Po włączeniu uwierzytelniania dwuskładnikowego podczas uwierzytelniania zostanie wyświetlony monit o podanie bezpiecznego, losowego tokena. Token ten można pobrać np. z aplikacji Google Authenticator na telefonie.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        @if ($showingConfirmation)
                            {{ __('Aby zakończyć włączanie uwierzytelniania dwuskładnikowego, zeskanuj poniższy kod QR za pomocą aplikacji uwierzytelniającej telefonu lub wprowadź klucz konfiguracji i podaj wygenerowany kod OTP.') }}
                        @else
                            {{ __('Uwierzytelnianie dwuskładnikowe jest teraz włączone. Zeskanuj poniższy kod QR za pomocą aplikacji uwierzytelniającej telefonu lub wprowadź klucz konfiguracji.') }}
                        @endif
                    </p>
                </div>

                <div class="mt-4 p-2 inline-block bg-white">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>

                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Klucz konfiguracyjny') }}: {{ decrypt($this->user->two_factor_secret) }}
                    </p>
                </div>

                @if ($showingConfirmation)
                    <div class="mt-4">
                        <x-label for="code" value="{{ __('Kod') }}" />

                        <x-input id="code" type="text" name="code" class="block mt-1 w-1/2" inputmode="numeric" autofocus autocomplete="one-time-code"
                            wire:model="code"
                            wire:keydown.enter="confirmTwoFactorAuthentication" />

                        <x-input-error for="code" class="mt-2" />
                    </div>
                @endif
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Kody odzyskiwania należy przechowywać w bezpiecznym menedżerze haseł. Można ich użyć do odzyskania dostępu do konta w przypadku utraty urządzenia do uwierzytelniania dwuskładnikowego.') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-button type="button" wire:loading.attr="disabled">
                        {{ __('Włącz') }}
                    </x-button>
                </x-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-secondary-button class="me-3">
                            {{ __('Wygeneruj kody odzyskiwania') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @elseif ($showingConfirmation)
                    <x-confirms-password wire:then="confirmTwoFactorAuthentication">
                        <x-button type="button" class="me-3" wire:loading.attr="disabled">
                            {{ __('Potwierdź') }}
                        </x-button>
                    </x-confirms-password>
                @else
                    <x-confirms-password wire:then="showRecoveryCodes">
                        <x-secondary-button class="me-3">
                            {{ __('Pokaż kody odzyskiwania') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @endif

                @if ($showingConfirmation)
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-secondary-button wire:loading.attr="disabled">
                            {{ __('Anuluj') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @else
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-danger-button wire:loading.attr="disabled">
                            {{ __('Wyłącz') }}
                        </x-danger-button>
                    </x-confirms-password>
                @endif

            @endif
        </div>
    </x-slot>
</x-action-section>
