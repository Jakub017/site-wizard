<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-lg">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">
                Edytuj kategorię
            </h1>
            <p class="mt-2 text-sm text-gray-700">
                Edytuj istniejącą kategorię.
            </p>
        </div>
        <form
            class="w-full mt-2"
            method="post"
            enctype="multipart/form-data"
            action="{{ route('categories.update', $category) }}"
        >
            @csrf @METHOD('PATCH')
            <div class="flex flex-wrap py-4 gap-5">
                <div class="w-full">
                    <label
                        for="category_name"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Nazwa kategorii</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="category_name"
                            id="category_name"
                            placeholder="Podaj nazwę kategorii"
                            value="{{ $category->category_name }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('category_name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <label
                        for="description"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Opis kategorii</label
                    >
                    <div class="mt-2">
                        <textarea
                            name="description"
                            id="description"
                            placeholder="Podaj opis kategorii"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-24 resize-none"
                            >{{ $category->description }}</textarea
                        >
                        @error('description')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <label
                        for="color"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Kolor kategorii</label
                    >
                    <div class="mt-2">
                        <input
                            type="color"
                            name="color"
                            id="color"
                            class="p-1"
                            value="{{ $category->color }}"
                        />
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
                        href="{{ route('categories.index') }}"
                        class="text-sm bg-gray-500 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-gray-400 w-24 text-center"
                    >
                        Anuluj
                    </a>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
