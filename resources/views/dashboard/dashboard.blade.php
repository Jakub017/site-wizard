@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Pulpit główny</h2>
<h4 class="section-subheading">Pulpit panelu administracyjnego strony plastic-trader.com</h4>

<h3>Statystyki klientów</h3>
<div class="tiles-wrapper">
    <div class="dashboard-tile">
        <div class="tile-text">
            <h3 class="tile-name">Ilość klientów</h3>
            <h5 class="tile-count">{{ $clientsCount }}</h5>
        </div>
        <img src="{{asset('img/dashboard-tiles/clients-tile.png')}}" alt="" class="tile-icon">
    </div>
    <div class="dashboard-tile">
        <div class="tile-text">
            <h3 class="tile-name">Ilość grup</h3>
            <h5 class="tile-count">{{ $groupsCount }}</h5>
        </div>
        <img src="{{asset('img/dashboard-tiles/groups-tile.png')}}" alt="" class="tile-icon">
    </div>
</div>
<h3>Statystyki witryny</h3>
<div class="tiles-wrapper">
    <div class="dashboard-tile">
        <div class="tile-text">
            <h3 class="tile-name">Ilość usług</h3>
            <h5 class="tile-count">{{ $servicesCount }}</h5>
        </div>
        <img src="{{asset('img/dashboard-tiles/service-tile.png')}}" alt="" class="tile-icon">
    </div>
    <div class="dashboard-tile">
        <div class="tile-text">
            <h3 class="tile-name">Ilość opinii</h3>
            <h5 class="tile-count">{{ $testimonialsCount }}</h5>
        </div>
        <img src="{{asset('img/dashboard-tiles/testimonial-tile.png')}}" alt="" class="tile-icon">
    </div>
    <div class="dashboard-tile">
        <div class="tile-text">
            <h3 class="tile-name">Ilość wpisów</h3>
            <h5 class="tile-count">{{ $postsCount }}</h5>
        </div>
        <img src="{{asset('img/dashboard-tiles/posts-tile.png')}}" alt="" class="tile-icon">
    </div>
</div>

@endsection
