<aside
    class="fixed left-[-300px] h-screen bg-white w-[300px] flex flex-col gap-4 overflow-scroll border-r-[1px] border-gray-200 lg:relative lg:left-0 lg:w-[320px]">
    <div
        class="w-full flex flex-col relative after:content-[''] after:absolute after:w-full after:h-[125px] after:top-0 after:z-0 after:bg-blue-300">
        <div class="flex flex-row justify-between items-center p-4 relative z-10">
            <h3 class="text-lg"></h3>
            <form action="{{route('dashboard.logout')}}" method="POST">
                @csrf
                <button
                    class="bg-blue-400 text-lg p-4 rounded-full w-[45px] h-[45px] flex justify-center items-center"><i
                        class="fa-solid fa-power-off text-lg text-white"></i></button>
            </form>
        </div>
        <div class="flex flex-col justify-center items-center gap-2 relative z-10">
            <div class="w-[90px] h-[90px] bg-gray-200 rounded-full">
                <img class="w-full h-full object-cover rounded-full"
                    src="https://ui-avatars.com/api/?background=e5e7eb&color=fff&name=Jakub+Lipiński" alt="">
            </div>
            <h3 class="text-lg text-black">Jakub Lipiński</h3>
            <p class="text-sm text-gray-100">kontakt@lipinskijakub.pl</p>
        </div>
    </div>
    <ul class="flex flex-col gap-2 p-5">
        <a href="#" class="text-base w-full rounded-lg text-white bg-blue-300 p-4
             flex flex-row gap-3 items-center justify-start hover:no-underline">
            <i class="fa-solid fa-house text-lg text-white"></i>
            Pulpit
        </a>
        <li>
            <div data-attribute="dropdown"
                class="text-base w-full rounded-lg text-gray-100 p-4
            flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline hover:bg-blue-200 ease-in-out duration-200 hover:cursor-pointer">
                <i class="fa-solid fa-user text-lg text-blue-300"></i>
                Administratorzy
                <i class="fa-solid fa-angle-right ml-auto duration-300"></i>
            </div>
            <ul data-attribute="submenu"
                class="flex-col w-full hidden text-gray-100 text-sm ml-9 border-l-2 border-blue-300 mt-2">
                <li class="w-full hover:bg-blue-200 ease-in-out duration-200 p-4"><a href="#"
                        class="w-full block hover:no-underline">Wszyscy administratorzy</a></li>
                <li class="w-full hover:bg-blue-200 ease-in-out duration-200 p-4"><a href="#"
                        class="w-full block hover:no-underline">Dodaj
                        administratora</a></li>
            </ul>
        </li>
    </ul>
    <div class="flex flex-col gap-2 p-5">
        <a class="text-base w-full rounded-lg text-gray-100 p-4
            flex flex-row gap-3 items-center justify-start hover:no-underline hover:bg-blue-200 ease-in-out duration-200"
            href="#">
            <i class="fa-solid fa-users text-lg text-blue-300"></i>
            Klienci
        </a>
        <a class="text-base w-full rounded-lg text-gray-100 p-4
            flex flex-row gap-3 items-center justify-start hover:no-underline hover:bg-blue-200 ease-in-out duration-200"
            href="#"><i class="fa-solid fa-comments text-lg text-blue-300"></i>Wyślij wiadomość</a>
        <a class="text-base w-full rounded-lg text-gray-100 p-4
            flex flex-row gap-3 items-center justify-start hover:no-underline hover:bg-blue-200 ease-in-out duration-200"
            href="#"><i class="fa-solid fa-handshake text-lg text-blue-300"></i>Oferty</a>
    </div>
    <ul class="flex flex-col gap-2 p-5">
        <li>
            <div data-attribute="dropdown"
                class="text-base w-full rounded-lg text-gray-100 p-4
            flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline hover:bg-blue-200 ease-in-out duration-200 hover:cursor-pointer">
                <i class="fa-solid fa-copy text-lg text-blue-300"></i>
                Aktualności
                <i class="fa-solid fa-angle-right ml-auto duration-300"></i>
            </div>
            <ul data-attribute="submenu"
                class="flex-col w-full hidden text-gray-100 text-sm ml-9 border-l-2 border-blue-300 mt-2">
                <li class="w-full hover:bg-blue-200 ease-in-out duration-200 p-4"><a href="{{route('posts.index')}}"
                        class="w-full block hover:no-underline">Wszystkie
                        aktualności</a></li>
                <li class="w-full hover:bg-blue-200 ease-in-out duration-200 p-4"><a href="#"
                        class="w-full block hover:no-underline">Dodaj
                        aktualność</a></li>
            </ul>
        </li>
        <li>
            <div data-attribute="dropdown"
                class="text-base w-full rounded-lg text-gray-100 p-4
            flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline hover:bg-blue-200 ease-in-out duration-200 hover:cursor-pointer">
                <i class="fa-solid fa-cubes text-lg text-blue-300"></i>
                Produkty
                <i class="fa-solid fa-angle-right ml-auto duration-300"></i>
            </div>
            <ul data-attribute="submenu"
                class="flex-col w-full hidden text-gray-100 text-sm ml-9 border-l-2 border-blue-300 mt-2">
                <li class="w-full hover:bg-blue-200 ease-in-out duration-200 p-4"><a href="#"
                        class="w-full block hover:no-underline">Wszystkie
                        produkty</a></li>
                <li class="w-full hover:bg-blue-200 ease-in-out duration-200 p-4"><a href="#"
                        class="w-full block hover:no-underline">Dodaj
                        produkt</a></li>
            </ul>
        </li>
        <li>
            <div data-attribute="dropdown"
                class="text-base w-full rounded-lg text-gray-100 p-4
            flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline hover:bg-blue-200 ease-in-out duration-200 hover:cursor-pointer">
                <i class="fa-solid fa-screwdriver-wrench text-lg text-blue-300"></i>
                Usługi
                <i class="fa-solid fa-angle-right ml-auto duration-300"></i>
            </div>
            <ul data-attribute="submenu"
                class="flex-col w-full hidden text-gray-100 text-sm ml-9 border-l-2 border-blue-300 mt-2">
                <li class="w-full hover:bg-blue-200 ease-in-out duration-200 p-4"><a href="#"
                        class="w-full block hover:no-underline">Wszystkie
                        usługi</a></li>
                <li class="w-full hover:bg-blue-200 ease-in-out duration-200 p-4"><a href="#"
                        class="w-full block hover:no-underline">Dodaj
                        usługę</a></li>
            </ul>
        </li>
        <li>
            <div data-attribute="dropdown"
                class="text-base w-full rounded-lg text-gray-100 p-4
            flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline hover:bg-blue-200 ease-in-out duration-200 hover:cursor-pointer">
                <i class="fa-solid fa-star text-lg text-blue-300"></i>
                Opinie
                <i class="fa-solid fa-angle-right ml-auto duration-300"></i>
            </div>
            <ul data-attribute="submenu"
                class="flex-col w-full hidden text-gray-100 text-sm ml-9 border-l-2 border-blue-300 mt-2">
                <li class="w-full hover:bg-blue-200 ease-in-out duration-200 p-4 rounded-lg"><a href="#"
                        class="w-full block hover:no-underline">Wszystkie
                        opinie</a></li>
                <li class="w-full hover:bg-blue-200 ease-in-out duration-200 p-4 rounded-lg"><a href="#"
                        class="w-full block hover:no-underline">Dodaj
                        opinię</a></li>
            </ul>
        </li>
    </ul>
    <div class="flex flex-col gap-2 p-5">
        <a class="text-base w-full rounded-lg text-gray-100 p-4
           flex flex-row gap-3 items-center justify-start hover:no-underline hover:bg-blue-200 ease-in-out duration-200"
            href="#"><i class="fa-solid fa-gear text-lg text-blue-300"></i>
            Ustawienia
        </a>
        <a class="text-base w-full rounded-lg text-gray-100 p-4
            flex flex-row gap-3 items-center justify-start hover:no-underline hover:bg-blue-200 ease-in-out duration-200"
            href="#">
            <i class="fa-solid fa-circle-question text-lg text-blue-300"></i>
            Wsparcie
        </a>
    </div>
    <span class="mt-auto text-center p-2 text-sm text-gray-100">Site Wizard v0.1.0</span>
</aside>
