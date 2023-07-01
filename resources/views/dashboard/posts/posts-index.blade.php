@extends('dashboard.layouts.messages')


@section('content')

<h2 class="section-heading">Blog</h2>
<h4 class="section-subheading">Lista wszystkich wpisów w zakładce blog.</h4>
<div class="top-bar buttons-bar">
    <a href="{{route('posts.create')}}" class="add-button">Dodaj wpis +</a>
</div>
<div class="records-wrapper">
    <table class="records">
        <thead class="records-top-bar">
            <tr>
                <th>Miniaturka</th>
                <th>Tytuł wpisu</th>
                <th>Autor wpisu</th>
                <th>Data dodania wpisu</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="records-list">
            @foreach($posts as $post)
            <tr>
                <td><img class="record-img" src="{{asset('storage/'.$post->photo)}}" alt=""></td>
                <td>{{ $post->title_pl }}</td>
                <td>{{ $post->author }}</td>
                <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d.m.Y')}}</td>

                <td style="height: 124px;" class="actions">
                    <a class="edit-record" href="{{route('posts.edit', $post)}}"><img
                            src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                        Edytuj</a>
                    <form method="POST" action="{{route('posts.destroy', $post)}}">
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
