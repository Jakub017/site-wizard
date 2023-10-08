@extends('dashboard.layouts.main')

@section('title', 'Dodaj opinię - Site Wizard')
@section('page', 'Dodaj opinię')

@section('content')

<div class="bg-white border-[1px] border-gray-200 p-6 w-full rounded-2xl flex flex-col gap-6">
    <h2 class="text-black text-lg font-semibold">Nowa opinia</h2>
    <form method="POST" action="{{route('testimonials.update', $testimonial)}}" enctype="multipart/form-data"
        class="flex flex-col gap-6 w-full max-w-2xl">
        @csrf
        @method('PATCH')
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="image" class="text-xs text-gray-100 font-medium">Zdjęcie</label>
            <input type="file" name="image" class="outline-none border-[1px] border-gray-300 rounded-lg w-full p-2">
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="name" class="text-xs text-gray-100 font-medium">Imię i nazwisko</label>
            <input type="text" name="name" class="outline-none border-[1px] border-gray-300 rounded-lg w-full"
                value="{{$testimonial->name}}">
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="position" class="text-xs text-gray-100 font-medium">Stanowisko i firma</label>
            <input type="text" name="position" class="outline-none border-[1px] border-gray-300 rounded-lg w-full"
                value="{{$testimonial->position}}">
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="content" class="text-xs text-gray-100 font-medium">Treść opinii</label>
            <textarea type="text" name="content" class="outline-none border-[1px] border-gray-300 rounded-lg w-full
                h-[150px]">{{$testimonial->content}}</textarea>
        </div>
        <div class="flex gap-4">
            <button type="submit" class="text-white bg-main-300 p-2 rounded-lg min-w-[100px]">Zapisz</button>
            <a href="{{route('testimonials.index')}}"
                class="text-white bg-gray-100 p-2 rounded-lg min-w-[100px] text-center">Powrót</a>
        </div>

    </form>
</div>

@endsection
