<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-md">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">
                Ustawienia
            </h1>
            <p class="mt-2 text-sm text-gray-700">
                Dostosuj najwaniejsze parametry panelu administracyjnego.
            </p>
        </div>
        <form
            class="max-w-[800px] mt-2"
            method="post"
            enctype="multipart/form-data"
            action="{{ route('settings.update') }}"
        >
            @csrf @METHOD('POST')
            <div class="flex flex-wrap py-4 gap-5">
                <div class="w-full">
                    <label
                        class="block mb-2 text-sm font-medium text-gray-900"
                        for="logo"
                        >Logo panelu</label
                    >
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none p-2"
                        name="logo"
                        id="logo"
                        type="file"
                    />
                    <p class="mt-1 text-xs text-gray-500">
                        Obsługiwane pliki: PNG, JPG, JPEG, WEBP do 2MB
                    </p>
                    @error('logo')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full">
                    <label
                        for="website_name"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Nazwa strony</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="website_name"
                            id="website_name"
                            autocomplete="name"
                            placeholder="Podaj klucz TinyMCE"
                            value="{{ $websiteName }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('website_name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="w-full">
                    <label
                        for="tinymce_api_key"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Klucz TinyMCE</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="tinymce_api_key"
                            id="tinymce_api_key"
                            autocomplete="name"
                            placeholder="Podaj klucz TinyMCE"
                            value="{{ $tinyMceKey }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('tinymce_api_key')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="w-full">
                    <label
                        for="google_analytics"
                        class="block text-sm font-medium leading-6 text-gray-900"
                        >Klucz Google Analytics</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="google_analytics"
                            id="google_analytics"
                            autocomplete="name"
                            placeholder="Podaj klucz Google Analytics"
                            value="{{ $googleAnalyticsKey }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        />
                        @error('google_analytics')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="w-full flex items-center gap-2">
                    <button
                        class="text-sm bg-blue-600 text-white px-3 py-2 rounded-md h-fit duration-200 hover:bg-blue-500 w-fit text-center"
                    >
                        Zaktualizuj ustawienia
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
