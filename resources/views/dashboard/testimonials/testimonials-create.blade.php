@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Dodaj opinię</h2>
<div class="dashboard-block block-50">
    <form method="POST" action="{{route('testimonials.store')}}" class="dashboard-form" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="dashboard-form-group">
            <label for="photo" class="dashboard-label">Zdjęcie</label>
            <input name="photo" type="file" class="dashboard-input">
            @error('photo')
            <p>Błąd</p>
            @enderror
        </div>
        <h3>Język polski</h3>
        <div class="dashboard-form-group">
            <label for="body_pl" class="dashboard-label">Treść opinii</label>
            <textarea name="body_pl" type="text" class="dashboard-input" placeholder="Zacznij wprowadzać..."></textarea>
            @error('body_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="author_pl" class="dashboard-label">Imię i nazwisko</label>
            <input name="author_pl" type="text" class="dashboard-input">
            @error('author_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="company_pl" class="dashboard-label">Stanowisko/Firma</label>
            <input name="company_pl" type="text" class="dashboard-input">
            @error('company_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <h3>Język angielski</h3>
        <div class="dashboard-form-group">
            <label for="body_en" class="dashboard-label">Treść opinii</label>
            <textarea name="body_en" type="text" class="dashboard-input" placeholder="Zacznij wprowadzać..."></textarea>
            @error('body_en')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="author_en" class="dashboard-label">Imię i nazwisko</label>
            <input name="author_en" type="text" class="dashboard-input">
            @error('author_en')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="company_en" class="dashboard-label">Stanowisko/Firma</label>
            <input name="company_en" type="text" class="dashboard-input">
            @error('company_en')
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
