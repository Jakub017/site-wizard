<div
    class="w-72 h-screen bg-white border-r-[1px] border-gray-200 p-6 flex flex-col gap-12"
>
    <a href="#">
        <img src="{{ asset('img/logo-black.png') }}" class="max-w-44 mx-auto" />
    </a>
    <ul class="flex flex-col gap-4">
        <li class="">
            <span class="text-gray-600 uppercase text-xs font-semibold">{{
                __("Zarządzanie")
            }}</span>
        </li>
        <li class="">
            <a
                href="{{ route('dashboard') }}"
                class="flex items-center gap-2 font-medium text-sm p-2 duration-300  {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-600 rounded-md' : 'text-gray-700 bg-white hover:bg-blue-50' }}"
                ><i
                    class="fa-solid fa-house text-base  {{ request()->routeIs('dashboard') ? ' text-blue-600' : 'text-gray-300 ' }}"
                ></i
                >{{ __("Pulpit główny") }}</a
            >
        </li>
        <li class="">
            <a
                href="{{ route('users.index') }}"
                class="flex items-center gap-2  font-medium text-sm p-2 {{ request()->routeIs('users.*') ? 'bg-blue-50 text-blue-600 rounded-md hover:none' : 'text-gray-700 bg-white hover:bg-blue-50' }}"
                ><i
                    class="fa-solid fa-user-group  text-base  {{ request()->routeIs('users.*') ? 'text-blue-600' : 'text-gray-300' }}"
                ></i
                >{{ __("Użytkownicy") }}</a
            >
        </li>
    </ul>
    <ul class="flex flex-col gap-4">
        <li class="">
            <span class="text-gray-600 uppercase text-xs font-semibold">{{
                __("Treść strony")
            }}</span>
        </li>
        <li class="">
            <a
                href="#"
                class="flex items-center gap-2  font-medium text-sm p-2 {{ request()->routeIs('services.*') ? 'bg-blue-50 text-blue-600 rounded-md hover:none' : 'text-gray-700 bg-white hover:bg-blue-50' }}"
                ><i
                    class="fa-solid fa-screwdriver-wrench text-gray-300 text-base {{ request()->routeIs('services.*') ? 'text-blue-600' : 'text-gray-300' }}"
                ></i
                >{{ __("Usługi") }}</a
            >
        </li>
        <li class="">
            <a
                href="#"
                class="flex items-center gap-2 text-gray-700 font-medium text-sm p-2"
                ><i class="fa-solid fa-box-archive text-gray-300 text-base"></i
                >{{ __("Produkty") }}</a
            >
        </li>
        <li class="">
            <a
                href="#"
                class="flex items-center gap-2 text-gray-700 font-medium text-sm p-2"
                ><i class="fa-solid fa-layer-group text-gray-300 text-base"></i
                >{{ __("Kategorie") }}</a
            >
        </li>
    </ul>
    <ul class="flex flex-col gap-4">
        <li class="">
            <span class="text-gray-600 uppercase text-xs font-semibold">{{
                __("Ustawienia")
            }}</span>
        </li>
        <li class="">
            <a
                href="#"
                class="flex items-center gap-2 text-gray-700 font-medium text-sm p-2"
                ><i class="fa-solid fa-gear text-gray-300 text-base"></i
                >{{ __("Ustawienia") }}</a
            >
        </li>
        <li class="">
            <a
                href="#"
                class="flex items-center gap-2 text-gray-700 font-medium text-sm p-2"
                ><i
                    class="fa-solid fa-circle-question text-gray-300 text-base"
                ></i
                >{{ __("Pomoc") }}</a
            >
        </li>
    </ul>
    <div class="text-center mt-auto mb-0 flex flex-col gap-1">
        <p class="text-gray-500 text-sm">
            {{ __("Panel Site Wizard") }} v0.1.1
        </p>
        <p class="text-gray-500 text-xs">
            Realizacja:
            <a
                href="https://lipinskijakub.pl"
                target="_blank"
                class="hover:underline"
                >Jakub Lipiński</a
            >
            -
            <a
                href="https://webcrafts.pl"
                target="_blank"
                class="hover:underline"
                >Webcrafts.pl</a
            >
        </p>
    </div>
</div>
