<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-md">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">
                Edytuj usługę
            </h1>
            <p class="mt-2 text-sm text-gray-700">
                Edytuj informacje na temat istniejącej usługi.
            </p>
        </div>
        <form
            class="w-full mt-2"
            method="post"
            enctype="multipart/form-data"
            action="{{ route('services.update', $service) }}"
        >
            @csrf @METHOD('POST')
            <div class="flex flex-wrap py-4 gap-5">
                <div class="w-full">
                    <label
                        class="block mb-2 text-sm font-medium text-gray-900"
                        for="image"
                        >Zdjęcie główne</label
                    >
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none p-2"
                        name="image"
                        id="image"
                        type="file"
                    />
                    <p class="mt-1 text-xs text-gray-500">
                        Obsługiwane pliki: PNG, JPG, JPEG, WEBP do 2MB
                    </p>
                    @error('image')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full lg:w-[calc(50%-0.65rem)]">
                    <label
                        for="service_name"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Nazwa usługi</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="service_name"
                            id="service_name"
                            autocomplete="name"
                            placeholder="Podaj nazwę usługi"
                            value="{{ $service->service_name }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('service_name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full lg:w-[calc(50%-0.65rem)]">
                    <label
                        for="price"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Cena usługi</label
                    >
                    <div class="mt-2">
                        <div class="relative">
                            <input
                                type="text"
                                name="price"
                                id="price"
                                autocomplete="name"
                                placeholder="199"
                                value="{{ $service->price }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 pr-8 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            />

                            <div
                                class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none"
                            >
                                <span
                                    class="text-gray-500 sm:text-sm sm:leading-6"
                                    >zł</span
                                >
                            </div>
                        </div>
                        @error('price')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <label
                        for="excerpt"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Krótka zajawka</label
                    >
                    <div class="mt-2">
                        <textarea
                            type="text"
                            name="excerpt"
                            id="excerpt"
                            autocomplete="name"
                            placeholder="Krótki opis usługi"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-24 resize-none"
                            >{{ $service->excerpt }}</textarea
                        >
                        @error('excerpt')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <label
                        for="content"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Pełny opis usługi</label
                    >
                    <div class="mt-2">
                        <textarea
                            id="content"
                            type="text"
                            name="content"
                            id="content"
                            placeholder="Pełny opis usługi"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-24 resize-none"
                            >{{ $service->content }}</textarea
                        >
                        @error('content')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="w-full flex items-center gap-2">
                    <button
                        class="text-sm bg-blue-600 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-blue-500 w-24 text-center"
                    >
                        Zapisz
                    </button>
                    <a
                        href="{{ route('services.index') }}"
                        class="text-sm bg-gray-500 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-gray-400 w-24 text-center"
                    >
                        Anuluj
                    </a>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
