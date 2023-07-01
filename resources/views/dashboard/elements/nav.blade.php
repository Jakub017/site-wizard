<nav>
    <div class="hamburger-wrapper">
        <img class="hamburger-icon" src="{{asset('img/menu-icons/hamburger-icon.png')}}" alt="">
    </div>
    <div class="user-info">
        <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" alt="" class="user-avatar">
        <div class="user-credentials">
            <span class="user-name">{{Auth::user()->name}}</span>
            <span class="user-email">{{Auth::user()->email}}</span>

        </div>
    </div>
</nav>
