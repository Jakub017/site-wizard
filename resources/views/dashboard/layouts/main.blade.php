<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jakub Lipiński">
    <title>Site Wizard - Demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" />

    <link rel="stylesheet" href="{{asset('css/dashboard/style.css')}}">
</head>

<body>
    <div class="container">
        @include('dashboard.elements.alert')
        <div class="sidebar-container">
            @include('dashboard.elements.sidebar')
        </div>
        <div class="dashboard-container">
            @include('dashboard.elements.nav')
            <div class="content-container">
                @yield('content')
            </div>
        </div>
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
