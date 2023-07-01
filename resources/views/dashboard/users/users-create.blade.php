@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Dodaj administratora</h2>
<div class="dashboard-block block-50">
    <form method="POST" action="{{route('users.store')}}" class="dashboard-form">
        @csrf
        @method('POST')
        <div class="dashboard-form-group">
            <label for="name" class="dashboard-label">Imię i nazwisko (wymagane)</label>
            <input name="name" type="text" class="dashboard-input" placeholder="Jan Kowalski" value="{{old('name')}}">
            @error('name')
            <p>Błędne imię i nazwisko</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="email" class="dashboard-label">Adres email (wymagane)</label>
            <input name="email" type="text" class="dashboard-input" placeholder="twoj@email.com"
                value="{{old('email')}}">
            @error('email')
            <p>Błędny email</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="password" class="dashboard-label">Hasło (wymagane)</label>
            <input name="password" type="password" class="dashboard-input" placeholder="*********"
                value="{{old('password')}}">
            @error('password')
            <p>Błędne hasło</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="password_confirmation" class="dashboard-label">Potwierdź hasło</label>
            <input name="password_confirmation" type="password" class="dashboard-input" placeholder="*********"
                value="{{old('password_confirmation')}}">
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
