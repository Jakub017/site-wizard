@extends('dashboard.layouts.messages')


@section('content')

<h2 class="section-heading">Grupy</h2>
<h4 class="section-subheading">Lista grup, do których można przypisać klientów.</h4>
<div class="top-bar buttons-bar">
    <a href="{{route('groups.create')}}" class="add-button">Dodaj grupę +</a>
</div>
<div class="records-wrapper">
    <table class="records">
        <thead class="records-top-bar">
            <tr>
                <th>Nazwa grupy</th>
                <th>Kolor grupy</th>
                <!-- <th>Ilość użytkowników</th> -->
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="records-list">

            @foreach($groups as $group)
            <tr>
                <td>{{ $group->name }}</td>
                <td>
                    <div class="group-color" style="background-color: {{$group->color}}"></div>
                </td>
                <!-- <td>29</td> -->
                <td class="actions">
                    <a class="edit-record" href="{{route('groups.edit', $group)}}"><img
                            src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                        Edytuj</a>
                    <form method="POST" action="{{route('groups.destroy', $group)}}">
                        @csrf
                        @method('DELETE')
                        <button class="delete-record"><img src="{{asset('img/actions-icons/delete-icon.png')}}" alt="">
                            Usuń</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
