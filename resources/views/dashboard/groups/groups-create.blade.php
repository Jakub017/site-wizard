@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Dodaj grupę</h2>
<div class="dashboard-block block-50">
    <form method="POST" action="{{route('groups.store')}}" class="dashboard-form">
        @csrf
        @method('POST')
        <div class="dashboard-form-group">
            <label for="name" class="dashboard-label">Nazwa grupy (wymagane)</label>
            <input name="name" type="text" class="dashboard-input" placeholder="Zacznij wprowadzać..."
                value="{{old('name')}}">
            @error('name')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="color" class="dashboard-label">Kolor</label>
            <input name="color" type="color" class="dashboard-input color-input" value="#e66465">
            @error('color')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="form-buttons">
            <a class="cancel-button" href="{{route('groups.index')}}">Anuluj</a>
            <button class="add-button">Zapisz</button>
        </div>
    </form>
</div>


@endsection
