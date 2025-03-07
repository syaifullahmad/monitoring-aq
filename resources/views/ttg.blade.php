@extends('layouts.app')

@section('content')
    <!-- Section for About -->
    <div id="about" class="section scrollspy">
        <div class="container">
            <h4>Tentang</h4>
            <p>Sistem Pemantauan Kualitas Udara adalah sebuah proyek berbasis IoT yang dirancang untuk memantau kualitas udara secara real-time. Sistem ini menggunakan sensor MQ-135 untuk mendeteksi gas berbahaya seperti karbon monoksida (CO), amonia (NH3), benzena (C6H6), dan gas berbahaya lainnya. Data yang diperoleh dari sensor dikirim ke server dan dianalisis untuk memberikan informasi yang akurat kepada pengguna mengenai kualitas udara di lingkungan sekitar mereka.</p>
            <p>Proyek ini bertujuan untuk memberikan solusi teknologi yang inovatif dalam memantau dan memperbaiki kualitas udara, serta membantu masyarakat memahami dampak polusi udara terhadap kesehatan dan lingkungan. Dengan informasi yang real-time, pengguna dapat mengambil tindakan preventif untuk menjaga kesehatan mereka dan mengurangi dampak negatif dari polusi udara.</p>
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
