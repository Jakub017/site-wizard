@extends('dashboard.layouts.main')

@section('title', 'Dodaj usługę - Site Wizard')
@section('page', 'Dodaj usługę')

@section('content')

<div class="bg-white border-[1px] border-gray-200 p-6 w-full rounded-2xl flex flex-col gap-6">
    <h2 class="text-black text-lg font-semibold">Nowa usługa</h2>
    <form method="POST" action="{{route('services.store')}}" enctype="multipart/form-data"
        class="flex flex-col gap-6 w-full max-w-2xl">
        @csrf
        @method('POST')
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="image" class="text-xs text-gray-100 font-medium">Zdjęcie</label>
            <input type="file" name="image" class="outline-none border-[1px] border-gray-300 rounded-lg w-full p-2">
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="title" class="text-xs text-gray-100 font-medium">Nazwa usługi</label>
            <input type="text" name="title" class="outline-none border-[1px] border-gray-300 rounded-lg w-full">
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="price" class="text-xs text-gray-100 font-medium">Cena usługi</label>
            <div class="relative w-full">
                <input type="text" name="price" class="outline-none border-[1px] border-gray-300 rounded-lg w-full">
                <div class="absolute top-[50%] text-xs bg-gray-200 border-[1px] border-gray-300 h-full translate-y-[-50%]
                    w-8 right-0 flex justify-center items-center rounded-tr-lg rounded-br-lg">
                    zł</div>
            </div>

        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="excerpt" class="text-xs text-gray-100 font-medium">Krótki opis</label>
            <textarea type="text" name="excerpt"
                class="outline-none border-[1px] border-gray-300 rounded-lg w-full h-[150px]"></textarea>
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="content" class="text-xs text-gray-100 font-medium">Długi opis</label>
            <textarea type="text" name="content" id="content"
                class="outline-none border-[1px] border-gray-300 rounded-lg w-full h-[250px]"></textarea>
        </div>
        <div class="flex gap-4">
            <button type="submit" class="text-white bg-main-300 p-2 rounded-lg min-w-[100px]">Zapisz</button>
            <a href="{{route('services.index')}}"
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
