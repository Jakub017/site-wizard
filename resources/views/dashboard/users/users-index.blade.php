@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Administratorzy</h2>
<h4 class="section-subheading">Lista użytkowników, którzy mają dostęp do panelu administracyjnego.</h4>
<div class="top-bar">
    <a href="{{route('users.create')}}" class="add-button">Dodaj administratora +</a>
    <form class="search-form">
        <input class="search-input" name="search" type="text" placeholder="Szukaj...">
        <img src="{{asset('img/actions-icons/search-icon.png')}}" alt="" class="search-icon">
    </form>
</div>
<div class="records-wrapper">
    <table class="records">
        <thead class="records-top-bar">
            <tr>
                <th>Imię i nazwisko</th>
                <th>Adres email</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="records-list">
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="actions">
                    @if($user->email == 'kontakt@lipinskijakub.pl')
                    Konto administratora głównego
                    @else
                    <a class="edit-record" href="{{route('users.edit', $user)}}"><img
                            src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                        Edytuj</a>

                    <form method="POST" action="{{route('users.destroy', $user)}}">
                        @csrf
                        @method('DELETE')
                        <button class="delete-record"><img src="{{asset('img/actions-icons/delete-icon.png')}}" alt="">
                            Usuń</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
