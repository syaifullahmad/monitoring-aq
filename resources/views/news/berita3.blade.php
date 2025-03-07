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
                    <img src="{{ asset('images/news/berita3.jpeg') }}" alt="Kenali Bahaya Polusi Udara" class="responsive-img">
                    <span class="card-title">Kenali Bahaya Polusi Udara di Rumah dan Cara Menghindarinya</span>
                </div>
                <div class="card-content">
                    <p><strong>Tanggal:</strong> 17 Juli 2024</p>
                    <p>Jakarta - Banyak orang sering kali mengira polusi udara hanya berkaitan dengan polusi di luar ruangan, seperti asap pabrik dan gas buang kendaraan bermotor. Namun sebenarnya, polusi udara di dalam ruangan juga memiliki dampak serius dan berbahaya bagi kesehatan manusia sehingga perlu dikenali dengan baik.</p>
                    <p>Udara di dalam rumah bisa tercemar oleh polutan luar, seperti debu dan gas juga kontaminan dalam ruangan seperti asap rokok, bahan kimia dari perabotan dan bangunan, hingga alergen dari hewan peliharaan.</p>
                    <p><strong>Penyebab Polusi Dalam Ruangan</strong></p>
                    <div class="content">
                        <ol>
                            <li>Peralatan pembakaran rumah tangga seperti kompor tanpa exhaust fan dan pemakaian bahan bakar padat.</li>
                            <li>Asap rokok dari aktivitas merokok di dalam ruangan.</li>
                            <li>Bahan bangunan dan perabotan yang mengandung bahan kimia beracun seperti formaldehida dan asbes.</li>
                            <li>Hewan peliharaan yang dapat menyebarkan alergen.</li>
                            <li>Jamur dan serbuk sari di dalam ruangan.</li>
                            <li>Produk pembersih dan bahan kimia rumah tangga.</li>
                        </ol>
                    </div>
                    <p><strong>Bahaya Polusi dalam Ruangan</strong></p>
                    <p>Dampak dari polusi udara dalam ruangan tidak boleh dianggap remeh, baik dalam jangka pendek maupun panjang. Paparan singkat pun bisa menyebabkan gejala seperti sakit kepala, iritasi tenggorokan, atau sesak napas. Sedangkan paparan jangka panjang dapat meningkatkan risiko penyakit paru-paru, jantung, bahkan kanker.</p>
                    <p>Studi dari Health Effects Institute (HEI) mengungkapkan hampir 2.000 balita dan anak kecil meninggal setiap hari karena polusi udara, sanitasi yang buruk, dan kekurangan air bersih, hingga menjadi salah satu ancaman kesehatan terbesar kedua bagi anak-anak di seluruh dunia. Bahaya ini disebabkan oleh polusi PM2.5 yang dapat masuk ke dalam aliran darah dan merusak berbagai organ serta menyebabkan penyakit paru-paru, jantung, stroke, diabetes, dementia, dan keguguran.</p>
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
                        <a href="{{ route('berita2.index') }}" class="collection-item">
                            <div class="row">
                                <div class="col s12">
                                    <img src="{{ asset('images/news/polusiudara.jpeg') }}" alt="Polusi Udara" class="responsive-img">
                                    <span class="title">Hati-hati! Polusi Udara Tingkatkan Risiko Pneumonia</span>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('berita4.index') }}" class="collection-item">
                            <div class="row">
                                <div class="col s12">
                                    <img src="{{ asset('images/news/berita4.jpeg') }}" alt="Kualitas Udara Jakarta" class="responsive-img">
                                    <span class="title">Duh! Pagi Tadi Kualitas Udara Jakarta Terburuk Kedua di Dunia</span>
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
