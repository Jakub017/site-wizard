<aside
    class="fixed left-[-300px] h-screen bg-white w-[300px] flex flex-col gap-4 overflow-y-auto overflow-x-hidden border-r-[1px] border-gray-200 lg:relative lg:left-0 lg:w-[320px]">
    <div
        class="w-full flex flex-col relative after:content-[''] after:absolute after:w-full after:h-[125px] after:top-0 after:z-0  after:bg-main-300">
        <div class="flex flex-row justify-between items-center p-4 relative z-10">
            <h3 class="text-lg"></h3>
            <form action="{{route('dashboard.logout')}}" method="POST">
                @csrf
                <button
                    class="bg-main-400 text-lg p-4 rounded-full w-[45px] h-[45px] flex justify-center items-center"><i
                        class="fa-solid fa-power-off text-lg text-white"></i></button>
            </form>
        </div>
        <div class="flex flex-col justify-center items-center gap-2 relative z-10">
            <div class="w-[90px] h-[90px] bg-gray-200 rounded-full">
                <img class="w-full h-full object-cover rounded-full"
                    src="https://ui-avatars.com/api/?background=e5e7eb&color=fff&name=Jakub+Lipiński" alt="">
            </div>
            <h3 class="text-lg text-black">{{ auth()->user()->name }}</h3>
            <p class="text-sm text-gray-100">{{ auth()->user()->email }}</p>
        </div>
    </div>
    <ul class="flex flex-col gap-2 px-5 py-3">
        <h3 class="text-sm text-gray-100">Główne</h3>
        <a href="{{route('dashboard.index')}}"
            class="text-base w-full rounded-lg p-4
             flex flex-row gap-3 items-center justify-start hover:no-underline ease-in-out
             duration-200 hover:cursor-pointer {{request()->routeIs('dashboard.index') ? 'bg-main-300 text-white hover:bg-main-300' : 'text-gray-100 hover:bg-main-200'}}">
            <i
                class="fa-solid fa-house text-lg {{request()->routeIs('dashboard.index') ? 'text-white' : 'text-main-300'}}"></i>
            Pulpit
        </a>
        <li>
            <div data-attribute="dropdown"
                class="text-base w-full rounded-lg text-gray-100 p-4
            flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline hover:bg-main-200 ease-in-out duration-200 hover:cursor-pointer">
                <i class="fa-solid fa-user text-lg text-main-300"></i>
                Administratorzy
                <i class="fa-solid fa-angle-right ml-auto duration-300"></i>
            </div>
            <ul data-attribute="submenu"
                class="flex-col w-full hidden text-gray-100 text-sm ml-9 border-l-2 border-main-300 mt-2">
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4"><a href="#"
                        class="w-full block hover:no-underline">Wszyscy administratorzy</a></li>
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4"><a href="#"
                        class="w-full block hover:no-underline">Dodaj
                        administratora</a></li>
            </ul>
        </li>
    </ul>
    <ul class="flex flex-col gap-2 px-5 py-3">
        <h3 class="text-sm text-gray-100">E-commerce</h3>
        <li>
            <div data-attribute="dropdown"
                class="text-base w-full rounded-lg p-4
                        flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline ease-in-out
                        duration-200 hover:cursor-pointer
                        {{request()->routeIs('products*') ? 'bg-main-300 text-white hover:bg-main-300' : 'text-gray-100 hover:bg-main-200'}}">
                <i
                    class="fa-solid fa-cubes text-lg {{request()->routeIs('products*') ? 'text-white' : 'text-main-300'}}"></i>
                Produkty
                <i class="fa-solid fa-angle-right ml-auto duration-300"></i>
            </div>
            <ul data-attribute="submenu"
                class="flex-col w-full hidden text-gray-100 text-sm ml-9 border-l-2 border-main-300 mt-2">
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4"><a href="{{route('products.index')}}"
                        class="w-full block hover:no-underline">Wszystkie
                        produkty</a></li>
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4"><a href="{{route('products.create')}}"
                        class="w-full block hover:no-underline">Dodaj
                        produkt</a></li>
            </ul>
        </li>
        <li>
            <div data-attribute="dropdown"
                class="text-base w-full rounded-lg p-4
                                flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline
                                ease-in-out duration-200 hover:cursor-pointer
                                {{request()->routeIs('categories*') ? 'bg-main-300 text-white hover:bg-main-300' : 'text-gray-100 hover:bg-main-200'}}">
                <i
                    class="fa-solid fa-layer-group {{request()->routeIs('categories*') ? 'text-white' : 'text-main-300'}}"></i>
                Kategorie
                <i class="fa-solid fa-angle-right ml-auto duration-300"></i>
            </div>
            <ul data-attribute="submenu"
                class="flex-col w-full hidden text-gray-100 text-sm ml-9 border-l-2 border-main-300 mt-2">
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4"><a
                        href="{{route('categories.index')}}" class="w-full block hover:no-underline">Wszystkie
                        kategorie</a></li>
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4"><a
                        href="{{route('categories.create')}}" class="w-full block hover:no-underline">Dodaj
                        kategorię</a></li>
            </ul>
        </li>
        <li>
            <a href="#"
                class="text-base w-full rounded-lg text-gray-100 p-4
                flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline hover:bg-main-200 ease-in-out duration-200 hover:cursor-pointer"><i
                    class="fa-solid fa-users text-lg text-main-300"></i> Klienci</a>
        </li>
        <li>
            <a href="#"
                class="text-base w-full rounded-lg text-gray-100 p-4
                flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline hover:bg-main-200 ease-in-out duration-200 hover:cursor-pointer"><i
                    class="fa-solid fa-comments text-lg text-main-300"></i> Wyślij wiadomość</a>
        </li>
    </ul>

    <ul class="flex flex-col gap-2 px-5 py-3">
        <h3 class="text-sm text-gray-100">Zarządzanie witryną</h3>
        <li>
            <div data-attribute="dropdown"
                class="text-base w-full rounded-lg p-4
            flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline ease-in-out
            duration-200 hover:cursor-pointer
            {{request()->routeIs('posts*') ? 'bg-main-300 text-white hover:bg-main-300' : 'text-gray-100 hover:bg-main-200'}}">
                <i
                    class="fa-solid fa-copy text-lg {{request()->routeIs('posts*') ? 'text-white' : 'text-main-300'}}"></i>
                Aktualności
                <i class="fa-solid fa-angle-right ml-auto duration-300"></i>
            </div>
            <ul data-attribute="submenu"
                class="flex-col w-full hidden text-gray-100 text-sm ml-9 border-l-2 border-main-300 mt-2">
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4"><a href="{{route('posts.index')}}"
                        class="w-full block hover:no-underline">Wszystkie
                        aktualności</a></li>
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4"><a href="{{route('posts.create')}}"
                        class="w-full block hover:no-underline">Dodaj
                        aktualność</a></li>
            </ul>
        </li>
        <li>
            <div data-attribute="dropdown"
                class="text-base w-full rounded-lg p-4
            flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline ease-in-out
            duration-200 hover:cursor-pointer
            {{request()->routeIs('services*') ? 'bg-main-300 text-white hover:bg-main-300' : 'text-gray-100 hover:bg-main-200'}}">
                <i
                    class="fa-solid fa-screwdriver-wrench text-lg {{request()->routeIs('services*') ? 'text-white' : 'text-main-300'}}"></i>
                Usługi
                <i class="fa-solid fa-angle-right ml-auto duration-300"></i>
            </div>
            <ul data-attribute="submenu"
                class="flex-col w-full hidden text-gray-100 text-sm ml-9 border-l-2 border-main-300 mt-2">
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4"><a href="{{route('services.index')}}"
                        class="w-full block hover:no-underline">Wszystkie
                        usługi</a></li>
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4"><a href="{{route('services.create')}}"
                        class="w-full block hover:no-underline">Dodaj
                        usługę</a></li>
            </ul>
        </li>
        <li>
            <div data-attribute="dropdown"
                class="text-base w-full rounded-lg p-4
            flex flex-row flex-wrap gap-3 items-center justify-start hover:no-underline ease-in-out
            duration-200 hover:cursor-pointer
            {{request()->routeIs('testimonials*') ? 'bg-main-300 text-white hover:bg-main-300' : 'text-gray-100 hover:bg-main-200'}}">
                <i
                    class="fa-solid fa-star text-lg {{request()->routeIs('testimonials*') ? 'text-white' : 'text-main-300'}}"></i>
                Opinie
                <i class="fa-solid fa-angle-right ml-auto duration-300"></i>
            </div>
            <ul data-attribute="submenu"
                class="flex-col w-full hidden text-gray-100 text-sm ml-9 border-l-2 border-main-300 mt-2">
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4 rounded-lg"><a
                        href="{{route('testimonials.index')}}" class="w-full block hover:no-underline">Wszystkie
                        opinie</a></li>
                <li class="w-full hover:bg-main-200 ease-in-out duration-200 p-4 rounded-lg"><a
                        href="{{route('testimonials.create')}}" class="w-full block hover:no-underline">Dodaj
                        opinię</a></li>
            </ul>
        </li>
    </ul>
    <div class="flex flex-col gap-2 px-5 py-3">
        <h3 class="text-sm text-gray-100">Pozostałe</h3>
        <a class="text-base w-full rounded-lg text-gray-100 p-4
           flex flex-row gap-3 items-center justify-start hover:no-underline hover:bg-main-200 ease-in-out duration-200"
            href="#"><i class="fa-solid fa-gear text-lg text-main-300"></i>
            Ustawienia
        </a>
        <a class="text-base w-full rounded-lg p-4
            flex flex-row gap-3 items-center justify-start hover:no-underline ease-in-out duration-200
            {{request()->routeIs('tickets*') ? 'bg-main-300 text-white hover:bg-main-300' : 'text-gray-100 hover:bg-main-200'}}"
            href="{{route('tickets.index')}}">
            <i
                class="fa-solid fa-circle-question text-lg {{request()->routeIs('tickets*') ? 'text-white' : 'text-main-300'}}"></i>
            Wsparcie
        </a>
    </div>
    <span class="mt-auto text-center p-2 text-sm text-gray-100">Site Wizard v0.2.0</span>
</aside>
