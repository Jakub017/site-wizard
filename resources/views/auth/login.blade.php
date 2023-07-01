@extends('dashboard.layouts.auth')


@section('title')
Site Wizard - Logowanie
@endsection

@section('meta')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Jakub Lipiński">
<meta property="og:title" content="Sita Wizard - Login" />
<meta property="og:description" content="Strona logowania wersji demonstracyjnej Site Wizard" />
<meta property="og:image" content="" />
<meta property="og:url" content="{{ route('dashboard.login')}}" />
@endsection


@section('content')

<div class="flex justify-center items-center h-screen">
    <div class="hidden lg:flex bg-primary-color-100 justify-center items-center flex-col h-full w-full gap-4">
        <img src="{{asset('img/auth-img.png')}}">
        <h2 class="text-white text-2xl font-bold">Panel administracyjny</h2>
        <h4 class="text-white text-base">Panel administracyjny Site Wizard</h4>
    </div>
    <div class="flex justify-center items-center flex-col h-screen w-full gap-1">
        <h2 class="text-2xl font-bold">Zaloguj się</h2>
        <p class="text-base text-gray-200 mb-6">Zaloguj się w celu zarządzania stroną internetową.</p>
        <form class="flex justify-center items-center flex-col max-w-[500px] w-full gap-6" method="POST"
            action="{{ route('login') }}">
            @csrf
            <div class="w-full relative">
                <input
                    class="w-full p-3 outline-none border-solid border-gray-100 border-2 rounded-md focus:border-primary-color-100 focus:ring-0 ease-in-out duration-300"
                    type="email" name="email" value="{{old('email')}}" placeholder="Adres email" required>
                <img class="absolute top-[50%] translate-y-[-50%] right-3 w-9"
                    src="{{asset('img/auth-icons/email-icon.png')}}">
            </div>
            <div class="w-full relative">
                <input class="w-full p-3 outline-0 border-solid border-gray-100 border-2 rounded-md
                    focus:border-primary-color-100 focus:ring-0 ease-in-out duration-300" type="password"
                    name="password" value="{{old('password')}}" placeholder="Hasło" required>
                <img class="absolute top-[50%] translate-y-[-50%] right-3 w-9"
                    src="{{asset('img/auth-icons/password-icon.png')}}">
            </div>
            <div class="w-full flex justify-start items-center gap-2 text-gray-200 text-sm">
                <input class="rounded-sm" type="checkbox" name="remember">
                <span>Nie wylogowuj mnie</span>
            </div>
            <button
                class="w-full bg-primary-color-100 text-white text-base py-2 ease-in-out duration-300 rounded-md hover:bg-primary-color-200"
                type="submit">Zaloguj
                się</button>
            @if ($errors->any())
            <p class="auth-error">Nieprawidłowe dane logowania.</p>
            @endif
            <a class="absolute bottom-2 font-bold text-primary-color-100 text-base"
                href="https://www.lipinskijakub.pl/">Powrót do
                lipinskijakub.pl</a>
        </form>
    </div>
</div>
@endsection
