<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>
        Welcome | Absensi App
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="public/assets/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="public/assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="public/assets/css/responsive.css" rel="stylesheet" />
    <link rel="shortcut icon" href="public/images/abror.ico" />
    <style>
        #mobile-view {
            display: none;
        }

        @media (max-width: 992px) {
            #mobile-view {
                display: flex;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="./">
                        <img loading="lazy" src="public/images/cover/logo-cover.png" width="150px" alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop.html">SOP </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="furniture.html"> Furniture </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="mobile-view" href="login">Login</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="?hlm=login">
                                <img loading="lazy" src="images/user.png" alt="">
                                <span>
                                    Login
                                </span>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="custom_menu-btn ">
                            <button>
                                <span class=" s-1">
                                </span>
                                <span class="s-2">
                                </span>
                                <span class="s-3">
                                </span>
                            </button>
                        </div>
                    </div>

                </nav>
            </div>
        </header>
        <!-- end header section -->
        
        <!-- slider section -->
        <section class="slider_section ">
            <div class="play_btn">
                <a href="scan">
                    <img loading="lazy" src="public/assets/images/play.png" alt="">
                </a>
            </div>
            <div class="number_box">
                <div>
                    <ol class="carousel-indicators indicator-2">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
                    </ol>
                </div>
            </div>
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            System
                                            <span>
                                                Absensi
                                            </span>
                                        </h1>
                                        <p>
                                            Sederhanakan Pencatatan Absensi Sekolah dan Tingkatkan Efisiensi dengan
                                            Solusi Yang Inovatif!
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="public/images/cover/slide-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Modern
                                            <span>
                                                & Canggih
                                            </span>
                                        </h1>
                                        <p>
                                            Optimalkan pengelolaan absensi sekolah Anda dengan sistem absensi yang
                                            menggunakan teknologi modern dan canggih!
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="public/images/cover/slide-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Easy
                                            <span>
                                                & Fun
                                            </span>
                                        </h1>
                                        <p>
                                            Absen menggunakan Kartu Pelajar lebih praktis dan menyingkat waktu, serta
                                            memberi pengalaman menyenangkan bagi Siswa!
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="public/images/cover/slide-3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Sekolah
                                            <span>
                                                Modern 2.0
                                            </span>
                                        </h1>
                                        <p>
                                            Memajukan Pendidikan modern 2.0 dengan Teknologi Revolusioner & mendukung
                                            Efesiensi Pengarsipan Absen Siswa!
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img loading="lazy" src="public/images/cover/slide-4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>
    <!-- Section cari siswa -->
    <section class="cari_siswa" id="cari">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>Pencarian Data Siswa</h2>
                        </div>
                        <form method="GET" action="#cari" class="search-form mt-3">
                            <input type="text" name="keyword" placeholder="Masukkan kata kunci pencarian">
                            <input type="submit" value="Cari">
                        </form>
                    </div>
                </div>
                <div class="col-md-12">

                    <?php
                    // Data siswa
                    $siswa = array(
                        array('No' => '1', 'Nama' => 'John Doe', 'Kelas' => 'XII A', 'Absen' => 'H,I,S,T', 'Tanggal Absen' => '2023-06-01'),
                        array('No' => '2', 'Nama' => 'Jane Smith', 'Kelas' => 'XI B', 'Absen' => 'H,I,S,T', 'Tanggal Absen' => '2023-06-02'),
                        array('No' => '3', 'Nama' => 'David Williams', 'Kelas' => 'X A', 'Absen' => 'H,I,S,T', 'Tanggal Absen' => '2023-06-03')
                    );

                    // Cek apakah terdapat kata kunci pencarian
                    if (isset($_GET['keyword'])) {
                        $keyword = $_GET['keyword'];

                        // Filter data siswa berdasarkan kata kunci
                        $filtered_siswa = array_filter($siswa, function ($item) use ($keyword) {
                            return (stripos($item['No'], $keyword) !== false) ||
                                (stripos($item['Nama'], $keyword) !== false) ||
                                (stripos($item['Kelas'], $keyword) !== false) ||
                                (stripos($item['Absen'], $keyword) !== false) ||
                                (stripos($item['Tanggal Absen'], $keyword) !== false);
                        });

                        // Tampilkan data siswa yang terfilter
                        if (!empty($filtered_siswa)) {
                            echo '<table>';
                            echo '<tr><th>No</th><th>Nama</th><th>Kelas</th><th>Absen</th><th>Tanggal Absen</th></tr>';
                            foreach ($filtered_siswa as $siswa) {
                                echo '<tr>';
                                echo '<td>' . $siswa['No'] . '</td>';
                                echo '<td>' . $siswa['Nama'] . '</td>';
                                echo '<td>' . $siswa['Kelas'] . '</td>';
                                echo '<td>' . substr($siswa['Absen'], 0, 1) . '</td>';
                                echo '<td>' . $siswa['Tanggal Absen'] . '</td>';
                                echo '</tr>';
                            }
                            echo '</table>';
                        } else {
                            echo 'Data siswa tidak ditemukan.';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>


    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Tentang Kami
                            </h2>

                        </div>
                        <p>
                            <span id="typing-text"></span>
                            <span id="cursor"></span>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img loading="lazy" src="public/images/cover/tentang.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- contact section -->

    <section class="contact_section layout_padding">
        <div class="container ">
            <div class="heading_container">
                <h2 class="">
                    Lokasi Kami
                </h2>
            </div>

        </div>
        <div class="container" style="text-align: center;">
            <div class="row">
                <div class="col-md-12">
                    <div class="map_container">
                        <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7915.658272278782!2d111.923977!3d-7.2602780000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e782b12c820314d%3A0x9ed7d5c71ba0009e!2sMA%20Al-Abror%20Sukosewu!5e0!3m2!1sid!2sid!4v1687914894512!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="info_logo">
                <h2>
                    Absensi Siswa
                </h2>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="info_contact">
                        <h5>
                            Tentang Kami
                        </h5>
                        <div>
                            <div class="img-box">
                                <img loading="lazy" src="public/assets/images/location-white.png" width="18px" alt="">
                            </div>
                            <p>
                                Jl Raya Sukosewu No. 147
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img loading="lazy" src="public/assets/images/telephone-white.png" width="12px" alt="">
                            </div>
                            <p>
                                0822-4749-2922
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img loading="lazy" src="public/assets/images/envelope-white.png" width="18px" alt="">
                            </div>
                            <p>
                                maalabrorsukosewu00@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info_info">
                        <h5>
                            Informasi
                        </h5>
                        <p>
                            Adalah salah satu satuan pendidikan dengan jenjang MA di Sukosewu, Kec. Sukosewu, Kab. Bojonegoro, Jawa Timur. Dalam menjalankan kegiatannya, MAS AL ABROR berada di bawah naungan Kementerian Agama.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info_form ">
                        <h5>
                            Sosial Media
                        </h5>

                        <div class="social_box">
                            <a href="https://www.instagram.com/malabrortv/?hl=id">
                                <img loading="lazy" src="public/assets/images/instagram.png" alt="malabrortv">
                            </a>
                            <a href="https://www.tiktok.com/@malabrortv?_t=8dQoJthbEYs&_r=1">
                                <img loading="lazy" src="public/assets/images/tiktok.png" alt="@malabrortv">
                            </a>
                            <a href="https://www.youtube.com/@malabror_tv">
                                <img loading="lazy" src="public/assets/images/youtube.png" alt="malabror_tv">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section ">
        <div class="container">
            <p>
                &copy; <?= date('Y') ?> All Rights Reserved By
                <a href="https://github.com/whyyy24">Whyyy-Project</a>
            </p>
        </div>
    </section>
    <!-- end  footer section -->

    <span id="topButton" onclick="scrollToTop()" class="top-btn">top</span>

    <script type="text/javascript" src="public/assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="public/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
    <script src="public/assets/js/custom-cover.js"></script>

</body>

</html>
</html>