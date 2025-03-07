@extends('layouts.admin')
@section('judul', 'CO2 | Pemantauan Kualitas Udara')
@section('co', 'active')

@section('css_lib')
    <link href="{{ asset('js/plugins/chartist-js/chartist.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/sweetalert/sweetalert.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/flexboxgrid.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="{{ asset('css/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/morris-chart/morris.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
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
                        <h5 class="breadcrumbs-title">Nilai Data Kualitas Carbon Dioxide (CO2)</h5>
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
                        <p>Berikut adalah panduan untuk memahami nilai kualitas udara jenis Karbon Dioksida (CO2):</p>
                        <ul class="collection">
                            <li class="collection-item"><span class="badge green white-text">0 - 400 PPM</span><span class="title">Excellent</span></li>
                            <li class="collection-item"><span class="badge lime darken-1 white-text">401 - 1000 PPM</span><span class="title">Good</span></li>
                            <li class="collection-item"><span class="badge yellow darken-2 white-text">1001 - 2000 PPM</span><span class="title">Moderate</span></li>
                            <li class="collection-item"><span class="badge orange darken-2 white-text">2001 - 5000 PPM</span><span class="title">Poor</span></li>
                            <li class="collection-item"><span class="badge red darken-2 white-text">5001 - 10000 PPM</span><span class="title">Very Poor</span></li>
                            <li class="collection-item"><span class="badge black white-text">> 10000 PPM</span><span class="title">Hazardous</span></li>
                        </ul>
                        <p>Perhatikan indikator ini untuk menjaga kesehatan Anda dan keluarga.</p>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="container" style="width: 98%;">
                    <div class="section">

                        <div class="divider"></div>

                        <div id="co-line-chart" class="section">
                            <h4 class="header" id="co_indikator">Carbon Dioxide(CO2)</h4>
                            <div class="row">

                                <div class="col s12 m8 l9">
                                    <div class="sample-chart-wrapper">
                                        <div id="co-line" class="graph"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tabel Data CO2 -->
                        <div id="co-table" class="section">
                            <h4 class="header">Tabel Data CO2</h4>
                            <table class="striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kadar Kualitas/PPM</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($co['data'] as $index => $value)
                                        <tr>
                                            <td>{{ $co['tanggal'][$index] }}</td>
                                            <td>{{ $value }}</td>
                                            <td>
                                                @if ($value >= 0 && $value <= 400)
                                                    Excellent
                                                @elseif ($value >= 401 && $value <= 1000)
                                                    Good
                                                @elseif ($value >= 1001 && $value <= 2000)
                                                    Moderate
                                                @elseif ($value >= 2001 && $value <= 5000)
                                                    Poor
                                                @elseif ($value >= 5001 && $value <= 10000)
                                                    Very Poor
                                                @elseif ($value >= 10001)
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
        var init_data_co = [];

        @foreach($co['data'] as $index => $value)
        init_data_co.push({
            "date": "{{$co['tanggal'][$index]}}",
            "ppm": {{$co['data'][$index]}}
        });

        @endforeach

        var chart_co = Morris.Line({
            element: 'co-line',
            data: init_data_co,
            xkey: 'date',
            ykeys: ['ppm'],
            labels: ['CO2']
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

                $("#co_indikator").html('CO2: '+e.co+' PPM ('+e.co_indikator+')');
    
            });

        window.Echo.channel('data-chart')
            .listen('BroadcastChartEvent', (e) => {

                var data_co = [];
                e.co.data.forEach((element, index) => {
                    data_co.push({
                        "date": e.co.tanggal[index],
                        "ppm": element
                    });

                });

                chart_co.setData(data_co);

            });




        // Use Morris.Bar

        // Line Chart





    </script>



@endsection


@section('js')




@endsection
