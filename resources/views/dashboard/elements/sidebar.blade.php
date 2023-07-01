<div class="sidebar">
    <div class="logo-container">
        <a href="{{ route('dashboard.index') }}">
            <img src="{{asset('img/logo.webp')}}" alt="" class="logo">
        </a>
    </div>
    <div class="menu-group">
        <h3 class="menu-group-name">Start</h3>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="{{route('dashboard.index')}}"
                    class="menu-link {{request()->routeIs('dashboard.index') ? 'active' : ''}}">
                    <img src="{{asset('img/menu-icons/dashboard-icon.png')}}" alt="">Pulpit
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('users.index')}}"
                    class="menu-link {{request()->routeIs('users.index') ? 'active' : ''}}"><img
                        src=" {{asset('img/menu-icons/users-icon.png')}}" alt="">Administratorzy</a>
            </li>
        </ul>
    </div>
    <div class="menu-group">
        <h3 class="menu-group-name">Kontakt z klientami</h3>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="{{route('clients.index')}}"
                    class="menu-link {{request()->routeIs('clients.index') ? 'active' : ''}}"><img
                        src="{{asset('img/menu-icons/people-icon.png')}}" alt="">Klienci</a>
            </li>
            <li class="menu-item">
                <a href="{{route('groups.index')}}"
                    class="menu-link {{request()->routeIs('groups.index') ? 'active' : ''}}"><img
                        src="{{asset('img/menu-icons/groups-icon.png')}}" alt="">Grupy</a>
            </li>
            <li class="menu-item">
                <a href="{{route('messages.index')}}"
                    class="menu-link {{request()->routeIs('messages.index') ? 'active' : ''}}"><img
                        src="{{asset('img/menu-icons/messages-icon.png')}}" alt="">Wiadomości</a>
            </li>
        </ul>
    </div>
    <div class="menu-group">
        <h3 class="menu-group-name">Zarządzanie witryną</h3>
        <ul class="menu-list">
            <li class="menu-item">
                <a href="{{route('services.index')}}"
                    class="menu-link {{request()->routeIs('services.index') ? 'active' : ''}}"><img
                        src="{{asset('img/menu-icons/services-icon.png')}}" alt="">Usługi</a>
            </li>
            <li class="menu-item">
                <a href="{{route('products.index')}}"
                    class="menu-link {{request()->routeIs('products.index') ? 'active' : ''}}"><img
                        src="{{asset('img/menu-icons/products-icon.png')}}" alt="">Produkty</a>
            </li>
            <li class="menu-item">
                <a href="{{route('testimonials.index')}}"
                    class="menu-link {{request()->routeIs('testimonials.index') ? 'active' : ''}}"><img
                        src="{{asset('img/menu-icons/testimonials-icon.png')}}" alt="">Opinie</a>
            </li>
            <li class="menu-item">
                <a href="{{route('posts.index')}}"
                    class="menu-link {{request()->routeIs('posts.index') ? 'active' : ''}}"><img
                        src="{{asset('img/menu-icons/blog-icon.png')}}" alt="">Blog</a>
            </li>
        </ul>
    </div>

    <div class="menu-group">
        <h3 class="menu-group-name">Inne</h3>
        <ul class="menu-list">

            <li class="menu-item">
                <form action="{{route('dashboard.logout')}}" method="POST">
                    @csrf
                    <button class="menu-link"><img src="{{asset('img/menu-icons/logout-icon.png')}}"
                            alt="">Wyloguj</button>
                </form>
            </li>
        </ul>
    </div>
</div>
