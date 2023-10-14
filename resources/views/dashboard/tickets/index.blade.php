@extends('dashboard.layouts.lists')

@section('title', 'Wsparcie - Site Wizard')
@section('page', 'Wsparcie')

@section('content')

<div class="flex gap-4 flex-wrap lg:flex-nowrap">

    <div class="bg-white border-[1px] border-gray-200 p-4 rounded-2xl flex flex-col gap-4 w-full lg:w-[65%]">
        <h2 class="font-medium text-lg">Formularz kontaktowy</h2>
        <p>Opisz Twoją sprawę, zaczynając od wskazania, czy kierujesz ją do działu technicznego czy rozliczeniowego.</p>
        <form method="POST" action="#" class="flex flex-col gap-6">
            @csrf
            @method('POST')
            <div class="flex flex-col justify-start items-start gap-1 w-full">
                <label for="email" class="text-xs text-gray-100 font-medium">Adres email</label>
                <input type="text" name="email"
                    class="outline-none border-[1px] border-gray-300 rounded-lg w-full p-2 text-black"
                    placeholder="Twój adres email" value="{{auth()->user()->email}}">
            </div>
            <div class="flex flex-col justify-start items-start gap-1 w-full">
                <label for="recipient" class="text-xs text-gray-100 font-medium">Adresat zgłoszenia</label>
                <select type="text" name="recipient"
                    class="outline-none border-[1px] border-gray-300 rounded-lg w-full p-2 cursor-pointer">
                    <option value="">Wybierz dział</option>
                    <option value="technical">Dział techniczny</option>
                    <option value="billing">Dział rozliczeniowy</option>
                </select>
            </div>
            <div class="flex flex-col justify-start items-start gap-1 w-full">
                <label for="subject" class="text-xs text-gray-100 font-medium">Temat zgłoszenia</label>
                <select type="text" name="subject"
                    class="outline-none border-[1px] border-gray-300 rounded-lg w-full p-2 cursor-pointer">
                    <option value="">Wybierz temat</option>
                    <option value="problems">Awaria strony</option>
                    <option value="payments">Płatności</option>
                    <option value="mail">Poczta</option>
                    <option value="server">Serwer</option>
                    <option value="changes">Zmiany na stronie</option>
                    <option value="other">Inny temat</option>
                </select>
            </div>
            <div class="flex flex-col justify-start items-start gap-1 w-full">
                <label for="message" class="text-xs text-gray-100 font-medium">Treść zgłoszenia</label>
                <textarea type="text" name="message"
                    class="outline-none border-[1px] border-gray-300 rounded-lg w-full p-2 h-[170px]"
                    placeholder="Treść"></textarea>
            </div>
            <div class="flex flex-col justify-start items-start gap-1 w-full">
                <label for="file" class="text-xs text-gray-100 font-medium">Załącznik</label>
                <input type="file" name="file" class="outline-none border-[1px] border-gray-300 rounded-lg w-full p-2"
                    placeholder="Opcjonalny załącznik">
            </div>
            <button type="submit" class="bg-main-300 text-white p-2 text-base rounded-md">Wyślij zgłoszenie</button>
        </form>
    </div>

    <div class="bg-white border-[1px] border-gray-200 p-4 rounded-2xl flex flex-col gap-4 w-full lg:w-[35%]">
        <h2 class="font-medium text-lg">Dane kontaktowe</h2>
        <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <h3 class="font-medium text-main-300">Kontakt telefoniczny</h3>
                <span class="text-sm">Obsługa zgłoszeń telefonicznych</span>
                <span class="text-sm">Dni powszedne w godz. <span class="font-medium">08:00 - 16:00</span></span>
                <span class="text-sm">Numer telefonu: <a class="font-medium" href="tel:+48 123 456 789">+48 123
                        456 789</a></span>
            </div>
            <div class="flex flex-col gap-1">
                <h3 class="font-medium text-main-300">Kontakt mailowy</h3>
                <span class="text-sm">Obsługa zgłoszeń mailowych</span>
                <span class="text-sm">Dni powszedne w godz. <span class="font-medium">08:00 - 16:00</span></span>
                <span class="text-sm">Adres email: <a class="font-medium"
                        href="mailto:kontakt@lipinskijakub.pl">kontakt@lipinskijakub.pl</a></span>
            </div>
            <div class="flex flex-col gap-1">
                <h3 class="font-medium text-main-300">Siedziba biura</h3>
                <span class="text-sm">ul. Reymonta 48, 48-271 Ostrołęka, Polska</span>
                <span class="text-sm">Dni powszedne w godz. <span class="font-medium">08:00 - 16:00</span></span>
                <iframe class="width-full rounded-xl"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2396.798457439162!2d21.56660007761267!3d53.077893694774986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471e41861ca8a699%3A0x65f5913987704a57!2zV8WCYWR5c8WCYXdhIFJleW1vbnRhIDQ4LCAwNy00MTAgT3N0cm_FgsSZa2E!5e0!3m2!1spl!2spl!4v1697057135770!5m2!1spl!2spl"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>


    @endsection
