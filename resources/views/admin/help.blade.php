<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-md">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">
                Pomoc
            </h1>
            <p class="mt-2 text-sm text-gray-700">
                {{
                    __(
                        "Masz pytanie? Zgłoś problem lub uzyskaj wsparcie od twórców Site Wizard."
                    )
                }}
            </p>
        </div>
        <form
            class="w-full mt-2"
            method="post"
            enctype="multipart/form-data"
            action="{{ route('help.send') }}"
        >
            @csrf @METHOD('POST')
            <div class="flex flex-wrap py-4 gap-5">
                <input
                    type="hidden"
                    name="php_version"
                    value="{{ phpversion() }}"
                />
                <input
                    type="hidden"
                    name="domain"
                    value="{{ request()->getHost() }}"
                />
                <input
                    type="hidden"
                    name="laravel_version"
                    value="{{ app()->version() }}"
                />
                <div class="w-full flex gap-5 flex-wrap lg:flex-nowrap">
                    <div class="w-full lg:w-1/3">
                        <label
                            for="name"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >{{ __("Imię i nazwisko") }}</label
                        >
                        <div class="mt-2">
                            <input
                                type="text"
                                name="name"
                                id="name"
                                autocomplete="name"
                                placeholder="Podaj imię i nazwisko"
                                value="{{ auth()->user()->name }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                            @error('name')
                            <span class="text-red-500 text-xs">{{
                                $message
                            }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3">
                        <label
                            for="email"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >{{ __("Adres email") }}</label
                        >
                        <div class="mt-2">
                            <input
                                type="email"
                                name="email"
                                id="email"
                                autocomplete="email"
                                placeholder="Podaj adres email"
                                value="{{ auth()->user()->email }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />
                            @error('email')
                            <span class="text-red-500 text-xs">{{
                                $message
                            }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3">
                        <label
                            for="topic"
                            class="block text-sm font-medium leading-6 text-gray-900"
                            >{{ __("Temat") }}</label
                        >
                        <div class="mt-2">
                            <select
                                type="text"
                                name="topic"
                                id="topic"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            >
                                <option value="">
                                    {{ __("Wybierz temat") }}
                                </option>
                                <option value="bug">
                                    {{ __("Awaria") }}
                                </option>
                                <option value="finance">
                                    {{ __("Finanse") }}
                                </option>
                                <option value="database">
                                    {{ __("Baza danych") }}
                                </option>
                                <option value="account">
                                    {{ __("Konto użytkownika") }}
                                </option>
                                <option value="wcag">
                                    {{ __("Dostępność WCAG 2.1") }}
                                </option>
                                <option value="other">
                                    {{ __("Inne") }}
                                </option>
                            </select>
                            @error('topic')
                            <span class="text-red-500 text-xs">{{
                                $message
                            }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <label
                        for="message"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Treść wiadomości</label
                    >
                    <div class="mt-2">
                        <textarea
                            type="text"
                            name="message"
                            id="message"
                            placeholder="Opis problemu, pytanie..."
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-24 resize-none"
                            >{{ old("message") }}</textarea
                        >
                        @error('message')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <label
                        class="block mb-2 text-sm font-medium text-gray-900"
                        for="file"
                        >{{ __("Załącznik") }}</label
                    >
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none p-2"
                        name="file"
                        id="file"
                        type="file"
                    />
                    <p class="mt-1 text-xs text-gray-500">
                        Obsługiwane pliki: PNG, JPG, JPEG, WEBP, ZIP do 2MB
                    </p>
                    @error('file')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full flex items-center gap-2">
                    <button
                        class="text-sm bg-blue-600 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-blue-500 w-fit text-center"
                    >
                        Wyślij zapytanie
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
