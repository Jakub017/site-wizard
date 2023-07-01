@extends('dashboard.layouts.messages')


@section('content')

<h2 class="section-heading">Produkty</h2>
<h4 class="section-subheading">Lista produktów na stronie.</h4>
<div class="top-bar buttons-bar">
    <a href="{{route('products.create')}}" class="add-button">Dodaj produkt +</a>
</div>
<div class="records-wrapper">
    <table class="records">
        <thead class="records-top-bar">
            <tr>
                <th>Zdjęcie główne</th>
                <th>Nazwa produktu</th>
                <th>Slug</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody class="records-list">
            @foreach($products as $product)
            <tr>
                <td><img class="record-img" src="{{asset('storage/'.$product->photo)}}" alt=""></td>
                <td>{{ $product->title_pl }}</td>
                <td>/product/{{ $product->slug }}</td>

                <td style="height: 124px;" class="actions">
                    <a class="edit-record" href="{{route('products.edit', $product)}}"><img
                            src="{{asset('img/actions-icons/edit-icon.png')}}" alt="">
                        Edytuj</a>
                    <form method="POST" action="{{route('products.destroy', $product)}}">
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
