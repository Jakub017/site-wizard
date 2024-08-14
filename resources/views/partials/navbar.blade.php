<nav
    class="flex border-b border-gray-200 bg-white justify-between items-center p-4 h-20"
>
    <form action="">
        @csrf
        <div class="relative">
            <i
                class="fa-solid fa-magnifying-glass absolute text-gray-500 top-1/2 translate-y-[-50%] left-2"
            ></i>
            <input
                type="text"
                class="border-none placeholder:text-gray-500 h-full block pl-8 outline-none active:outline-none focus:outline-none"
                placeholder="{{ __('Szukaj...') }}"
            />
        </div>
    </form>
    <div class="flex gap-3 items-center">
        <img
            src="{{ Auth::user()->profile_photo_url }}"
            class="w-14 h-14 rounded-full"
        />
        <div class="flex flex-col gap-0.5">
            <h4 class="font-bold text-gray-800 text-base">
                {{ Auth::user()->name }}
            </h4>
            <h6 class="text-gray-600 text-xs">{{ Auth::user()->email }}</h6>
        </div>
    </div>
</nav>
