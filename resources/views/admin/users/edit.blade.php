<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-lg">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">
                Edytuj użytkownika
            </h1>
            <p class="mt-2 text-sm text-gray-700">
                Edytuj istniejącego użytkownika, który ma dostęp do panelu i
                wszystkich jego funkcji.
            </p>
        </div>
        <form
            class="w-full mt-2"
            method="post"
            enctype="multipart/form-data"
            action="{{ route('users.update', $user) }}"
        >
            @csrf @METHOD('PATCH')
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
                            <img
                                src="{{ $user->profile_photo_url }}"
                                alt="{{ $user->name }}"
                                class="rounded-full h-16 w-16 object-cover"
                            />
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
                            value="{{ $user->name }}"
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
                            value="{{ $user->email }}"
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
                        class="text-sm bg-blue-600 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-blue-500 w-24"
                    >
                        Zapisz
                    </button>
                    <button
                        class="text-sm bg-gray-500 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-gray-400 w-24"
                    >
                        Anuluj
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
