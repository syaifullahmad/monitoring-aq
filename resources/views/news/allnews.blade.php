@extends('layouts.app')

@section('judul')
    Berita | Landing Page
@endsection

@section('content')
<div class="container">
    <h4 class="center-align">Berita</h4>
    <h4 class="center-align">Semua Berita</h4>
    <div class="row">
        <!-- Berita 1 -->
        <div class="col s12 m6 l4">
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

        <!-- Berita 2 -->
        <div class="col s12 m6 l4">
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

        <!-- Berita 3 -->
        <div class="col s12 m6 l4">
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

        <!-- Berita 4 -->
        <div class="col s12 m6 l4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="{{ asset('images/news/berita4.jpeg') }}" alt="Berita 4">
                    <span class="card-title">Duh! Pagi Tadi Kualitas Udara Jakarta Terburuk Kedua di Dunia</span>
                </div>
                <div class="card-content">
                    <p><strong>Tanggal:</strong> 1 Juli 2024</p>
                    <p>Jakarta - Hari ini hingga pukul 09.10 WIB kualitas udara Jakarta berada di AQI 170 dan kadar PM2.5 mencapai 82 g/m3. Ini menjadikan Jakarta kota terpolusi kedua di dunia...</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('berita4.index') }}" class="btn btn-small custom-btn">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
