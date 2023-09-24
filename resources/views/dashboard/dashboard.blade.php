@extends('dashboard.layouts.main')

@section('title', 'Pulpit - Site Wizard')

@section('content')

<div class="flex flex-row flex-wrap gap-7 justify-between w-full">
    <h2 class="text-blue-300 w-full text-lg font-semibold">Twoja strona w liczbach</h2>
    <div
        class="flex justify-between items-center p-5 bg-white rounded-2xl w-full sm:max-w-[240px] border-[1px] border-gray-200">
        <div class="flex flex-col gap-5">
            <h2 class="text-lg text-black font-semibold">156</h2>
            <h2 class="text-base text-black">Klientów</h2>
        </div>
        <div class="flex justify-center items-center w-[70px] h-[70px] bg-blue-200 rounded-full">
            <i class="fa-solid fa-users text-2xl text-blue-300"></i>
        </div>
    </div>
    <div class="flex justify-between items-center p-5 bg-white rounded-2xl w-full sm:max-w-[240px] border-[1px]
        border-gray-200">
        <div class="flex flex-col gap-5">
            <h2 class="text-lg text-black font-semibold">256</h2>
            <h2 class="text-base text-black">Wiadomości</h2>
        </div>
        <div class="flex justify-center items-center w-[70px] h-[70px] bg-purple-100 rounded-full">
            <i class="fa-solid fa-comments text-2xl text-purple-200"></i>
        </div>
    </div>
    <div class="flex justify-between items-center p-5 bg-white rounded-2xl w-full sm:max-w-[240px] border-[1px]
        border-gray-200">
        <div class="flex flex-col gap-5">
            <h2 class="text-lg text-black font-semibold">156</h2>
            <h2 class="text-base text-black">Ofert</h2>
        </div>
        <div class="flex justify-center items-center w-[70px] h-[70px] bg-orange-100 rounded-full">
            <i class="fa-solid fa-handshake text-2xl text-orange-200"></i>
        </div>
    </div>
    <div class="flex justify-between items-center p-5 bg-white rounded-2xl w-full sm:max-w-[240px] border-[1px]
        border-gray-200">
        <div class="flex flex-col gap-5">
            <h2 class="text-lg text-black font-semibold">156</h2>
            <h2 class="text-base text-black">Klientów</h2>
        </div>
        <div class="flex justify-center items-center w-[70px] h-[70px] bg-green-100 rounded-full">
            <i class="fa-solid fa-users text-2xl text-green-200"></i>
        </div>
    </div>
</div>
<div class="flex flex-col gap-7 w-full">
    <h2 class="text-blue-300 w-full text-lg font-semibold">Statystyki witryny</h2>
    <canvas class="bg-white p-6 rounded-2xl border-[1px] border-gray-200" id="myChart"></canvas>
</div>
<div class="flex flex-wrap gap-7 w-full justify-between">
    <h2 class="text-blue-300 w-full text-lg font-semibold">Szybki dostęp</h2>
    <a href="#" class="flex justify-between items-center bg-white p-6 w-full border-[1px]
        border-gray-200 rounded-2xl hover:no-underline ease-in-out duration-500 hover:bg-blue-200 sm:max-w-[32%]">
        <div class="flex flex-col gap-5">
            <h2 class="text-lg text-black font-semibold">Dodaj</h2>
            <h2 class="text-base text-black">Nowy wpis</h2>
        </div>
        <div class="flex justify-center items-center w-[70px] h-[70px] bg-blue-200 rounded-full">
            <i class="fa-solid fa-copy text-2xl text-blue-300"></i>
        </div>
    </a>
    <a href="#" class="flex justify-between items-center bg-white p-5 w-full border-[1px]
        border-gray-200 rounded-2xl hover:no-underline ease-in-out duration-500 hover:bg-blue-200 sm:max-w-[32%]">
        <div class="flex flex-col gap-5">
            <h2 class="text-lg text-black font-semibold">Dodaj</h2>
            <h2 class="text-base text-black">Nowy produkt</h2>
        </div>
        <div class="flex justify-center items-center w-[70px] h-[70px] bg-blue-200 rounded-full">
            <i class="fa-solid fa-cubes text-2xl text-blue-300"></i>
        </div>
    </a>
    <a href="#" class="flex justify-between items-center bg-white p-5 w-full border-[1px]
        border-gray-200 rounded-2xl hover:no-underline ease-in-out duration-500 hover:bg-blue-200 sm:max-w-[32%]">
        <div class="flex flex-col gap-5">
            <h2 class="text-lg text-black font-semibold">Dodaj</h2>
            <h2 class="text-base text-black">Nową usługę</h2>
        </div>
        <div class="flex justify-center items-center w-[70px] h-[70px] bg-blue-200 rounded-full">
            <i class="fa-solid fa-screwdriver-wrench text-2xl text-blue-300"></i>
        </div>
    </a>
</div>

@endsection
