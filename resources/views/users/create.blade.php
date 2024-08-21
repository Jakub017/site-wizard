<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-lg">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">
                Dodaj użytkownika
            </h1>
            <p class="mt-2 text-sm text-gray-700">
                Dodaj nowego użytkownika, który będzie miał dostęp do panelu i
                wszystkich jego funkcji.
            </p>
        </div>
        <form
            class="max-w-[800px] mt-2"
            method="post"
            enctype="multipart/form-data"
            action="{{ route('users.store') }}"
        >
            @csrf @METHOD('POST')
            <div class="flex flex-wrap py-4 gap-5">
                <div
                    class="w-full"
                    x-data="{photoName: null, photoPreview: null}"
                >
                    <input
                        type="file"
                        id="photo"
                        class="hidden"
                        wire:model.live="photo"
                        x-ref="photo"
                        name="photo"
                        x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            "
                    />
                    <label
                        for="photo"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Zdjęcie profilowe</label
                    >
                    <div class="flex items-center gap-x-3">
                        <div class="mt-2" x-show="! photoPreview">
                            <svg
                                class="h-16 w-16 text-gray-300"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>

                        <!-- New Profile Photo Preview -->
                        <div
                            class="mt-2"
                            x-show="photoPreview"
                            style="display: none"
                        >
                            <span
                                class="block rounded-full w-16 h-16 bg-cover bg-no-repeat bg-center"
                                x-bind:style="'background-image: url(\'' + photoPreview + '\');'"
                            >
                            </span>
                        </div>
                        <button
                            type="button"
                            x-on:click.prevent="$refs.photo.click()"
                            class="rounded-md bg-white px-2.5 py-1.5 text-sm font-medium text-gray-800 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                        >
                            Wybierz zdjęcie z dysku
                        </button>
                    </div>
                    @error('photo')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full lg:w-[calc(50%-1rem)]">
                    <label
                        for="name"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Imię i nazwisko</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            autocomplete="name"
                            placeholder="Imie i nazwisko"
                            value="{{ old('name') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="w-full lg:w-[calc(50%-1rem)]">
                    <label
                        for="email"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Adres email</label
                    >
                    <div class="mt-2">
                        <input
                            id="email"
                            name="email"
                            type="email"
                            placeholder="twoj@adres.com"
                            autocomplete="email"
                            value="{{ old('email') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('email')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="w-full lg:w-[calc(50%-1rem)]">
                    <label
                        for="password"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Hasło</label
                    >
                    <div class="mt-2">
                        <input
                            id="password"
                            name="password"
                            type="password"
                            autocomplete="new-password"
                            placeholder="Stwórz silne hasło"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('password')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="w-full lg:w-[calc(50%-1rem)]">
                    <label
                        for="password_confirmation"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Potwórz hasło</label
                    >
                    <div class="mt-2">
                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            placeholder="Powtórz hasło"
                            autocomplete="new-password"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('password_confirmation')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="w-full flex items-center gap-2">
                    <button
                        class="text-sm bg-blue-600 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-blue-500 w-24 text-center"
                    >
                        Dodaj
                    </button>
                    <a
                        href="{{ route('users.index') }}"
                        class="text-sm bg-gray-500 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-gray-400 w-24 text-center"
                    >
                        Anuluj
                    </a>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
