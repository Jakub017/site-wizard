@extends('dashboard.layouts.main')

@section('title', 'Dodaj produkt - Site Wizard')
@section('page', 'Dodaj produkt')

@section('content')

<div class="bg-white border-[1px] border-gray-200 p-6 w-full rounded-2xl flex flex-col gap-6">
    <h2 class="text-black text-lg font-semibold">Nowy produkt</h2>
    <form method="POST" action="{{route('products.update', $product)}}" enctype="multipart/form-data"
        class="flex flex-col gap-6 w-full max-w-2xl">
        @csrf
        @method('PATCH')
        <div class="flex flex-col sm:flex-row justify-between gap-2">
            <div class="flex flex-col justify-start items-start gap-1 w-full">
                <label for="main_image" class="text-xs text-gray-100 font-medium">Zdjęcie główne produktu</label>
                <input type="file" name="main_image"
                    class="outline-none border-[1px] border-gray-300 rounded-lg w-full p-2">
            </div>
            <div class="flex flex-col justify-start items-start gap-1 w-full">
                <label for="images" class="text-xs text-gray-100 font-medium">Pozostałe zdjęcia produktu</label>
                <input type="file" name="images[]" multiple
                    class="outline-none border-[1px] border-gray-300 rounded-lg w-full p-2">
            </div>
        </div>

        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="name" class="text-xs text-gray-100 font-medium">Nazwa produktu (wymagana)</label>
            <input type="text" name="name" class="outline-none border-[1px] border-gray-300 rounded-lg w-full"
                value="{{$product->name}}">
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="sku" class="text-xs text-gray-100 font-medium">SKU</label>
            <input type="text" name="sku" class="outline-none border-[1px] border-gray-300 rounded-lg w-full"
                value="{{$product->sku}}">
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="price" class="text-xs text-gray-100 font-medium">Cena</label>
            <div class="relative w-full">
                <input type="text" name="price" class="outline-none border-[1px] border-gray-300 rounded-lg w-full"
                    value="{{$product->price}}">
                <div class="absolute top-[50%] text-xs bg-gray-200 border-[1px] border-gray-300 h-full translate-y-[-50%]
                    w-8 right-0 flex justify-center items-center rounded-tr-lg rounded-br-lg">
                    zł</div>
            </div>

        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="excerpt" class="text-xs text-gray-100 font-medium">Krótki opis</label>
            <textarea type="text" name="excerpt" class="outline-none border-[1px] border-gray-300 rounded-lg w-full
                h-[150px]">{{$product->excerpt}}</textarea>
        </div>
        <div class="flex flex-col justify-start items-start gap-1 w-full">
            <label for="content" class="text-xs text-gray-100 font-medium">Długi opis</label>
            <textarea type="text" name="content" id="content" class="outline-none border-[1px] border-gray-300 rounded-lg w-full
                h-[250px]">{{$product->content}}</textarea>
        </div>
        <div class="flex flex-col justify-start items-start gap-1 flex-grow">
            <label for="category" class="text-xs text-gray-100 font-medium">Kategorie</label>
            <select name="categories[]" multiple class="outline-none border-[1px] border-gray-300 rounded-lg w-full">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{$product->categories->contains($category) ? 'selected' : ''}}>
                    {{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col justify-start items-start gap-1 flex-grow">
            <label for="status" class="text-xs text-gray-100 font-medium">Status (wymagany)</label>
            <select name="status" class="outline-none border-[1px] border-gray-300 rounded-lg w-full">
                <option value="0" {{$product->status== '0' ? 'selected' : ''}}>Nieaktywny</option>
                <option value="1" {{$product->status== '1' ? 'selected' : ''}}>Aktywny</option>
            </select>
        </div>
        <div class="flex gap-4">
            <button type="submit" class="text-white bg-main-300 p-2 rounded-lg min-w-[100px]">Zapisz</button>
            <a href="{{route('products.index')}}"
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
