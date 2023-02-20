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

    <link rel="stylesheet" href="{{ asset('css/custom.css?v=1.1') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logopengarengan.png') }}">
    <link rel="shortcut icon" href="{{ asset('img/logopengarengan.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logopengarengan.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/logopengarengan.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/logopengarengan.png') }}">


</head>
<body>

    @include('navbar.index')


    <div class="section1" id="beranda">
        <div class="container1">
            <div class="container1-col1">
                <h1>Perumahan Pengarengan Indah</h1>
                <h3>Kaliabang Tengah - Bekasi Utara</h3>
                <p>Pengarengan indah adalah salah satu perumahan elit baru di kota bekasi dengan desain interior, arsitek modern dan bahan kualitas tinggi.</p>
            </div>
            <div class="container1-col2">
                <h3>Isi Data</h3>

                <form class="whatsapp-form" action="#" method="post">
                    @csrf
                    <div class="datainput">
                        <input  id="nama" name="name" required type="text"/>
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Nama Anda</label>
                    </div>

                    <div class="datainput">
                        <input  id="alamat" name="alamat" required type="text"/>
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Alamat Lengkap</label>
                    </div>

                    <div class="datainput">
                        <input  id="usia" name="count" required type="number"/>
                        <span class="highlight"></span><span class="bar"></span>
                        <label>Usia</label>
                    </div>

                    <a class="send_form" id="kirim_ke_wa" type="submit" name="submit" title="Send to Whatsapp" onclick="kirimWa()">Kirim Ke Whatsapp</a>
                    <div ></div>
                    </form>
            </div>
        </div>
    </div>

    <div class="section2" id="desain">
        <h3>Estetis</h3>
        <p>Semua desain tekstur bagian luar maupun bagian dalam di buat oleh desainer handal yang mengedepankan pemodelan modern.</p>
        <div class="sec-row">

            
            
            <div class="sec2-col2">
                <h4>Tampak Depan</h4>
                <h5>Terdapat Halaman Parkir Yang Luas Dan Taman Hijau</h5>        
            </div>

            <div class="sec2-col3">
                <h4>Ruang Tengah</h4>
                <h5>Tempat Berkumpul Keluarga Dengan Dinding Yang Indah Di Pandang</h5>        
            </div>

            <div class="sec2-col4">
                <h4>Kamar Tidur 1</h4>
                <h5>Tempat Beristirahat Dengan Nyaman Dan Tidak Membosankan</h5>        
            </div>

            <div class="sec2-col5">
                <h4>Kamar Tidur 2</h4>
                <h5>Tempat Beristirahat Kedua Tidak Kalah Nyaman Untuk Beristirahat Dan Bermimpi Indah</h5>        
            </div>

            <div class="sec2-col6">
                <h4>Kamar Mandi</h4>
                <h5>Air Jernih Dan Tidak Bau Membuat Badan Tambah Cool</h5>        
            </div>

            <div class="sec2-col7">
                <h4>Dapur</h4>
                <h5>Tidak Perlu Jauh Untuk Beli Makanan, Dapur Bisa Buat Bikin Masakan Sendiri</h5>        
            </div>
            
        </div>
    </div>


    <div class="section3" id="lokasi">

        <div class="maps-col1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.35683440878!2d107.0058745!3d-6.1856922!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698bd0090e8707%3A0x661d60fb2d4d1945!2sPerumahan%20Pengarengan%20Indah!5e0!3m2!1sid!2sid!4v1676189472382!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="maps-col2">

            <div class="konten-col2">
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
    </div>


    <div class="section4">

        <div class="sec4-col1">
            
        </div>

        <div class="sec4-col2">
            <h3>
                Hanya <br><span>3 Jutaan!!</span> Sudah Bisa Rencanakan Rumah Mewah Anda!
            </h3>
        </div>

    </div>


    <div class="section5" id="denah">

        <div class="sec5-col1">

        </div>

        <div class="sec5-col2">
            <img src="{{ asset('img/bad.png') }}" alt="">
            <img src="{{ asset('img/shower.png') }}" alt="">
            <img src="{{ asset('img/sofa.png') }}" alt="">
            <img src="{{ asset('img/garpusendok.png') }}" alt="">
            <img src="{{ asset('img/mobil.png') }}" alt="">
        </div>

        <div class="sec5-col3">
            <img src="{{ asset('img/kolamrenang.jpg') }}" alt="">
            <img src="{{ asset('img/tamanbermain.jpg') }}" alt="">
            <img src="{{ asset('img/rainboowlake.jpg') }}" alt="">
        </div>

    </div>

    <div class="section6" id="spesifik">
        <h3>Spesifikasi</h3>
        <div class="sec6-col">
            <p>
            Struktur<br>
            Pondasi<br>
            Dinding<br>
            Lantai<br>
            Rangkai Atap<br>
            Plafon<br>
            Kusen<br>
            </p>
        </div>
        <div class="sec6-col">
            <p>
            : Sloff Besi 10mm<br>
            : Batu Kali<br>
            : Bata Ringan<br>
            : Granit 60x60<br>
            : Baja Ringan<br>
            : Holo & Gypsum<br>
            : Alumunium<br>
            </p>
        </div>
        <div class="sec6-col">
            <p>
            Pintu Utama<br>
            Pintu Kamar<br>
            Sanitasi<br>
            Finishing<br>
            Air<br>
            Genteng Atap<br>
            Listrik<br>
            </p>
        </div>
        <div class="sec6-col">
            <p>
            : Panel Setara Meranti<br>
            : Panel Finishing Cat<br>
            : Closed Duduk<br>
            : Aci, Cat Setara Vinilex<br>
            : PDAM<br>
            : Plat Beton<br>
            : 1300<br>
            </p>
        </div>
    </div>


    <div class="section7">
        <h3>Booking Sekarang Juga!!</h3>
        <div class="sec7-col">
            <h4>Hubungi Kontak Di Bawah Ini</h4>
            <a href=""><button type="button" class="btn btn-primary">Kontak Whatsapp</button></a>
        </div>

        <div class="sec7-col">
            <h4>Download Rincian Harga Di Bawah Ini</h4>
            <a href="{{ asset('download/pricelist.pdf') }}" download="pricelist"><button type="button" class="btn btn-primary">Download Price List</button></a>
        </div>
    </div>


    <div class="footer-custom">
        <p>&copy; 2023 Pengarengan Indah. Crafted with by Rizaldev</p>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    {{-- script js kirim wa --}}

    <script>
       function kirimWa(){
        
        var nama = $('#nama').val();
        var alamat = $('#alamat').val();
        var usia = $('#usia').val();

       if(nama != '' && alamat != '' && usia != '' ){

      
            /* Whatsapp Settings */
            var walink = 'https://api.whatsapp.com/send',
                phone = '6281313213380',
                walink2 = 'Halo saya ingin Booking';

            /* Smartphone Support */
            // if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            // var walink = 'whatsapp://send';
            // }

            /* Final Whatsapp URL */
            var sendWA = walink + '?phone=' + phone + '&text=' + walink2 + '%0A%0A' +
                '*Nama* : ' + nama + '%0A' +
                '*Alamat* : ' + alamat + '%0A' +
                '*Usia* : ' + usia + '%0A';

            /* Whatsapp Window Open */
            window.open(sendWA,'_blank');
       
        
            } else{
                alert("Harap isi")
            }
    }



    </script>
</body>
</html>