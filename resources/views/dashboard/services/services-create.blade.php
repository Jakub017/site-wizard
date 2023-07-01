@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Dodaj usługę</h2>
<div class="dashboard-block block-50">
    <form method="POST" action="{{route('services.store')}}" class="dashboard-form" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="dashboard-form-group">
            <label for="photo" class="dashboard-label">Zdjęcie główne</label>
            <input name="photo" type="file" class="dashboard-input">
            @error('photo')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="photo_alt" class="dashboard-label">Atrybut alt zdjęcia głównego</label>
            <input name="photo_alt" type="text" class="dashboard-input">
            @error('photo_alt')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="title" class="dashboard-label">Nazwa usługi</label>
            <input name="title" type="text" class="dashboard-input">
            @error('title')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="excerpt" class="dashboard-label">Krótki opis usługi</label>
            <textarea rows="10" name="excerpt" type="text" class="dashboard-input"
                placeholder="Krótki fragment"></textarea>
            @error('excerpt')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="body" class="dashboard-label">Opis usługi</label>
            <textarea rows="10" name="body" type="text" class="dashboard-input" placeholder="Opis usługi"></textarea>
            @error('body')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="meta_title" class="dashboard-label">Meta tytuł (Jeśli pozostawisz puste automatycznie
                zostanie wpisany tytuł)</label>
            <input name="meta_title" type="text" class="dashboard-input">
            @error('meta_title')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="meta_description" class="dashboard-label">Meta opis</label>
            <input name="meta_description" type="text" class="dashboard-input">
            @error('meta_description')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="meta_keywords" class="dashboard-label">Meta słowa kluczowe (oddzielone przecinkami)</label>
            <input name="meta_keywords" type="text" class="dashboard-input">
            @error('meta_keywords')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="form-buttons">
            <a class="cancel-button" href="{{route('services.index')}}">Anuluj</a>
            <button class="add-button">Zapisz</button>
        </div>
    </form>
</div>


@endsection
