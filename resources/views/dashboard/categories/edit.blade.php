@extends('dashboard.layouts.main')

@section('title', 'Edytuj kategorię - Site Wizard')
@section('page', 'Edytuj kategorię')

@section('content')

<div class="bg-white border-[1px] border-gray-200 p-6 w-full rounded-2xl flex flex-col gap-6">
    <h2 class="text-black text-lg font-semibold">Edytuj kategorię</h2>
    <form method="POST" action="{{route('categories.update', $category)}}" enctype="multipart/form-data"
        class="flex flex-col gap-6 w-full max-w-2xl">
        @csrf
        @method('PATCH')
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="name" class="text-xs text-gray-100 font-medium">Nazwa kategorii</label>
            <input type="text" name="name" class="outline-none border-[1px] border-gray-300 rounded-lg w-full"
                value="{{$category->name}}">
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="description" class="text-xs text-gray-100 font-medium">Opis kategorii</label>
            <textarea type="text" name="description"
                class="outline-none border-[1px] border-gray-300 rounded-lg w-full h-[150px]">{{$category->description}}</textarea>
        </div>
        <div class="flex gap-4">
            <button type="submit" class="text-white bg-main-300 p-2 rounded-lg min-w-[100px]">Zapisz</button>
            <a href="{{route('categories.index')}}"
                class="text-white bg-gray-100 p-2 rounded-lg min-w-[100px] text-center">Powrót</a>
        </div>

    </form>
</div>

@endsection
