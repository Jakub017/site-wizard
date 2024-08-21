<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head class="h-full bg-white">
        <!-- Meta Tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>{{ config("app.name", "Laravel") }}</title>

        <!-- Favicon -->
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="{{ asset('favicon/apple-touch-icon.png') }}"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="{{ asset('favicon/favicon-32x32.png') }}"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{ asset('favicon/favicon-16x16.png') }}"
        />
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet"
        />

        <!-- Font Awesome -->
        <script
            src="https://kit.fontawesome.com/1cf5dcdc03.js"
            crossorigin="anonymous"
        ></script>

        <!-- TinyMCE -->
        <script
            src="https://cdn.tiny.cloud/1/3a00bhbxk6xe40snpg9y720ayo4bn09jrfckd5p50xpbwyho/tinymce/7/tinymce.min.js"
            referrerpolicy="origin"
        ></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="h-full font-sans antialiased">
        <x-banner />

        {{--
        <div class="min-h-screen w-full flex justify-start">
            @livewire('navigation-menu') @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif @include('partials.sidebar')
            <div class="flex flex-col w-full lg:w-[calc(100%-288px)]">
                @include('partials.navbar')
                <main class="p-6">
                    {{ $slot }}
                </main>
            </div>
        </div>
        --}}

        <div>
            @include('partials.sidebar')
            <div class="lg:pl-72">
                @include('partials.navbar')

                <main class="p-4 sm:p-6">
                    {{ $slot }}
                </main>
            </div>
        </div>
        @stack('modals') @livewireScripts
    </body>

    <script>
        tinymce.init({
            selector: "#content",
            plugins:
                "anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown",
            toolbar:
                "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat",
            tinycomments_mode: "embedded",
            language: "{{ app()->getLocale() }}",

            ai_request: (request, respondWith) =>
                respondWith.string(() =>
                    Promise.reject("See docs to implement AI Assistant")
                ),
        });
    </script>
</html>
