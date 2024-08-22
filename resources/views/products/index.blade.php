<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-md">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">
                    Produkty
                </h1>
                <p class="mt-2 text-sm text-gray-700">
                    Lista produktów, które można wyświetlić na stronie.
                </p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a
                    href="{{ route('products.create') }}"
                    type="button"
                    class="block rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                >
                    Dodaj produkt +
                </a>
            </div>
        </div>
        <div class="-mx-4 mt-8 sm:-mx-0">
            <table class="min-w-full divide-y divide-gray-300">
                <thead>
                    <tr>
                        <th
                            scope="col"
                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0"
                        >
                            Zdjęcie główne
                        </th>
                        <th
                            scope="col"
                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell"
                        >
                            Nazwa uproduktu
                        </th>
                        <th
                            scope="col"
                            class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell"
                        >
                            Cena
                        </th>
                        <th
                            scope="col"
                            class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900"
                        >
                            Akcje
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach($products as $product)
                    <tr>
                        <td
                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0"
                        >
                            <img
                                src="{{ asset('storage/'.$product->image) }}"
                                class="size-14 rounded-full"
                                alt=""
                            />
                        </td>
                        <td
                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                        >
                            {{ $product->product_name }}
                        </td>
                        <td
                            class="hidden whitespace-nowrap px-3 py-4 text-sm text-gray-500 lg:table-cell"
                        >
                        @foreach($product->categories as $category)
                            <div class="p-2 text-white rounded-full w-fit" style="background-color: {{ $category->color }}">{{ $category->category_name }}</div>
                        @endforeach
                        </td>
                        <td
                            class="whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-0"
                        >
                            <div
                                class="flex gap-1.5 justify-center items-center"
                            >
                                <a
                                    href="{{ route('products.edit', $product) }}"
                                    class="text-blue-600 hover:text-blue-900"
                                    >Edytuj<span class="sr-only"
                                        >, {{ $product->product_name }}</span
                                    ></a
                                >
                                <form action="{{ route("products.destroy", $product) }}" method="POST">
                                    @csrf @method("DELETE")
                                    <button
                                        type="submit"
                                        class="text-red-600 hover:text-red-900"
                                    >
                                        Usuń<span class="sr-only"
                                            >, {{ $product->product_name }}</span
                                        >
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
