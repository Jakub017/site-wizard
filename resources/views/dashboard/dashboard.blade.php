@extends('dashboard.layouts.main')

@section('content')

<div class="flex flex-row flex-wrap gap-8">
    <h2 class="text-blue-300 w-full text-lg font-semibold">Statystyki</h2>
    <div
        class="flex justify-between items-center p-5 bg-white rounded-2xl w-[90%] max-w-[235px] border-[1px] border-gray-200">
        <div class="flex flex-col gap-5">
            <h2 class="text-xl text-black font-semibold">156</h2>
            <h2 class="text-base text-black">Klientów</h2>
        </div>
        <div class="flex justify-center items-center w-[70px] h-[70px] bg-blue-200 rounded-full">
            <i class="fa-solid fa-users text-2xl text-blue-300"></i>
        </div>
    </div>
    <div
        class="flex justify-between items-center p-5 bg-white rounded-2xl w-[90%] max-w-[235px] border-[1px] border-gray-200">
        <div class="flex flex-col gap-5">
            <h2 class="text-xl text-black font-semibold">256</h2>
            <h2 class="text-base text-black">Wiadomości</h2>
        </div>
        <div class="flex justify-center items-center w-[70px] h-[70px] bg-purple-100 rounded-full">
            <i class="fa-solid fa-comments text-2xl text-purple-200"></i>
        </div>
    </div>
    <div
        class="flex justify-between items-center p-5 bg-white rounded-2xl w-[90%] max-w-[235px] border-[1px] border-gray-200">
        <div class="flex flex-col gap-5">
            <h2 class="text-xl text-black font-semibold">156</h2>
            <h2 class="text-base text-black">Ofert</h2>
        </div>
        <div class="flex justify-center items-center w-[70px] h-[70px] bg-orange-100 rounded-full">
            <i class="fa-solid fa-handshake text-2xl text-orange-200"></i>
        </div>
    </div>
    <div
        class="flex justify-between items-center p-5 bg-white rounded-2xl w-[90%] max-w-[235px] border-[1px] border-gray-200">
        <div class="flex flex-col gap-5">
            <h2 class="text-xl text-black font-semibold">156</h2>
            <h2 class="text-base text-black">Klientów</h2>
        </div>
        <div class="flex justify-center items-center w-[70px] h-[70px] bg-green-100 rounded-full">
            <i class="fa-solid fa-users text-2xl text-green-200"></i>
        </div>
    </div>
</div>

@endsection
