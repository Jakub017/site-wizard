@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Dodaj wpis</h2>
<div class="dashboard-block block-50">
    <form method="POST" action="{{route('posts.store')}}" class="dashboard-form" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="dashboard-form-group">
            <label for="photo" class="dashboard-label">Miniaturka wpisu</label>
            <input name="photo" type="file" class="dashboard-input">
            @error('photo')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="photo_alt_pl" class="dashboard-label">Atrybut alt miniaturki wpisu (PL)</label>
            <input name="photo_alt_pl" type="text" class="dashboard-input">
            @error('photo_alt_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="photo_alt_en" class="dashboard-label">Atrybut alt miniaturki wpisu (EN)</label>
            <input name="photo_alt_en" type="text" class="dashboard-input">
            @error('photo_alt_en')
            <p>Błąd</p>
            @enderror
        </div>

        <h3>Język polski</h3>
        <div class="dashboard-form-group">
            <label for="title_pl" class="dashboard-label">Tytuł wpisu</label>
            <input name="title_pl" type="text" class="dashboard-input">
            @error('title_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="excerpt_pl" class="dashboard-label">Krótki fragment</label>
            <textarea rows="10" name="excerpt_pl" type="text" class="dashboard-input"
                placeholder="Krótki fragment"></textarea>
            @error('excerpt_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="body_pl" class="dashboard-label">Treść wpisu</label>
            <textarea rows="10" name="body_pl" type="text" class="dashboard-input" placeholder="Treść wpisu"></textarea>
            @error('body_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="meta_title_pl" class="dashboard-label">Meta tytuł (Jeśli pozostawisz puste automatycznie
                zostanie wpisany tytuł)</label>
            <input name="meta_title_pl" type="text" class="dashboard-input">
            @error('meta_title_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="meta_description_pl" class="dashboard-label">Meta opis</label>
            <input name="meta_description_pl" type="text" class="dashboard-input">
            @error('meta_description_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="meta_keywords_pl" class="dashboard-label">Meta słowa kluczowe (oddzielone przecinkami)</label>
            <input name="meta_keywords_pl" type="text" class="dashboard-input">
            @error('meta_keywords_pl')
            <p>Błąd</p>
            @enderror
        </div>

        <h3>Język angielski</h3>
        <div class="dashboard-form-group">
            <label for="title_en" class="dashboard-label">Tytuł wpisu</label>
            <input name="title_en" type="text" class="dashboard-input">
            @error('title_en')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="excerpt_en" class="dashboard-label">Krótki fragment</label>
            <textarea rows="10" name="excerpt_en" type="text" class="dashboard-input"
                placeholder="Krótki fragment"></textarea>
            @error('excerpt_en')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="body_en" class="dashboard-label">Treść wpisu</label>
            <textarea rows="10" name="body_en" type="text" class="dashboard-input" placeholder="Treść wpisu"></textarea>
            @error('body_en')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="meta_title_en" class="dashboard-label">Meta tytuł (Jeśli pozostawisz puste automatycznie
                zostanie wpisany tytuł)</label>
            <input name="meta_title_en" type="text" class="dashboard-input">
            @error('meta_title_en')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="meta_description_en" class="dashboard-label">Meta opis</label>
            <input name="meta_description_en" type="text" class="dashboard-input">
            @error('meta_description_en')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="meta_keywords_en" class="dashboard-label">Meta słowa kluczowe (oddzielone przecinkami)</label>
            <input name="meta_keywords_en" type="text" class="dashboard-input">
            @error('meta_keywords_en')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="form-buttons">
            <a class="cancel-button" href="{{route('testimonials.index')}}">Anuluj</a>
            <button class="add-button">Zapisz</button>
        </div>
    </form>
</div>


@endsection
