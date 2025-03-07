@extends('layouts.admin')
@section('judul', 'About | Pemantauan Kualitas Udara')
@section('about', 'active')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1>About the Air Quality Monitoring System</h1>
            <p>This project is a part of my thesis work aimed at developing an IoT-based and web-based air quality monitoring system.</p>

            <h5>Background</h5>
            <p>Air pollution is a critical issue that affects the health and well-being of people around the globe. The need for accurate and real-time air quality monitoring has never been more urgent. This system provides a solution by utilizing IoT devices to gather air quality data and a web interface to display and analyze this data.</p>

            <h5>Objectives</h5>
            <ol>
                <li>To develop a real-time air quality monitoring system using IoT devices.</li>
                <li>To create a web interface for displaying air quality data in a user-friendly manner.</li>
                <li>To provide alerts and notifications when air quality levels are hazardous.</li>
            </ol>

            <h5>Technologies Used</h5>
            <ul class="list-inline">
                <li class="list-inline-item"><i class="fa fa-microchip"></i> NodeMCU</li>
                <li class="list-inline-item"><i class="fa-brands fa-envira"></i> MQ-135 Gas Sensor</li>
                <li class="list-inline-item"><i class="fa-solid fa-database"></i> MySQL</li>
                <li class="list-inline-item"><i class="fa-brands fa-laravel"></i> Laravel</li>
                <li class="list-inline-item"><i class="fa-brands fa-php"></i> PHP</li>
                <li class="list-inline-item"><i class="fa-brands fa-js"></i> JavaScript</li>
                <li class="list-inline-item"><i class="fa-brands fa-html5"></i> HTML</li>
            </ul>

            <style>
                .custom-list {
                    list-style-type: none;
                    padding: 0;
                }

                .custom-list li {
                    position: relative;
                    padding-left: 25px;
                    margin-bottom: 10px;
                }

                .custom-list li i {
                    position: absolute;
                    left: 0;
                    top: 0;
                    color: #17a2b8;
                }
            </style>

            <h5>Main Features</h5>
            <ol>
                <li>Real-time air quality data collection using NodeMCU and MQ-135 sensor.</li>
                <li>Data storage and management using MySQL database.</li>
                <li>Web interface built with Laravel for data visualization and analysis.</li>
                <li>WebSocket for real-time data updates on the web interface.</li>
                <li>Alerts and notifications for users when air quality levels exceed safe limits.</li>
            </ol>

            <h5>Benefits</h5>
            <p>The air quality monitoring system provides numerous benefits, including:</p>
            <ol>
                <li>Helping individuals and communities stay informed about air quality in their area.</li>
                <li>Providing real-time data that can be used by researchers and policymakers to make informed decisions.</li>
                <li>Increasing awareness about the impact of air pollution on health and the environment.</li>
            </ol>

            <h5>Contact Me</h5>
            <p>If you have any questions or would like to learn more about this project, feel free to <a href="mailto:syaifulahmad04282gmail.com">contact me via email</a>.</p>
        </div>
    </div>
</div>
@endsection