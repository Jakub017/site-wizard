<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-lg">
        <div
            class="flex justify-between w-full flex-col gap-2 xl:items-center xl:flex-row mb-6"
        >
            <div class="flex flex-col gap-2 max-w-[700px]">
                <h1 class="text-gray-800 font-bold text-xl">Usługi</h1>
                <p class="text-sm font-normal text-gray-600">
                    Lista usług wyświetlanych na stronie. W tym miejscu możesz
                    je dodawać, edytować lub usunąć.
                </p>
            </div>
            <a
                href="{{ route('services.create') }}"
                class="text-sm bg-blue-600 text-white px-3 py-2 rounded-md h-fit w-fit duration-200 hover:bg-blue-500"
                >Dodaj usługę +</a
            >
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
