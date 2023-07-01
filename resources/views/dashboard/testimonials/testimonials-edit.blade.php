@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Edytuj opinię</h2>
<div class="dashboard-block block-50">
    <form method="POST" action="{{route('testimonials.update', $testimonial)}}" class="dashboard-form"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
            <textarea name="body_pl" type="text" class="dashboard-input"
                placeholder="Zacznij wprowadzać...">{{$testimonial->body_pl}}</textarea>
            @error('body_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="author_pl" class="dashboard-label">Imię i nazwisko</label>
            <input name="author_pl" type="text" class="dashboard-input" value="{{$testimonial->author_pl}}">
            @error('author_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="company_pl" class="dashboard-label">Stanowisko/Firma</label>
            <input name="company_pl" type="text" class="dashboard-input" value="{{$testimonial->company_pl}}">
            @error('company_pl')
            <p>Błąd</p>
            @enderror
        </div>
        <h3>Język angielski</h3>
        <div class="dashboard-form-group">
            <label for="body_en" class="dashboard-label">Treść opinii</label>
            <textarea name="body_en" type="text" class="dashboard-input"
                placeholder="Zacznij wprowadzać...">{{$testimonial->body_en}}</textarea>
            @error('body_en')
            <p>Błąd</p>
            @enderror
        </div>
        <div class="dashboard-form-group">
            <label for="author_en" class="dashboard-label">Imię i nazwisko</label>
            <input name="author_en" type="text" class="dashboard-input" value="{{$testimonial->author_en}}">
            @error('author_en')
            <p>Błąd</p>
            @enderror
        </div>
        <div class=" dashboard-form-group">
            <label for="company_en" class="dashboard-label">Stanowisko/Firma</label>
            <input name="company_en" type="text" class="dashboard-input" value="{{$testimonial->company_en}}">
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
