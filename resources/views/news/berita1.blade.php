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
                    <img src="{{ asset('images/news/tanganipolusiudara.jpeg') }}" alt="Tangani Polusi Udara" class="responsive-img">
                    <span class="card-title">Tangani Polusi Udara, DLH DKI akan Tambah 2 Mobil Water Mist</span>
                </div>
                <div class="card-content">
                    <h4>Tangani Polusi Udara, DLH DKI akan Tambah 2 Mobil Water Mist</h4>
                    <p>Jakarta - Teknologi water mist atau penyemprotan kabut air ke udara dinilai efektif sebagai solusi mengendalikan polusi udara. Dinas Lingkungan Hidup (DLH) DKI Jakarta akan menambah dua mobil water mist dan beberapa stasiun pemantau kualitas udara untuk menangani polusi.</p>
                    <p>"Kami akan menambah lagi stasiun pemantau kualitas udara, kemudian kami juga akan mengadakan mobil water mist yang nanti bisa keliling Jakarta," kata Kepala Dinas Lingkungan Hidup DKI Jakarta Asep Kuswanto kepada wartawan di kawasan Duren Sawit, Jakarta Timur, Sabtu (27/7/2024).</p>
                    <p>Mobil water mist tersebut akan berkeliling di wilayah Jakarta dengan jangkauan 50 meter dan kapasitas tangki air hingga 5.000 liter.</p>
                    <p>Di sisi lain, Asep menjelaskan, pihaknya akan membuat rancangan peraturan daerah soal pengadaan water mist. Namun saat ini rancangan tersebut masih disusun.</p>
                    <p>"Ke depannya, untuk kebijakan water mist itu, kami akan coba dikuatkan oleh gubernur. Sehingga kami juga memasukkan nanti pada rancangan perda yang sedang kami susun," ujarnya.</p>
                    <p>"Memang penguatan terhadap penggunaan atau pemasangan ini akan lebih kuat lagi secara regulasi," lanjutnya.</p>
                    <p>Sementara itu, Pemprov DKI Jakarta juga membuat platform bagi masyarakat untuk mengecek kualitas udara Jakarta. Pemprov DKI punya platform baru udara.jakarta.go.id dimana seluruh masyarakat Jakarta bisa melihat kualitas udara dan keadaan cuaca juga bisa dilihat platform kami. "Mudah-mudahan bisa jadi informasi baru bagi masyarakat untuk dapat beraktivitas di hari tersebut," katanya.</p>
                    <p>Sebelumnya, Penjabat (PJ) Gubernur DKI Jakarta Heru Budi Hartono memastikan Pemprov DKI Jakarta akan mengaktifkan kembali teknologi water mist seperti tahun lalu. "Ya (penanganan) polusi udara, di gedung-gedung tinggi seperti tahun lalu diaktifkan bersama water mist," kata Heru di Monas, Jakarta Pusat, Jumat (17/5).</p>
                    <p>Nantinya, water mist generator ini akan dioperasikan pada pukul 09.00 sampai 10.00 WIB dan pukul 15.00 sampai 16.00 WIB. Water mist generator tidak digunakan saat musim hujan.</p>
                </div>
            </div>
        </div>

        <!-- Kolom Daftar Berita Lainnya -->
        <div class="col s12 m4">
            <div class="sidebar card">
                <div class="card-content">
                    <h5>Berita Lainnya</h5>
                    <div class="collection">
                        <a href="{{ route('berita2.index') }}" class="collection-item">
                            <div class="row">
                                <div class="col s12">
                                    <img src="{{ asset('images/news/polusiudara.jpeg') }}" alt="Polusi Udara" class="responsive-img">
                                    <span class="title">Hati-hati! Polusi Udara Tingkatkan Risiko Pneumonia</span>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('berita3.index') }}" class="collection-item">
                            <div class="row">
                                <div class="col s12">
                                    <img src="{{ asset('images/news/berita3.jpeg') }}" alt="Bahaya Polusi Udara" class="responsive-img">
                                    <span class="title">Kenali Bahaya Polusi Udara di Rumah dan Cara Menghindarinya</span>
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
