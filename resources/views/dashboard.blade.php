@extends('layouts.admin')
@section('judul', 'AQ Data | Pemantauan Kualitas Udara')
@section('dashboard', 'active')

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
                        <h5 class="breadcrumbs-title">Nilai Data Kualitas Air Quality (AQ)</h5>
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
                        <p class="title">Selamat Datang di Real-Time Monitoring Sistem Pemantauan Kualitas Udara.</p>
                        <p>Di sini, Anda dapat memantau kualitas udara secara real-time. Perhatikan grafik di bawah ini: semakin tinggi grafiknya, semakin buruk kualitas udara.</p>
                        <p>Berikut adalah panduan untuk memahami nilai kualitas udara berdasarkan Indeks Standar Pencemar Udara (ISPU):</p>
                        <ul class="collection">
                            <li class="collection-item"><span class="badge green white-text">0 - 50</span><span class="title">Sangat Baik (Very Good)</span></li>
                            <li class="collection-item"><span class="badge lime darken-1 white-text">51 - 100</span><span class="title">Baik (Good)</span></li>
                            <li class="collection-item"><span class="badge yellow darken-2 white-text">101 - 150</span><span class="title">Sedang (Moderate)</span></li>
                            <li class="collection-item"><span class="badge orange darken-2 white-text">151 - 200</span><span class="title">Tidak Sehat bagi Kelompok Sensitif (Unhealthy for Sensitive Groups)</span></li>
                            <li class="collection-item"><span class="badge red darken-2 white-text">201 - 300</span><span class="title">Tidak Sehat (Unhealthy)</span></li>
                            <li class="collection-item"><span class="badge purple darken-2 white-text">301 - 400</span><span class="title">Sangat Tidak Sehat (Very Unhealthy)</span></li>
                            <li class="collection-item"><span class="badge brown darken-3 white-text">401 - 500</span><span class="title">Berbahaya (Hazardous)</span></li>
                            <li class="collection-item"><span class="badge black white-text">> 500</span><span class="title">Melebihi Batas Indeks (Beyond Index)</span></li>
                        </ul>
                        <p>Perhatikan indikator ini untuk menjaga kesehatan Anda dan keluarga.</p>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="container" style="width: 98%;">
                    <div class="section">

                        <div id="aq-line-chart" class="section">
                            <h4 class="header" id="aq_indikator">Air Quality(AQ)</h4>
                            <div class="row">

                                <div class="col s12 m8 l9">
                                    <div class="sample-chart-wrapper">
                                        <div id="aq-line" class="graph"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tabel Data AQ -->
                        <div id="aq-table" class="section">
                            <h4 class="header">Tabel Data AQ</h4>
                            <table class="striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kadar Kualitas/PPM</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($aq['data'] as $index => $value)
                                        <tr>
                                            <td>{{ $aq['tanggal'][$index] }}</td>
                                            <td>{{ $value }}</td>
                                            <td>
                                                @if ($value <= 50)
                                                Very Good
                                            @elseif ($value <= 100)
                                                Good
                                            @elseif ($value <= 150)
                                                Moderate
                                            @elseif ($value <= 200)
                                                Unhealthy for Sensitive Groups
                                            @elseif ($value <= 300)
                                                Unhealthy
                                            @elseif ($value <= 400)
                                                Very Unhealthy
                                            @elseif ($value <= 500)
                                                Hazardous
                                            @else
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
        var init_data_aq = [];

        @foreach($aq['data'] as $index => $value)
            init_data_aq.push({
                    "date": "{{$aq['tanggal'][$index]}}",
                    "ppm": {{$aq['data'][$index]}}
                });

        @endforeach

        var chart_aq = Morris.Line({
            element: 'aq-line',
            data: init_data_aq,
            xkey: 'date',
            ykeys: ['ppm'],
            labels: ['Air Quality']
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

                $("#aq_indikator").html('Air Quality: '+e.aq+' PPM ('+e.aq_indikator+')');
                
            });

        window.Echo.channel('data-chart')
            .listen('BroadcastChartEvent', (e) => {
                var data_aq = [];
                e.aq.data.forEach((element, index) => {
                    data_aq.push({
                        "date": e.aq.tanggal[index],
                        "ppm": element
                    });

                });

                chart_aq.setData(data_aq);


            });




        // Use Morris.Bar

        // Line Chart





    </script>



@endsection



@section('js')




@endsection
