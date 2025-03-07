@extends('layouts.admin')
@section('judul', 'Smoke | Pemantauan Kualitas Udara')
@section('smoke', 'active')

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
                        <h5 class="breadcrumbs-title">Nilai Data Kualitas Smoke</h5>
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

                <div class="divider"></div>

                <div class="container" style="width: 98%;">
                    <div class="section">
                        <div class="col-xs-9">
                        <p class="title">Selamat Datang di Real-Time Monitoring Pemantauan Kualitas Udara!</p>
                        <p>Di sini, Anda dapat memantau kualitas udara secara real-time. Perhatikan grafik di bawah ini: semakin tinggi grafiknya, semakin buruk kualitas udara.</p>
                        <p>Berikut adalah panduan untuk memahami nilai kualitas udara jenis Smoke (semua asap):</p>
                        <ul class="collection">
                            <li class="collection-item"><span class="badge green white-text">0 - 50 PPM:</span> Very Good</li>
                            <li class="collection-item"><span class="badge lime darken-2 white-text">51 - 100 PPM:</span> Good</li>
                            <li class="collection-item"><span class="badge yellow darken-3 black-text">101 - 150 PPM:</span> Moderate</li>
                            <li class="collection-item"><span class="badge orange darken-3 white-text">151 - 200 PPM:</span> Unhealthy for Sensitive Groups</li>
                            <li class="collection-item"><span class="badge red darken-2 white-text">201 - 300 PPM:</span> Unhealthy</li>
                            <li class="collection-item"><span class="badge red darken-3 white-text">301 - 400 PPM:</span> Very Unhealthy</li>
                            <li class="collection-item"><span class="badge brown darken-4 white-text">401 - 500 PPM:</span> Hazardous</li>
                            <li class="collection-item"><span class="badge black white-text">> 500 PPM:</span> Beyond Index</li>

                        </ul>
                        <p>Perhatikan indikator ini untuk menjaga kesehatan Anda dan keluarga.</p>
                        </div>
                    </div>

                        <div class="divider"></div>

                        <div id="smoke-line-chart" class="section">
                            <h4 class="header" id="smoke_indikator">Smoke</h4>
                            <div class="row">

                                <div class="col s12 m8 l9">
                                    <div class="sample-chart-wrapper">
                                        <div id="smoke-line" class="graph"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tabel Data Smoke -->
                        <div id="smoke-table" class="section">
                            <h4 class="header">Tabel Data Smoke</h4>
                            <table class="striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kadar Kualitas/PPM</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($smoke['data'] as $index => $value)
                                        <tr>
                                            <td>{{ $smoke['tanggal'][$index] }}</td>
                                            <td>{{ $value }}</td>
                                            <td>
                                                @if ($value >= 0 && $value <= 50)
                                                    Very Good
                                                @elseif ($value >= 51 && $value <= 100)
                                                    Good
                                                @elseif ($value >= 101 && $value <= 150)
                                                    Moderate
                                                @elseif ($value >= 151 && $value <= 200)
                                                    Unhealthy for Sensitive Groups
                                                @elseif ($value >= 201 && $value <= 300)
                                                    Unhealthy
                                                @elseif ($value >= 301 && $value <= 400)
                                                    Very Unhealthy
                                                @elseif ($value >= 401 && $value <= 500)
                                                    Hazardous
                                                @elseif ($value >= 501)
                                                    Beyond Index
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
        var init_data_smoke = [];
   
        @foreach($smoke['data'] as $index => $value)

        init_data_smoke.push({
            "date": "{{$smoke['tanggal'][$index]}}",
            "ppm": {{$smoke['data'][$index]}}
        });

        @endforeach


        var chart_smoke = Morris.Line({
            element: 'smoke-line',
            data: init_data_smoke,
            xkey: 'date',
            ykeys: ['ppm'],
            labels: ['Smoke']
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

                $("#smoke_indikator").html('Smoke: '+e.smoke+' PPM ('+e.smoke_indikator+')');

            });

        window.Echo.channel('data-chart')
            .listen('BroadcastChartEvent', (e) => {
                
                var data_smoke = [];
                e.smoke.data.forEach((element, index) => {
                    data_smoke.push({
                        "date": e.smoke.tanggal[index],
                        "ppm": element
                    });

                });

                chart_smoke.setData(data_smoke);


            });




        // Use Morris.Bar

        // Line Chart





    </script>



@endsection


@section('js')




@endsection
