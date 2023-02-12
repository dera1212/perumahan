<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perumahan Pengarengan Indah</title>

    <meta name="description" content="Pengarengan indah adalah salah satu perumahan elit baru di kota bekasi dengan desain interior, arsitek modern dan bahan kualitas tinggi.">

    <meta name="keywords" content="perumahan pengarengan indah, pengarengan indah, perumahan kota bekasi, perumahan elit kota bekasi, perumahan baru di bekasi">

    <meta name="author" content="Rizal Ahmad">

    <link rel="canonical" href="https://pangarenganindah.com/"/>

    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://pangarenganindah.com/"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logopengarengan.png') }}">
    <link rel="shortcut icon" href="{{ asset('img/logopengarengan.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logopengarengan.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/logopengarengan.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/logopengarengan.png') }}">


</head>
<body>

    @include('navbar.index')


    <div class="banner">
        <div class="banner-col1">
            <img src="{{ asset('img/logopengarengan.png') }}" alt="perumahan pengarengan indah">
        </div>
        <div class="banner-col2">
            <img src="{{ asset('img/pengarengan1.png') }}" alt="perumahan pengarengan indah">
        </div>
    </div>

    <div class="beranda1" id="beranda">
        <h1>PERUMAHAN PENGARENGAN INDAH</h1>
        <h3>KALIABANG TENGAH - BEKASI UTARA</h3>

        <video src="{{ asset('video/video1.mkv') }}" controls></video>
    </div>

    <div class="section3" id="lokasi">
        <div class="lokasi-col1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.35683440878!2d107.0058745!3d-6.1856922!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bd0090e8707%3A0x661d60fb2d4d1945!2sPerumahan%20Pengarengan%20Indah!5e0!3m2!1sid!2sid!4v1676189472382!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="lokasi-col2">

            <h3>Lokasi</h3>
            <p>Perumahan Pengarengan Indah
                Jl. Merpati No.14, RT.6/RW.007, Kaliabang Tengah, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17125</p>
            <h3>Strategis</h3>
            <ul>
                <li>5 Menit ke Sekolah Negeri maupun Swasta</li>
                <li>5 Menit ke Rumah Sakit (Rs. Taman Harapan Baru)</li>
                <li>5 Menit menuju Pasar Tradisional maupun Modern</li>
                <li>10 Menit menuju Kantor Kecamatan dan Kecamatan</li>
                <li>10 Menit menuju Bank Pemerintahan maupun Swasta</li>
                <li>15 Menit menuju Pusat Kota Bekasi, Mall, Pusat Perbelanjaan dan Pemda Kota Bekasi</li>
                <li>15 Menit menuju Station Bekasi</li>
                <li>3 Menit menuju Tempat bermain Anak / Keluarga (Kolam renang, Area bermain umum, Rainbow lake)</li>
            </ul>
        </div>
    </div>

    <div class="section4" id="denah">
        <h3>Denah</h3>
        <div class="denah-col1">
            
            <img src="{{ asset('img/pengarengan3.jpg') }}" alt="">
        </div>
        <div class="denah-col2">
            <img src="{{ asset('img/bad.png') }}" alt="">
            <img src="{{ asset('img/shower.png') }}" alt="">
            <img src="{{ asset('img/sofa.png') }}" alt="">
            <img src="{{ asset('img/garpusendok.png') }}" alt="">
            <img src="{{ asset('img/mobil.png') }}" alt="">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>