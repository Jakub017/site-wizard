<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jakub Lipiński">
    <title>@yield('title')</title>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" />
    <script src="https://kit.fontawesome.com/80916011c5.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/dashboard/style.css')}}">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex h-screen">
        @include('dashboard.elements.sidebar')
        <main class="w-full lg:w-[calc(100%-300px)]  bg-blue-100 overflow-scroll">
            @include('dashboard.elements.nav')
            <div class="max-w-[1200px] p-8 flex flex-col justify-center items-start gap-6">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- JS -->
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js">
    </script>


    <script>
        $('select.groups-select').multiselect({
            nonSelectedText: 'Wybierz grupę',
            allSelectedText: 'Wszystkie grupy'
        });

    </script>
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        const legendMargin = {
            id: 'legendMargin',
            beforeInit: function (chart, legend, options) {
                const fitValue = chart.legend.fit;
                chart.legend.fit = function fit() {
                    fitValue.bind(chart.legend)();
                    return this.height += 20;
                };
            }
        };


        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['17.09', '18.09', '19.09', '20.09', '21.09', '22.09', '23.09'],
                datasets: [{
                    label: 'Odwiedzin w ostatnich 7 dniach',
                    data: [1200, 1000, 1170, 1300, 920, 1020, 952],
                    backgroundColor: () => {
                        const ctx = document.getElementById('myChart').getContext('2d');
                        const gradient = ctx.createLinearGradient(0, 0, 0, 600);
                        gradient.addColorStop(0, 'rgba(51, 157, 255, 0.7)');
                        gradient.addColorStop(0.5, 'rgba(51, 157, 255, 0.3)');
                        gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');
                        return gradient;
                    },
                    borderWidth: 3,
                    borderColor: 'rgba(51, 157, 255, 0.5)',
                }]
            },
            options: {
                scales: {
                    y: {
                        grace: '20%'
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        align: 'start',
                    },
                },
                responsive: true,
                lineTension: 0.3,
                radius: 3,
                fill: true,
            },
            plugins: [legendMargin]
        });

    </script>
</body>

</html>
