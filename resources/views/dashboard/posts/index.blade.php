@extends('dashboard.layouts.lists')

@section('title', 'Aktualności - Site Wizard')
@section('page', 'Aktualności')

@section('content')

<div class="w-full flex gap-2 wrap flex-col sm:flex-row sm:justify-between">
    <form action="#" class="w-full sm:w-[350px]">
        <div class="w-full relative">
            <input type="text" name="search"
                class="w-full outline-none border-[1px] border-gray-200 bg-white pl-7 rounded-lg"
                placeholder="Szukaj...">
            <i class="fa-solid fa-magnifying-glass absolute top-[50%] left-2 translate-y-[-50%] text-gray-100"></i>
        </div>
    </form>
    <a href="{{route('posts.create')}}" class="text-white bg-main-300 p-2 rounded-lg w-full sm:w-fit"><i
            class="fa-solid fa-plus"></i> Dodaj
        aktualność</a>
</div>

<div class="bg-white border-[1px] border-gray-200 p-2 w-full rounded-2xl flex flex-col gap-4">
    <table class="border-separate border-spacing-4">
        <tr
            class="relative after:content-[''] after:absolute after:w-full after:h-[1px] after:top-[105%] after:left-0 after:bg-gray-200 after:z-10">
            <th class="hidden md:table-cell p-2 text-left text-gray-100 text-[14px] font-medium">ID</th>
            <th class="hidden md:table-cell p-2 text-left text-gray-100 text-[14px] font-medium">Tytuł</th>
            <th class="hidden md:table-cell p-2 text-left text-gray-100 text-[14px] font-medium">Autor</th>
            <th class="hidden md:table-cell p-2 text-left text-gray-100 text-[14px] font-medium">Status</th>
            <th class="hidden md:table-cell p-2 text-center text-gray-100 text-[14px] font-medium">Akcje</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td
                class="grid gap-2 grid-cols-1 p-2 text-sm font-medium before:content-['ID:'] md:before:content-[''] md:table-cell">
                {{$post->id}}
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 text-sm font-medium before:content-['Tytuł:'] md:before:content-[''] md:table-cell">
                {{$post->title}}
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 text-sm font-medium before:content-['Autor:'] md:before:content-[''] md:table-cell">
                {{$post->author}}</td>
            <td class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Data publikacji:'] md:before:content-['']
                md:table-cell">
                @if($post->status == 0)
                <span class="bg-hold-100 text-hold-200 p-2 rounded-lg text-sm">Szkic</span>
                @else($post->status == 1)
                <span class="bg-active-100 text-active-200 p-2 rounded-lg text-sm">Opublikowano</span>
                @endif
            </td>
            <td
                class="grid gap-2 grid-cols-1 p-2 font-medium before:content-['Akcje:'] md:before:content-[''] md:table-cell">
                <div class="flex gap-3 justify-center items-center">
                    <a href="{{route('posts.edit', $post)}}"
                        class="bg-gray-200 p-2 rounded-md w-8 h-8 flex justify-center items-center"><i
                            class="text-sm text-gray-100 fa-solid fa-pen"></i></a>
                    <form method="POST" action="{{route('posts.destroy', $post)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="bg-gray-200 p-2 rounded-md w-8 h-8 flex justify-center items-center"><i
                                class="text-gray-100 text-sm fa-solid fa-trash"></i></button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>
{{$posts->links('vendor.pagination.tailwind')}}

@endsection