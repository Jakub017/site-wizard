<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-md">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">
                Dodaj wpis
            </h1>
            <p class="mt-2 text-sm text-gray-700">
                Podaj informacje na temat nowego wpisu.
            </p>
        </div>
        <form
            class="max-w-[800px] mt-2"
            method="post"
            enctype="multipart/form-data"
            action="{{ route('posts.store') }}"
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
                <div class="w-full">
                    <label
                        for="image_alt"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Tekst alterantywny dla zdjęcia głównego</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="image_alt"
                            id="image_alt"
                            placeholder="Opisz zdjęcie główne"
                            value="{{ old('image_alt') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('image_alt')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full lg:w-[calc(50%-0.65rem)]">
                    <label
                        for="title"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Tytuł wpisu</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="title"
                            id="title"
                            autocomplete="title"
                            placeholder="Podaj tytuł wpisu"
                            value="{{ old('title') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('title')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full lg:w-[calc(50%-0.65rem)]">
                    <label
                        for="author"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Autor</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="author"
                            id="author"
                            autocomplete="name"
                            placeholder="Podaj autora wpisu"
                            value="{{ auth()->user()->name }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('author')
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
                            placeholder="Krótka zajawka"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-24 resize-none"
                            >{{ old("excerpt") }}</textarea
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
                        >treść wpisu</label
                    >
                    <div class="mt-2">
                        <textarea
                            id="content"
                            type="text"
                            name="content"
                            id="content"
                            placeholder="Pełna treść wpisu"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-24 resize-none"
                            >{{ old("content") }}</textarea
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
                        Dodaj
                    </button>
                    <a
                        href="{{ route('posts.index') }}"
                        class="text-sm bg-gray-500 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-gray-400 w-24 text-center"
                    >
                        Anuluj
                    </a>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
