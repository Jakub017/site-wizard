@extends('dashboard.layouts.messages')


@section('content')

<h2 class="section-heading">Opinie</h2>
<h4 class="section-subheading">Lista opinii wyświetlanych na stronie głównej.</h4>
<div class="top-bar buttons-bar">
    <a href="{{route('testimonials.create')}}" class="add-button">Dodaj opinię +</a>
</div>
<div class="records-wrapper">
    <table class="records">
        <thead class="records-top-bar">
            <tr>
                <th>Zdjęcie</th>
                <th>Autor opinii</th>
                <th>Stanowisko/Firma</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="records-list">
            @foreach($testimonials as $testimonial)
            <tr>
                <td><img class="record-img" src="{{asset('storage/'.$testimonial->photo)}}" alt=""></td>
                <td>{{ $testimonial->author_pl }}</td>
                <td>{{ $testimonial->company_pl }}</td>

                <td style="height: 124px;" class="actions">
                    <a class="edit-record" href="{{route('testimonials.edit', $testimonial)}}"><img
                            src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                        Edytuj</a>
                    <form method="POST" action="{{route('testimonials.destroy', $testimonial)}}">
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
