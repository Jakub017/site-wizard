@extends('dashboard.layouts.main')

@section('content')

<h2 class="section-heading">Informacje o kliencie - {{ $client->name }}</h2>
<div class="dashboard-block block-50">
    <div class="record-info">
        <div class="record-info-group">
            <span class="record-label">Imię i nazwisko</span>
            <span class="record-content">{{ $client->name }}</span>
        </div>
        <div class="record-info-group">
            <span class="record-label">Nazwa firmy</span>
            <span class="record-content">{{ $client->company }}</span>
        </div>
        <div class="record-info-group">
            <span class="record-label">Kraj</span>
            <span class="record-content">{{ $client->country }}</span>
        </div>
        <div class="record-half-group">
            <div class="record-info-group">
                <span class="record-label">Numer telefonu</span>
                <span class="record-content">{{ $client->phone }}</span>
            </div>
            <div class="record-info-group">
                <span class="record-label">Adres email</span>
                <span class="record-content">{{ $client->email }}</span>
            </div>
        </div>
        <div class="record-info-group">
            <span class="record-label">Grupy klienta</span>
            <span class="record-content">
                @foreach($client->groups as $group)
                {{ $group->name }}
                @endforeach
            </span>
        </div>
    </div>
</div>


@endsection
