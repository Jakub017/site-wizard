<x-app-layout>
    <div class="relative overflow-x-auto sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <caption
                class="mb-6 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white w-full"
            >
                <div
                    class="flex justify-between w-full flex-col gap-2 xl:items-center xl:flex-row"
                >
                    <div class="flex flex-col text-lg lg:max-w-[600px]">
                        Użytkownicy
                        <p class="mt-1 text-sm font-normal text-gray-500">
                            Lista użytkowników, którzy mają dostęp do panelu
                            administracyjnego. W tym miejscu możesz dodać nowych
                            oraz edytować lub usunąć istnięjących.
                        </p>
                    </div>
                    <a
                        href="{{ route('users.create') }}"
                        class="text-sm bg-blue-600 text-white px-3 py-2 rounded-md h-fit w-fit duration-200 hover:bg-blue-500"
                        >Dodaj użytkownika +</a
                    >
                </div>
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">{{ __("Avatar") }}</th>
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
                <tr class="bg-white border-b odd:bg-white even:bg-gray-50">
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                    >
                        <img
                            class="w-10 h-10 rounded-full"
                            src="{{ $user->profile_photo_url }}"
                            alt="Jese image"
                        />
                    </th>
                    <td class="px-6 py-4">{{ $user->name }}</td>
                    <td class="px-6 py-4">a{{ $user->email }}</td>
                    <td class="px-6 py-4 text-center">
                        <a
                            href="#"
                            class="font-medium text-blue-600 hover:underline"
                            >Edytuj</a
                        >
                        <a
                            href="#"
                            class="font-medium text-red-600 hover:underline"
                            >Usuń</a
                        >
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
