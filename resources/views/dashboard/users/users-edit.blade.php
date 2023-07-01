@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Edytuj konto {{$user->name}}</h2>
<div class="dashboard-block block-50">

    <form method="POST" action="{{ route('users.update', $user)}}" class="dashboard-form">
        @csrf
        @method('patch')
        <h3>Informacje podstawowe</h3>
        <div class="dashboard-form-group">
            <label class="dashboard-label" for="name">Imię i nazwisko</label>
            <input class="dashboard-input" id="name" name="name" type="text" class="mt-1 block w-full" required
                autofocus autocomplete="name" value="{{$user->name}}" />
            @error('name')
            <p>Imię i nazwisko są nieprawidłowe</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label class="dashboard-label" for="email">Adres email</label>
            <input class="dashboard-input" id="email" name="email" type="email" class="mt-1 block w-full"
                autocomplete="email" required value="{{$user->email}}" />
            @error('email')
            <p>Email jest nieprawidłowy</p>
            @enderror
        </div>

        <div class="form-buttons">
            <!-- <a class="cancel-button" href="{{route('users.index')}}">Anuluj</a> -->
            <button class="add-button">Zapisz</button>
        </div>

    </form>


    <form method="post" action="{{ route('users.password.update', $user) }}" class="dashboard-form">
        @csrf
        @method('put')
        <h3>Zmiana hasła</h3>
        <div class="dashboard-form-group">
            <label class="dashboard-label" for="current_password">Aktualne hasło</label>
            <input class="dashboard-input" id="current_password" name="current_password" type="password" />
            @error('current_password')
            <p>Podano nieprawidłowe aktualne hasło.</p>
            @enderror
        </div>

        <div class="dashboard-form-group">
            <label class="dashboard-label" for="password">Nowe hasło</label>
            <input class="dashboard-input" id="password" name="password" type="password" />
            @error('password')
            <p>Nowe hasło jest nieprawidłowe</p>
            @enderror
        </div>

        <div class="dashboard-form-group">
            <label class="dashboard-label" for="password_confirmation">Potwierdź nowe hasło</label>
            <input class="dashboard-input" id="password_confirmation" name="password_confirmation" type="password" />
            @error('password_confirmation')
            <p>Hasła nie są zgodne</p>
            @enderror
        </div>

        <div class="form-buttons">
            <a class="cancel-button" href="{{route('users.index')}}">Anuluj</a>
            <button class="add-button">Zapisz</button>
        </div>
    </form>
</div>


@endsection
