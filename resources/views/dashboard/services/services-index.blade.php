@extends('dashboard.layouts.messages')


@section('content')

<h2 class="section-heading">Usługi</h2>
<h4 class="section-subheading">Lista usług wyświetlanych na stronie głównej.</h4>
<div class="top-bar buttons-bar">
    <a href="{{route('services.create')}}" class="add-button">Dodaj usługę +</a>
</div>
<div class="records-wrapper">
    <table class="records">
        <thead class="records-top-bar">
            <tr>
                <th>Zdjęcie główne</th>
                <th>Nazwa usługi</th>
                <th>Slug</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="records-list">
            @foreach($services as $service)
            <tr>
                <td><img class="record-img" src="{{asset('storage/'.$service->photo)}}" alt=""></td>
                <td>{{ $service->title }}</td>
                <td>/service/{{ $service->slug }}</td>

                <td style="height: 124px;" class="actions">
                    <a class="edit-record" href="{{route('services.edit', $service)}}"><img
                            src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                        Edytuj</a>
                    <form method="POST" action="{{route('services.destroy', $service)}}">
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
