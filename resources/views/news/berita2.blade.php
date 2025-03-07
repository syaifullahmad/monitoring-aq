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
                    <img src="{{ asset('images/news/polusiudara.jpeg') }}" alt="Polusi Udara" class="responsive-img">
                    <span class="card-title">Hati-hati! Polusi Udara Tingkatkan Risiko Pneumonia</span>
                </div>
                <div class="card-content">
                    <h4>Hati-hati! Polusi Udara Tingkatkan Risiko Pneumonia</h4>
                    <p>Jakarta - Polusi udara tengah menjadi sorotan di kota-kota besar, khususnya di Jakarta. Mengacu pada situs IQ Air per Sabtu (27/7), indeks kualitas udara di kota ini berada di angka 155 (tidak sehat), dengan polutan utama Particular Matters (PM) 2.5. Sebagaimana diketahui, PM 2.5 terbukti meningkatkan risiko kesehatan pada organ tubuh seperti paru-paru. Salah satu penyakit yang kerap ditimbulkan oleh polusi udara adalah pneumonia atau radang paru-paru.</p>
                    <p>"Memang benar paru-paru basah itu adalah suatu pneumonia, itu suatu peradangan pada paru yang disebabkan baik itu bakteri, parasit, virus, maupun jamur. Kenapa kemarin sempat booming waktu polusi Jakarta (memburuk), karena memang polusi itu akan menyebabkan sistem imun dari paru-paru menurun dan akan banyak sekali menyebabkan pneumonia," ujar spesialis paru dr Deny Noviantoro, SpP beberapa waktu lalu.</p>
                    <p>Dikutip dari laman Healthline, gejala pneumonia di antaranya:</p>
                    <div class="content">
                        <ol>
                            <li>Batuk hingga menghasilkan dahak (mukus)</li>
                            <li>Demam</li>
                            <li>Berkeringat atau menggigil</li>
                            <li>Napas pendek</li>
                            <li>Sakit dada, kondisinya memburuk jika bernapas atau batuk</li>
                            <li>Kelelahan</li>
                            <li>Hilang napsu makan</li>
                            <li>Nausea atau muntah</li>
                            <li>Sakit kepala</li>
                        </ol>
                    </div>
                    <p>Lebih lanjut, dr Deny menambahkan ada beberapa faktor risiko terkena pneumonia seperti sering menghirup asap rokok, asap kendaraan, atau asap kayu bakar, atau asap lain. Hal ini sering dianggap biasa, padahal bisa membuat imunitas dari paru-paru kian menurun. "Pasien sebaiknya memang segera memeriksakan diri apabila terjadi gejala-gejala tadi yang telah saya sebutkan," tutupnya.</p>
                    <p>Di samping itu, Kementerian Lingkungan Hidup dan Kehutanan RI (KLHK) mempunyai concern terhadap mitigasi serta penanganan polusi udara. Oleh karenanya, detikcom bersama KLHK bakal menyelenggarakan Festival LIKE di Jakarta Convention Center pada 8-11 Agustus 2024.</p>
                </div>
            </div>
        </div>

        <!-- Kolom Daftar Berita Lainnya -->
        <div class="col s12 m4">
            <div class="sidebar card">
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
