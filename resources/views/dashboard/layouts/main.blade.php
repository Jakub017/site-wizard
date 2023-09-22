<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jakub Lipiński">
    <title>Site Wizard - Demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" />
    <script src="https://kit.fontawesome.com/80916011c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/dashboard/style.css')}}">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex h-screen">
        @include('dashboard.elements.sidebar')
        <main class="w-full lg:w-[calc(100%-300px)]  bg-blue-100">
            @include('dashboard.elements.nav')
            <div class="max-w-[1200px] p-14">

                @yield('content')
            </div>
        </main>
    </div>

    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js">
    </script>


    <script>
        $('select.groups-select').multiselect({
            nonSelectedText: 'Wybierz grupę',
            allSelectedText: 'Wszystkie grupy'
        });

    </script>
</body>

</html>
