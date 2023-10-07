@extends('dashboard.layouts.main')

@section('title', 'Dodaj aktualność - Site Wizard')
@section('page', 'Edycja aktualności')

@section('content')

<div class="bg-white border-[1px] border-gray-200 p-6 w-full rounded-2xl flex flex-col gap-6">
    <h2 class="text-black text-lg font-semibold">Edytuj aktualność</h2>
    <form method="POST" action="{{route('posts.update', $post)}}" enctype="multipart/form-data"
        class="flex flex-col gap-6 w-full max-w-2xl">
        @csrf
        @method('PATCH')
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="title" class="text-xs text-gray-100 font-medium">Miniaturka</label>
            <input type="file" name="title" class="outline-none border-[1px] border-gray-300 rounded-lg w-full p-2">
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="title" class="text-xs text-gray-100 font-medium">Tytuł aktualności</label>
            <input type="text" name="title" class="outline-none border-[1px] border-gray-300 rounded-lg w-full"
                value="{{$post->title}}">
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="title" class="text-xs text-gray-100 font-medium">Krótki wstęp</label>
            <textarea type="text" name="title" class="outline-none border-[1px] border-gray-300 rounded-lg w-full
                h-[150px]">{{$post->excerpt}}</textarea>
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="title" class="text-xs text-gray-100 font-medium">Treść aktualności</label>
            <textarea type="text" name="title" id="content" class="outline-none border-[1px] border-gray-300 rounded-lg w-full
                h-[250px]">{{$post->content}}</textarea>
        </div>
        <div class="flex flex-col sm:flex-row justify-between gap-2">
            <div class="flex flex-col justify-start items-start gap-1 flex-grow">
                <label for="title" class="text-xs text-gray-100 font-medium">Kategoria</label>
                <select name="category" class="outline-none border-[1px] border-gray-300 rounded-lg w-full">
                    <option value="">Wybierz kategorię</option>
                    <option value="Aktualności" {{ $post->category == "Aktualności" ? 'selected' : '' }}>Aktualności
                    </option>
                    <option value="Promocje" {{ $post->category == "Promocje" ? 'selected' : '' }}>Promocje</option>
                </select>
            </div>
            <div class="flex flex-col justify-start items-start gap-1 flex-grow">
                <label for="title" class="text-xs text-gray-100 font-medium">Status</label>
                <select name="category" class="outline-none border-[1px] border-gray-300 rounded-lg w-full">
                    <option value="">Wybierz status</option>
                    <option value="1" {{ $post->status == 1 ? 'selected' : '' }}>Opublikowane</option>
                    <option value="0" {{ $post->status == 0 ? 'selected' : '' }}>Szkic</option>
                </select>
            </div>
        </div>
        <div class="flex gap-4">
            <button type="submit" class="text-white bg-main-300 p-2 rounded-lg min-w-[100px]">Zapisz</button>
            <a href="{{route('posts.index')}}"
                class="text-white bg-gray-100 p-2 rounded-lg min-w-[100px] text-center">Powrót</a>
        </div>

    </form>
</div>

@endsection

@section('scripts')
<script>
    tinymce.init({
        selector: '#content',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        'width': '100%',
        'language': 'pl',
    });

</script>
@endsection
