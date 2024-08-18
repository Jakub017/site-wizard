<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-lg">
        <div class="flex justify-between w-full flex-col gap-2 mb-6">
            <div class="flex flex-col gap-2 max-w-[700px]">
                <div class="w-full flex flex-col gap-1">
                    <h1 class="text-gray-800 font-bold text-xl">Usługi</h1>
                    <p class="text-sm font-normal text-gray-600">
                        Lista usług, które są wyświetlane na stronie
                        interentowej.
                    </p>
                </div>
            </div>
            <div
                class="flex justify-center align-center flex-col gap-2 md:flex-row mt-2 md:justify-between"
            >
                <form action="" class="relative w-full md:w-52">
                    @csrf
                    <i
                        class="fa-solid fa-magnifying-glass absolute text-gray-500 top-1/2 translate-y-[-50%] left-2"
                    ></i>
                    <input
                        type="text"
                        name="search"
                        id="search"
                        placeholder="Szukaj..."
                        value="{{ request()->input('search') }}"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 pl-8 focus:ring-inset focus:ring-indigo-600 text-sm sm:leading-6"
                    />
                </form>
                <a
                    href="{{ route('services.create') }}"
                    class="text-sm bg-blue-600 text-white px-3 py-2 rounded-md flex justify-center items-center duration-200 hover:bg-blue-500 w-full text-center md:w-fit"
                    >Dodaj usługę +</a
                >
            </div>
        </div>
        <div class="relative overflow-x-auto sm:rounded-lg">
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500"
            >
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            {{ __("Zdjęcie główne") }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __("Nazwa") }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __("Cena") }}
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            {{ __("Akcje") }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr class="bg-white odd:bg-white even:bg-gray-50">
                        <td class="px-6 py-4">
                            <img
                                src="{{ asset('storage/' . $service->image) }}"
                                class="w-16 h-16 rounded-full object-cover"
                                alt=""
                            />
                        </td>
                        <td class="px-6 py-4">{{ $service->service_name }}</td>
                        <td class="px-6 py-4">{{ $service->price }}zł</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('services.edit', $service) }}"
                                ><i
                                    class="fa-solid fa-pen text-gray-600 hover:text-gray-500 duration-300"
                                ></i
                            ></a>
                            <form
                                action="{{
                                    route('services.destroy', $service)
                                }}"
                                method="post"
                                class="inline ml-1"
                            >
                                @csrf @METHOD('DELETE')
                                <button
                                    type="submit"
                                    class="font-medium text-red-600 hover:text-red-500 duration-300"
                                >
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $services->links() }}
        </div>
    </div>
</x-app-layout>
