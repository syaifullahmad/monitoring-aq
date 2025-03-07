@extends('layouts.app')



@section('content')
    <!-- Welcome Section -->
    <div class="welcome-section">
        <div class="welcome-header">
            <img src="{{ asset('images/bg.jpg') }}" alt="Header Image">
            <div class="welcome-overlay">
                <div class="welcome-content">
                    <h1>Welcome to Air Quality Monitoring System</h1>
                    <p class="intro-text">Monitor air quality in real-time with our IoT-based web system. Stay informed about the air quality around you and take action to ensure a healthy environment. Air pollution is a critical issue that affects the health and well-being of people around the globe. The need for accurate and real-time air quality monitoring has never been more urgent. This system provides a solution by utilizing IoT devices to gather air quality data and a web interface to display and analyze this data.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section for News -->
    <div id="news" class="section scrollspy">
        <div class="container">
            <h4>Berita Terbaru</h4>
            <div class="row">
                <!-- News Cards -->
                <div class="col s12 m4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="{{ asset('images/news/tanganipolusiudara.jpeg') }}" alt="Berita 1">
                            <span class="card-title">Tangani Polusi Udara, DLH DKI akan Tambah 2 Mobil Water Mist</span>
                        </div>
                        <div class="card-content">
                            <p><strong>Tanggal:</strong> 30 Juli 2024</p>
                            <p>Jakarta - Teknologi water mist atau penyemprotan kabut air ke udara dinilai efektif sebagai solusi mengendalikan polusi udara...</p>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('berita1.index') }}" class="btn btn-small custom-btn">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="{{ asset('images/news/polusiudara.jpeg') }}" alt="Berita 2">
                            <span class="card-title">Hati-hati! Polusi Udara Tingkatkan Risiko Pneumonia</span>
                        </div>
                        <div class="card-content">
                            <p><strong>Tanggal:</strong> 27 Juli 2024</p>
                            <p>Jakarta - Polusi udara tengah menjadi sorotan di kota-kota besar, khususnya di Jakarta. Mengacu pada situs IQ Air per Sabtu (27/7), indeks kualitas...</p>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('berita2.index') }}" class="btn btn-small custom-btn">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="{{ asset('images/news/berita3.jpeg') }}" alt="Berita 3">
                            <span class="card-title">Kenali Bahaya Polusi Udara di Rumah dan Cara Menghindarinya</span>
                        </div>
                        <div class="card-content">
                            <p><strong>Tanggal:</strong> 17 Juli 2024</p>
                            <p>Jakarta - Banyak orang sering kali mengira polusi udara hanya berkaitan dengan polusi di luar ruangan, seperti asap pabrik dan gas buang kendaraan...</p>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('berita3.index') }}" class="btn btn-small custom-btn">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 center">
                    <a href="{{ route('allnews.index') }}" class="btn btn-large waves-effect waves-light blue">Lihat Semua Berita</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section for About -->
    <div id="about" class="section scrollspy">
        <div class="container">
            <h4>Tentang</h4>
            <p>Sistem Monitoring Kualitas Udara adalah sebuah proyek berbasis IoT yang dirancang untuk memantau kualitas udara secara real-time. Sistem ini menggunakan sensor MQ-135 untuk mendeteksi gas berbahaya dan mengirimkan data ke server untuk dianalisis dan ditampilkan kepada pengguna.</p>
        </div>
    </div>

    <!-- Section for Contact -->
    <div id="contact" class="section scrollspy">
        <div class="container">
            <h4>Kontak Developer</h4>
            <p>Jika Anda memiliki pertanyaan atau ingin mengetahui lebih lanjut tentang proyek ini, jangan ragu untuk menghubungi kami.</p>
            <p><strong>Email:</strong> <a href="mailto:syaifulahmad0428@gmail.com" class="blue-text">syaifulahmad0428@gmail.com</a></p>
        </div>
    </div>

    <!-- Tambahkan link ke JavaScript framework seperti jQuery dan Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.scrollspy').scrollSpy();
        });
    </script>
@endsection
