<x-app-layout>
    <div>
        <h3 class="text-base font-semibold leading-6 text-gray-900">
            Twoja strona w liczbach
        </h3>

        <dl
            class="mt-4 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        >
            <div
                class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 border border-gray-200 sm:px-6 sm:pt-6"
            >
                <dt>
                    <div class="absolute rounded-md bg-blue-500 p-3">
                        <svg
                            class="h-6 w-6 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"
                            />
                        </svg>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">
                        Ilość użytkowników
                    </p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">
                        {{ $usersCount }}
                    </p>
                    <p
                        class="ml-2 flex items-baseline text-sm font-semibold text-green-600"
                    ></p>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6"
                    >
                        <div class="text-sm">
                            <a
                                href="{{ route('users.index') }}"
                                class="font-medium text-blue-600 hover:text-blue-500"
                                >Zobacz wszystkich<span class="sr-only">
                                    Iloś</span
                                ></a
                            >
                        </div>
                    </div>
                </dd>
            </div>
            <div
                class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 border border-gray-200 sm:px-6 sm:pt-6"
            >
                <dt>
                    <div class="absolute rounded-md bg-blue-500 p-3">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6 text-white"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75"
                            />
                        </svg>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">
                        Ilość wpisów
                    </p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">
                        {{ $postsCount }}
                    </p>

                    <div
                        class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6"
                    >
                        <div class="text-sm">
                            <a
                                href="{{ route('posts.index') }}"
                                class="font-medium text-blue-600 hover:text-blue-500"
                                >Zobacz wszystkie</a
                            >
                        </div>
                    </div>
                </dd>
            </div>
            <div
                class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 border border-gray-200 sm:px-6 sm:pt-6"
            >
                <dt>
                    <div class="absolute rounded-md bg-blue-500 p-3">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6 text-white"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"
                            />
                        </svg>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">
                        Ilość produktów
                    </p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">
                        {{ $productsCount }}
                    </p>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6"
                    >
                        <div class="text-sm">
                            <a
                                href="{{ route('products.index') }}"
                                class="font-medium text-blue-600 hover:text-blue-500"
                                >Zobacz wszystkie</a
                            >
                        </div>
                    </div>
                </dd>
            </div>
            <div
                class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 border border-gray-200 sm:px-6 sm:pt-6"
            >
                <dt>
                    <div class="absolute rounded-md bg-blue-500 p-3">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6 text-white"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"
                            />
                        </svg>
                    </div>
                    <p class="ml-16 truncate text-sm font-medium text-gray-500">
                        Ilość produktów
                    </p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-semibold text-gray-900">
                        {{ $productsCount }}
                    </p>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6"
                    >
                        <div class="text-sm">
                            <a
                                href="{{ route('products.index') }}"
                                class="font-medium text-blue-600 hover:text-blue-500"
                                >Zobacz wszystkie</a
                            >
                        </div>
                    </div>
                </dd>
            </div>
        </dl>
    </div>
</x-app-layout>
