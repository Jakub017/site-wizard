@extends('dashboard.layouts.messages')


@section('content')
@include('dashboard.elements.alert')
<h2 class="section-heading">Wiadomości</h2>
<h4 class="section-subheading">Wybierz przez jaki kanał chcesz wysłać wiadomość do klientów.</h4>
<div class="top-bar buttons-bar">
    <button class="message-button whatsapp-button"> <img src="{{asset('img/actions-icons/whatsapp-icon.png')}}" alt="">
        Wiadomość Whatsapp</button>
    <button class="message-button email-button"><img src="{{asset('img/actions-icons/gmail-icon.png')}}" alt="">
        Wiadomość email</button>
</div>
<div class="records-wrapper">
    <div class="records-list">
        <div class="modal-background">
            <div class="form-modal">
                <div class="form-close whatsapp-close">
                    <img src="{{asset('img/actions-icons/close-icon.png')}}" alt="">
                </div>
                <h2 class="section-heading">Wiadomość Whatsapp</h2>
                <form action="{{route('messages.send')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="dashboard-form-group">
                        <label for="group" class="dashboard-label">Grupa</label>
                        <select class="dashboard-input" name="group[]" multiple>
                            @foreach ($groups as $group)
                            <option value="{{ $group->id }}">
                                {{ $group->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="dashboard-form-group">
                        <label for="body" class="dashboard-label">Wiadomość</label>
                        <textarea class="dashboard-input" name="body" id="" cols="30" rows="10"
                            placeholder="Treść wiadomości"></textarea>
                    </div>
                    <div class="dashboard-form-group">
                        <label for="media" class="dashboard-label">Załącznik</label>
                        <input type="file" class="dashboard-input" name="media">
                    </div>
                    <div class="buttons-bar">
                        <button type="submit" class="add-button">Wyślij</button>
                    </div>
                </form>
            </div>
            <div class="form-modal">
                <div class="form-close email-close">
                    <img src="{{asset('img/actions-icons/close-icon.png')}}" alt="">
                </div>
                <h2 class="section-heading">Wiadomość E-mail</h2>
                <form action="{{route('mails.send')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="dashboard-form-group">
                        <label for="group" class="dashboard-label">Grupa</label>
                        <select class="dashboard-input" name="group[]" multiple id="">
                            @foreach ($groups as $group)
                            <option value="{{ $group->id }}">
                                {{ $group->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="dashboard-form-group">
                        <label for="body" class="dashboard-label">Wiadomość</label>
                        <textarea class="dashboard-input" name="body" id="" cols="30" rows="10"
                            placeholder="Treść wiadomości"></textarea>
                    </div>
                    <div class="dashboard-form-group">
                        <label for="media" class="dashboard-label">Załącznik</label>
                        <input type="file" class="dashboard-input" name="media">
                    </div>
                    <div class="buttons-bar">
                        <button type="submit" class="add-button">Wyślij</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
