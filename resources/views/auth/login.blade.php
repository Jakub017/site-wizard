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

<div class="auth-wrapper">
    <div class="image-wrapper">
        <img src="{{asset('img/auth-img.png')}}" alt="" class="auth-image">
        <h2 class="auth-heading">Panel administracyjny</h2>
        <h4 class="auth-subheading">Wersja demonstracyjna panelu Site Wizard</h4>
    </div>
    <div class="form-wrapper">
        <h2 class="auth-title">Zaloguj się</h2>
        <p class="auth-subtitle">Zaloguj się w celu zarządzania stroną internetową.</p>
        <form class="auth-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="auth-input-group">
                <input type="email" class="auth-input" name="email" value="{{old('email')}}" placeholder="Adres email"
                    required>
                <img class="auth-input-icon" src="{{asset('img/auth-icons/email-icon.png')}}">
            </div>
            <div class="auth-input-group">
                <input type="password" class="auth-input" name="password" value="{{old('password')}}"
                    placeholder="Hasło" required>
                <img class="auth-input-icon" src="{{asset('img/auth-icons/password-icon.png')}}">
            </div>
            <div class="auth-input-group auth-remember">
                <input id="remember_me" type="checkbox" class="auth-checkbox" name="remember">
                <span class="auth-label">Nie wylogowuj mnie</span>
            </div>
            <button class="auth-login" type="submit">Zaloguj się</button>
            @if ($errors->any())
            <p class="auth-error">Nieprawidłowe dane logowania.</p>
            @endif
            <a href="https://www.lipinskijakub.pl/" class="auth-back">Powrót do lipinskijakub.pl</a>
        </form>
    </div>
</div> @endsection
