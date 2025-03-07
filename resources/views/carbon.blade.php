@extends('layouts.admin')
@section('judul', 'CO | Pemantauan Kualitas Udara')
@section('carbon', 'active')

@section('css_lib')
    <link href="{{ asset('js/plugins/chartist-js/chartist.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/sweetalert/sweetalert.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/flexboxgrid.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="{{ asset('css/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/morris-chart/morris.css') }}" type="text/css" rel="stylesheet" media="screen,projection"
    >
    <link href="{{ asset('js/plugins/chartist-js/chartist.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection

@section('preloader')
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
@endsection

@section('content')

    <!-- START CONTENT -->
    <section id="content">
   
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
            <div class="container" style="width: 98%;">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Data Kualitas Carbon Monoksida (CO)</h5>
                        <!-- Tampilkan Tanggal dan Waktu Server -->
                        <p class="caption">Waktu Sekarang : {{ $serverTime }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!--breadcrumbs end-->

        <!--start container-->
        <div class="container" style="width: 98%;">
            <div class="section">
                <div class="row valign-wrapper">
                    <div class="col-xs-9">
                        <p class="title">Selamat Datang di Real-Time Monitoring Pemantauan Kualitas Udara!</p>
                        <p>Di sini, Anda dapat memantau kualitas udara secara real-time. Perhatikan grafik di bawah ini: semakin tinggi grafiknya, semakin buruk kualitas udara.</p>
                        <p>Berikut adalah panduan untuk memahami nilai kualitas udara jenis Karbon Monoksida (CO):</p>
                        <ul class="collection">
                            <li class="collection-item"><span class="badge green white-text">0 - 4.4 PPM</span> Good</li>
                            <li class="collection-item"><span class="badge yellow darken-2 white-text">4.5 - 9.4 PPM</span> Moderate</li>
                            <li class="collection-item"><span class="badge orange darken-2 white-text">9.5 - 12.4 PPM</span> Unhealthy for Sensitive Groups</li>
                            <li class="collection-item"><span class="badge red white-text">12.5 - 15.4 PPM</span> Unhealthy</li>
                            <li class="collection-item"><span class="badge purple white-text">15.5 - 30.4 PPM</span> Very Unhealthy</li>
                            <li class="collection-item"><span class="badge maroon white-text">> 30.4 PPM</span> Hazardous</li>
                        </ul>
                        <p>Perhatikan indikator ini untuk menjaga kesehatan Anda dan keluarga.</p>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="container" style="width: 98%;">
                    <div class="section">
                        <div class="divider"></div>

                        <div id="carbon-line-chart" class="section">
                            <h4 class="header" id="carbon_indikator">Carbon Monoxide(CO)</h4>
                            <div class="row">

                                <div class="col s12 m8 l9">
                                    <div class="sample-chart-wrapper">
                                        <div id="carbon-line" class="graph"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tabel Data CO -->
                        <div id="carbon-table" class="section">
                            <h4 class="header">Tabel Data CO</h4>
                            <table class="striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kadar Kualitas/PPM</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($carbon['data'] as $index => $value)
                                        <tr>
                                            <td>{{ $carbon['tanggal'][$index] }}</td>
                                            <td>{{ $value }}</td>
                                            <td>
                                                @if ($value <= 4.4)
                                                    Good
                                                @elseif ($value <= 9.4)
                                                    Moderate
                                                @elseif ($value <= 12.4)
                                                    Unhealthy for Sensitive Groups
                                                @elseif ($value <= 15.4)
                                                    Unhealthy
                                                @elseif ($value <= 30.4)
                                                    Very Unhealthy
                                                @else
                                                    Hazardous
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        </div>
                    </div>
                </div>

                {{-- <div style="width:75%;">
            <canvas id="canvas"></canvas>
        </div> --}}

                <br>
                <div class="divider"></div>



                <!--/ profile-page-wall-share -->

            </div>

        </div>


        </div>
        </div>


    </section>

@endsection

@section('js_lib')

    <script type="text/javascript" src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/plugins/chartjs/chart.min.js') }}"></script>


    <!-- morris -->
    <script type="text/javascript" src="{{ asset('js/plugins/raphael/raphael-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/morris-chart/morris.min.js') }}"></script>



    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>


    <script type="module">

        var init_data_carbon = [];

        @foreach($carbon['data'] as $index => $value)

        init_data_carbon.push({
            "date": "{{$carbon['tanggal'][$index]}}",
            "ppm": {{$carbon['data'][$index]}}
        });
        @endforeach


        var chart_carbon = Morris.Line({
            element: 'carbon-line',
            data: init_data_carbon,
            xkey: 'date',
            ykeys: ['ppm'],
            labels: ['Carbon Monoksida']
        });

        import Echo from "{{asset('js/echo.js')}}";
        import {Pusher} from '{{asset('plugins/pusher-js/dist/worker/pusher.worker.js')}}';

        window.Pusher = Pusher

        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
        var module = { }; /*   <-----THIS LINE */
        window.Echo = new Echo({
            broadcaster: 'pusher',
            key: '{{env("PUSHER_APP_KEY")}}',
            cluster: '{{env("PUSHER_APP_CLUSTER")}}',
            encrypted: false,
            wsHost: window.location.hostname,
            wsPort: 6002,
            forceTLS: false,
            disableStats: true,

        });

        window.Echo.channel('data-event')
            .listen('BroadcastDataEvent', (e) => {
                $("#carbon_indikator").html('CO: '+e.carbon+' PPM ('+e.carbon_indikator+')');

            });

        window.Echo.channel('data-chart')
            .listen('BroadcastChartEvent', (e) => {

                var data_carbon = [];
                e.carbon.data.forEach((element, index) => {
                    data_carbon.push({
                        "date": e.carbon.tanggal[index],
                        "ppm": element
                    });

                });

                chart_carbon.setData(data_carbon);



            });




        // Use Morris.Bar

        // Line Chart





    </script>



@endsection


@section('js')




@endsection
