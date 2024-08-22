<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-md">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">
                Edytuj produkt
            </h1>
            <p class="mt-2 text-sm text-gray-700">
                Edytuj informacje na temat istniejącego produktu.
            </p>
        </div>
        <form
            class="max-w-[800px] mt-2"
            method="post"
            enctype="multipart/form-data"
            action="{{ route('products.update', $product) }}"
        >
            @csrf @METHOD('PATCH')
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
                            value="{{ $product->image_alt }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('image_alt')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <label
                        for="product_name"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Nazwa produktu</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="product_name"
                            id="product_name"
                            placeholder="Podaj nazwę produktu"
                            value="{{ $product->product_name }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('product_name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full lg:w-[calc(50%-0.65rem)]">
                    <label
                        for="price"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Cena produktu</label
                    >
                    <div class="mt-2">
                        <div class="relative">
                            <input
                                type="text"
                                name="price"
                                id="price"
                                autocomplete="name"
                                placeholder="199"
                                value="{{ $product->price }}"
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
                <div class="w-full lg:w-[calc(50%-0.65rem)]">
                    <label
                        for="sale_price"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Cena promocyjna</label
                    >
                    <div class="mt-2">
                        <div class="relative">
                            <input
                                type="text"
                                name="sale_price"
                                id="sale_price"
                                placeholder="199"
                                value="{{ $product->sale_price }}"
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
                        @error('sale_price')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <label
                        for="content"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Opis produktu</label
                    >
                    <div class="mt-2">
                        <textarea
                            id="description"
                            type="text"
                            name="description"
                            placeholder="Pełny opis produktu"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-24 resize-none"
                            >{{ $product->description }}</textarea
                        >
                        @error('description')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full">
                    <label
                        for="content"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Kategorie</label
                    >
                    <div class="mt-2">
                        <select
                            name="categories[]"
                            id="categories"
                            multiple
                            class="w-full"
                        >
                            @foreach ($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ in_array($category->id, $product->categories->pluck('id')->toArray()) ? 'selected' : '' }}
                            >
                                {{ $category->category_name }}
                            </option>
                            @endforeach
                        </select>
                </div>
            
            </div>
            <div class="w-full flex items-center gap-2">
                    <button
                        class="text-sm bg-blue-600 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-blue-500 w-24 text-center"
                    >
                        Zapisz
                    </button>
                    <a
                        href="{{ route('products.index') }}"
                        class="text-sm bg-gray-500 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-gray-400 w-24 text-center"
                    >
                        Anuluj
                    </a>
                </div>
        </form>
    </div>
</x-app-layout>
