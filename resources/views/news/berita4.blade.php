@extends('layouts.app')

@section('judul')
    Detail Berita | Landing Page
@endsection

@section('content')
<div class="container">
    <h4 class="center-align">Berita</h4>
    <h4 class="center-align">Detail Berita</h4>
    <div class="row">
        <!-- Kolom Berita Detail -->
        <div class="col s12 m8">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/news/berita4.jpeg') }}" alt="Kualitas Udara Jakarta" class="responsive-img">
                    <span class="card-title">Duh! Pagi Tadi Kualitas Udara Jakarta Terburuk Kedua di Dunia</span>
                </div>
                <div class="card-content">
                    <p><strong>Tanggal:</strong> 1 Juli 2024</p>
                    <p>Jakarta - Hari ini hingga pukul 09.10 WIB kualitas udara Jakarta berada di AQI 170 dan kadar PM2.5 mencapai 82 g/m³. Ini menjadikan Jakarta kota terpolusi kedua di dunia.</p>
                    <p>Suasana langit di kawasan Jalan Raya Casablanka dan Sudirman tampak berasap akibat polusi, Senin (1/7/2024).</p>
                </div>
            </div>
        </div>

        <!-- Kolom Daftar Berita Lainnya -->
        <div class="col s12 m4">
            <div class="card">
                <div class="card-content">
                    <h5>Berita Lainnya</h5>
                    <div class="collection">
                        <a href="{{ route('berita1.index') }}" class="collection-item">
                            <div class="row">
                                <div class="col s12">
                                    <img src="{{ asset('images/news/tanganipolusiudara.jpeg') }}" alt="Tangani Polusi Udara" class="responsive-img">
                                    <span class="title">Tangani Polusi Udara, DLH DKI akan Tambah 2 Mobil Water Mist</span>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('berita3.index') }}" class="collection-item">
                            <div class="row">
                                <div class="col s12">
                                    <img src="{{ asset('images/news/polusiudara.jpeg') }}" alt="Polusi Udara" class="responsive-img">
                                    <span class="title">Hati-hati! Polusi Udara Tingkatkan Risiko Pneumonia</span>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('berita2.index') }}" class="collection-item">
                            <div class="row">
                                <div class="col s12">
                                    <img src="{{ asset('images/news/berita3.jpeg') }}" alt="Bahaya Polusi Udara" class="responsive-img">
                                    <span class="title">Kenali Bahaya Polusi Udara di Rumah dan Cara Menghindarinya</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
