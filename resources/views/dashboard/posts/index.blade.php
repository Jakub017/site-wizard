@extends('dashboard.layouts.lists')

@section('title', 'Aktualności - Site Wizard')
@section('page', 'Aktualności')

@section('content')

<div class="bg-white border-[1px] border-gray-200 p-4 w-full rounded-2xl flex flex-col gap-4">
    <div class="flex flex-col w-full">
        <div class="flex gap-4 justify-between w-full items-center p-2">
            <h2 class="text-lg font-medium">Lista aktualności</h2>
            <a class="p-2 w-[35px] h-[35px] bg-blue-300 text-white rounded-xl flex justify-center items-center text-base"
                href="#"><i class="fa-solid fa-plus"></i></a>
        </div>

    </div>


    <table class="border-separate border-spacing-4">
        <tr>
            <th class="hidden md:table-cell p-2 text-left text-gray-100 text-[14px] font-medium">Miniaturka</th>
            <th class="hidden md:table-cell p-2 text-left text-gray-100 text-[14px] font-medium">Tytuł</th>
            <th class="hidden md:table-cell p-2 text-left text-gray-100 text-[14px] font-medium">Autor</th>
            <th class="hidden md:table-cell p-2 text-left text-gray-100 text-[14px] font-medium">Data publikacji</th>
            <th class="hidden md:table-cell p-2 text-center text-gray-100 text-[14px] font-medium">Akcje</th>
        </tr>
        <tr
            class="relative after:content-[''] after:absolute after:w-full after:h-[1px] after:top-[105%] after:left-0 after:bg-gray-200 after:z-10">

            <td
                class="grid gap-2 grid-cols-[15ch, auto] p-2 before:content-['Miniaturka:'] md:before:content-[''] md:table-cell">
                <img class="w-[70px] h-[70px] rounded-full" src="https://placehold.co/400" alt="">
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Tytuł:'] md:before:content-[''] md:table-cell">
                Tytuł
                aktualności
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Autor:'] md:before:content-[''] md:table-cell">
                Jakub
                Lipiński</td>
            <td class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Data publikacji:'] md:before:content-['']
                md:table-cell">
                24.09.2023</td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Akcje:'] md:before:content-[''] md:table-cell">
                <div class="flex gap-3 justify-center items-center">
                    <a href="#"><i class="text-blue-300 text-lg fa-solid fa-pen"></i></a>
                    <form action=""><button type="submit"><i
                                class="text-red-500 text-lg fa-solid fa-trash"></i></button></form>
                </div>
            </td>
        </tr>
        <tr class="border-t-[1px] border-gray-200">
            <td
                class="grid gap-2 grid-cols-[15ch, auto] p-2 before:content-['Miniaturka:'] md:before:content-[''] md:table-cell">
                <img class="w-[70px] h-[70px] rounded-full" src="https://placehold.co/400" alt="">
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Tytuł:'] md:before:content-[''] md:table-cell">
                Tytuł
                aktualności
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Autor:'] md:before:content-[''] md:table-cell">
                Jakub
                Lipiński</td>
            <td class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Data publikacji:'] md:before:content-['']
                md:table-cell">
                24.09.2023</td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Akcje:'] md:before:content-[''] md:table-cell">
                <div class="flex gap-3 justify-center items-center">
                    <a href="#"><i class="text-blue-300 text-lg fa-solid fa-pen"></i></a>
                    <form action=""><button type="submit"><i
                                class="text-red-500 text-lg fa-solid fa-trash"></i></button></form>
                </div>
            </td>
        </tr>
        <tr class="border-t-[1px] border-gray-200">
            <td
                class="grid gap-2 grid-cols-[15ch, auto] p-2 before:content-['Miniaturka:'] md:before:content-[''] md:table-cell">
                <img class="w-[70px] h-[70px] rounded-full" src="https://placehold.co/400" alt="">
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Tytuł:'] md:before:content-[''] md:table-cell">
                Tytuł
                aktualności
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Autor:'] md:before:content-[''] md:table-cell">
                Jakub
                Lipiński</td>
            <td class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Data publikacji:'] md:before:content-['']
                md:table-cell">
                24.09.2023</td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Akcje:'] md:before:content-[''] md:table-cell">
                <div class="flex gap-3 justify-center items-center">
                    <a href="#"><i class="text-blue-300 text-lg fa-solid fa-pen"></i></a>
                    <form action=""><button type="submit"><i
                                class="text-red-500 text-lg fa-solid fa-trash"></i></button></form>
                </div>
            </td>
        </tr>
        <tr class="border-t-[1px] border-gray-200">
            <td
                class="grid gap-2 grid-cols-[15ch, auto] p-2 before:content-['Miniaturka:'] md:before:content-[''] md:table-cell">
                <img class="w-[70px] h-[70px] rounded-full" src="https://placehold.co/400" alt="">
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Tytuł:'] md:before:content-[''] md:table-cell">
                Tytuł
                aktualności
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Autor:'] md:before:content-[''] md:table-cell">
                Jakub
                Lipiński</td>
            <td class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Data publikacji:'] md:before:content-['']
                md:table-cell">
                24.09.2023</td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Akcje:'] md:before:content-[''] md:table-cell">
                <div class="flex gap-3 justify-center items-center">
                    <a href="#"><i class="text-blue-300 text-lg fa-solid fa-pen"></i></a>
                    <form action=""><button type="submit"><i
                                class="text-red-500 text-lg fa-solid fa-trash"></i></button></form>
                </div>
            </td>
        </tr>
        <tr class="border-t-[1px] border-gray-200">
            <td
                class="grid gap-2 grid-cols-[15ch, auto] p-2 before:content-['Miniaturka:'] md:before:content-[''] md:table-cell">
                <img class="w-[70px] h-[70px] rounded-full" src="https://placehold.co/400" alt="">
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Tytuł:'] md:before:content-[''] md:table-cell">
                Tytuł
                aktualności
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Autor:'] md:before:content-[''] md:table-cell">
                Jakub
                Lipiński</td>
            <td class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Data publikacji:'] md:before:content-['']
                md:table-cell">
                24.09.2023</td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Akcje:'] md:before:content-[''] md:table-cell">
                <div class="flex gap-3 justify-center items-center">
                    <a href="#"><i class="text-blue-300 text-lg fa-solid fa-pen"></i></a>
                    <form action=""><button type="submit"><i
                                class="text-red-500 text-lg fa-solid fa-trash"></i></button></form>
                </div>
            </td>
        </tr>
    </table>
</div>

@endsection
