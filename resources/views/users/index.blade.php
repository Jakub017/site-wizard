<x-app-layout>
    <div class="p-4 border border-gray-200 rounded-lg">
        <div
            class="flex justify-between w-full flex-col gap-2 xl:items-center xl:flex-row mb-6"
        >
            <div class="flex flex-col gap-2 max-w-[700px]">
                <h1 class="text-gray-800 font-bold text-xl">Użytkownicy</h1>
                <p class="text-sm font-normal text-gray-600">
                    Lista użytkowników, którzy mają dostęp do panelu
                    administracyjnego. W tym miejscu możesz dodać nowych oraz
                    edytować lub usunąć istnięjących.
                </p>
            </div>
            <a
                href="{{ route('users.create') }}"
                class="text-sm bg-blue-600 text-white px-3 py-2 rounded-md h-fit w-fit duration-200 hover:bg-blue-500"
                >Dodaj użytkownika +</a
            >
        </div>
        <div class="relative overflow-x-auto sm:rounded-lg">
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500"
            >
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            {{ __("Avatar") }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __("Imię i nazwisko") }}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{ __("Adres email") }}
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
                    @foreach ($users as $user)
                    <tr class="bg-white odd:bg-white even:bg-gray-50">
                        <th
                            scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                        >
                            <img
                                class="w-14 h-14 rounded-full"
                                src="{{ $user->profile_photo_url }}"
                                alt="{{ $user->name }}"
                            />
                        </th>
                        <td class="px-6 py-4">{{ $user->name }}</td>
                        <td class="px-6 py-4">{{ $user->email }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('users.edit', $user) }}"
                                ><i
                                    class="fa-solid fa-pen text-gray-600 hover:text-gray-500 duration-300"
                                ></i
                            ></a>
                            <form
                                action="{{ route('users.destroy', $user) }}"
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
        </div>
    </div>
</x-app-layout>
