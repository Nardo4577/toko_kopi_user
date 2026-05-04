<?php
// Otomatis mengambil status login dan nama dari Session CodeIgniter
$session = session();
$is_logged_in = $session->get('isLoggedIn') ? true : false; 
$nama_user = $session->get('username') ?? ''; 
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kedai Kopi Senja - Coffee Shop Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Cemre Tellioğlu Tunçay">

        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
        <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/32/924/924514.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/16/924/924514.png" sizes="16x16" />
        <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/reset.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/animate.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/responsive.css') ?>">
        <script src="<?= base_url('js/vendor/modernizr-2.8.3.min.js') ?>"></script>

    </head>
    <body>
        <header class="top">
            <div class="fixedArea">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 noPadding">
                        <div class="content-wrapper one">
                            <header class="header">
                                <nav class="navbar navbar-default myNavBar">
                                    <div class="container">
                                        <div class="navbar-header">
                                            <div class="row">
                                                <div class="col-md-9 col-sm-9 col-xs-9">
                                                    <div class="row">
                                                        <div class="col-md-3 col-xs-3 col-sm-3">
                                                            <a style="padding-top:0px;" class="navbar-brand navBrandText text-uppercase font-weight-bold" href="#section0"><img src="https://cdn-icons-png.flaticon.com/64/924/924514.png" alt="restorant" width="47" /></a>
                                                        </div>
                                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                                            <a href="#section0"><img class="img-responsive logo" src="https://placehold.co/200x50/3e2723/ffffff?text=Kopi+Senja" alt="restorant" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                                 
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right navBar">
                                                <li class="nav-item"><a href="#section0" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Beranda <span class="sr-only">(current)</span></a></li>
                                                <li class="nav-item"><a href="#section1" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Promo</a></li>
                                                <li class="nav-item"><a href="#section2" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Tentang</a></li>
                                                <li class="nav-item"><a href="#section3" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Menu</a></li>
                                                <li class="nav-item"><a href="#section5" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Blog</a></li>
                                                <li class="nav-item"><a href="#section6" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Reservasi</a></li>
                                                <li class="nav-item"><a href="#section7" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Lokasi</a></li>
                                                
                                                <?php if ($is_logged_in): ?>
                                                    <li class="nav-item dropdown profile-dropdown">
                                                        <a href="#" class="dropdown-toggle nav-link font-weight-bold" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-transform: none;">
                                                            <img src="https://cdn-icons-png.flaticon.com/128/3135/3135715.png" width="22" style="border-radius: 50%; margin-right: 5px; margin-top: -4px;">
                                                            <?= htmlspecialchars($nama_user) ?> <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="<?= base_url('logout') ?>" style="color: #e74c3c;"><i class="fa fa-sign-out" style="margin-right: 8px;"></i> Keluar</a></li>
                                                        </ul>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="nav-item">
                                                        <a href="#" data-toggle="modal" data-target="#loginModal" class="nav-link text-uppercase font-weight-bold">Login</a>
                                                    </li>
                                                <?php endif; ?>
                                                <li class="nav-item">
                                                    <a href="<?= base_url('keranjang') ?>" class="nav-link text-uppercase font-weight-bold js-scroll-trigger" style="font-size: 18px;">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="section0" class="slider-area"> 
            <div class="main-slider owl-theme owl-carousel"> 
                <div class="single-slide item" style="background-image: url('https://images.unsplash.com/photo-1497935586351-b67a49e012bf?auto=format&fit=crop&w=1900&q=80')">
                    <div class="slider-content-area">  
                        <div class="row">
                            <div class="slide-content-wrapper text-center">
                                <div class="slide-content">
                                    <img class="classic" src="https://cdn-icons-png.flaticon.com/64/924/924514.png" width="47">
                                    <h3>Kedai Kopi Senja </h3>
                                    <h2>Awali Harimu dengan Secangkir Inspirasi</h2>
                                    <p>Nikmati perpaduan biji kopi pilihan terbaik yang diseduh dengan sepenuh hati. Tempat terbaik untuk bersantai dan mencari ide.</p>
                                    <a class="default-btn" href="<?= base_url('keranjang') ?>">Pesan Sekarang</a>
                                    <img class="classic" src="<?= base_url('img/new/icon.png') ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide item" style="background-image: url('https://images.unsplash.com/photo-1442512595331-e89e73853f31?auto=format&fit=crop&w=1900&q=80')">
                    <div class="slider-content-area">   
                        <div class="row">
                            <div class="slide-content-wrapper text-center">
                                <div class="slide-content">
                                    <img class="classic" src="https://cdn-icons-png.flaticon.com/64/924/924514.png" width="47">
                                    <h3>Kedai Kopi Senja </h3>
                                    <h2>Cita Rasa Nusantara di Setiap Tegukan</h2>
                                    <p>Kami menggunakan 100% biji kopi lokal Indonesia yang dipanggang sempurna untuk menghasilkan aroma yang memikat.</p>
                                    <a class="default-btn" href="<?= base_url('keranjang') ?>">Pesan Sekarang</a>
                                    <img class="classic" src="<?= base_url('img/new/icon.png') ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="single-slide item" style="background-image: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1900&q=80')">
                    <div class="slider-content-area">   
                        <div class="row">
                            <div class="slide-content-wrapper text-center">
                                <div class="slide-content">
                                    <img class="classic" src="https://cdn-icons-png.flaticon.com/64/924/924514.png" width="47">
                                    <h3>Kedai Kopi Senja </h3>
                                    <h2>Tempat Nyaman untuk Bertemu</h2>
                                    <p>Fasilitas lengkap dengan WiFi super cepat dan suasana yang mendukung produktivitas kerja maupun tugas kuliah Anda.</p>
                                    <a class="default-btn" href="<?= base_url('keranjang') ?>">Pesan Sekarang</a>
                                    <img class="classic" src="<?= base_url('img/new/icon.png') ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </section>

        <section id="section1" class="topOff">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body colorfullPanel text-center">
                                <h3>Diskon Hingga 15%</h3>
                                <h2>Promo Spesial <span>Hari Ini</span>
                                    <img class="classic" src="<?= base_url('img/new/icon.png') ?>">
                                </h2>
                                <p>Dapatkan potongan harga khusus untuk semua varian kopi susu gula aren dengan menunjukkan kartu pelajar/mahasiswa Anda.</p>                            
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default colorfullParent">
                            <div class="panel-body colorfullPanel text-center">
                                <h3>Baru Pertama Kali Kesini?</h3>
                                <h2><span>Kenali</span> Biji Kopi Kami
                                    <img class="classic" src="<?= base_url('img/new/icon.png') ?>">
                                </h2>
                                <p>Barista kami siap membantu Anda memilih jenis kopi yang paling sesuai dengan selera, mulai dari yang ringan hingga ekstra pekat.</p>                            
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body colorfullPanel text-center">
                                <h3>Bawa Pulang Kopi Segar</h3>
                                <h2><span>Beli</span> Biji Kopi Roasting
                                    <img class="classic" src="<?= base_url('img/new/icon.png') ?>">
                                </h2>
                                <p>Kami juga menyediakan biji kopi utuh atau bubuk berkualitas premium yang bisa Anda seduh sendiri di rumah.</p>                            
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <div class="maintext text-center">
                            <span>Menyeduh Sejak 2020</span>
                            <h2>Selamat Datang di Kopi Senja</h2>
                            <p>Kami percaya bahwa setiap cangkir kopi memiliki cerita. Berawal dari kecintaan terhadap kopi nusantara, kami menghadirkan ruang hangat untuk menikmati setiap tetes espresso terbaik.</p>                        
                        </div>  
                    </div>
                </div>
                <div class="row shapes">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 minHeightProp">
                                <img class="imgback" src="<?= base_url('img/shape/shape1.png') ?>">
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <span>Biji Kopi Pilihan</span>
                                    <p>Biji kopi kami diseleksi langsung dari petani lokal dengan standar kualitas terbaik untuk menjaga konsistensi rasa.</p>                                
                                </div> 
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 minHeightProp">
                                <img class="imgback" src="<?= base_url('img/shape/shape2.png') ?>">
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <span>Mesin Espresso Modern</span>
                                    <p>Diekstraksi dengan mesin berteknologi tinggi untuk memastikan krema yang tebal dan rasa yang seimbang di setiap cangkir.</p>
                                </div> 
                            </div> 
                        </div> 
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 minHeightProp">
                                <img class="imgback" src="<?= base_url('img/shape/shape3.png') ?>">
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <span>Barista Berpengalaman</span>
                                    <p>Setiap cangkir disajikan oleh barista profesional kami yang memahami teknik penyeduhan kopi secara presisi dan penuh seni. </p>
                                </div> 
                            </div> 
                        </div>  
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="banner" style="background-image: url('https://images.unsplash.com/photo-150713375007c-440263300067?auto=format&fit=crop&w=1170&q=80');">
                <div class="content text-center">
                    <span>MENU BARU!!! NIKMATI HANYA Rp 25.000/CUP (TERBATAS)</span>
                    <h2 style="color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Caramel Macchiato</h2>
                    <img src="https://images.unsplash.com/photo-1485808191679-5f86510681a2?auto=format&fit=crop&w=400&q=80" alt="Caramel Macchiato" style="width: 180px; height: 180px; object-fit: cover; border-radius: 15px; border: 4px solid #fff; box-shadow: 0 10px 20px rgba(0,0,0,0.3); margin-top: 20px;">
                    <a href="<?= base_url('keranjang') ?>" style="color: white; text-decoration: none;">
                        <h3>PESAN SEKARANG</h3>
                        <img class="classic" src="<?= base_url('img/new/icon.png') ?>">
                    </a>
                </div>
            </div>
        </div>

        <section id="section3">
            <div class="container">
                <div class="row">
                     <div class="col-xs-12">
                        <div class="section-title text-center">
                            <h3>Kualitas Premium</h3>
                            <h2>Menu Andalan Kopi Senja</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-md-12 noPadding">
                            <div id="news-slider" class="news-slider owl-theme owl-carousel">
                                
                                <div class="post-slide">
                                    <div class="post-img">
                                        <div class="post-abs"><p>Kopi Susu Gula Aren</p></div>
                                        <a href="<?= base_url('keranjang') ?>">
                                            <img src="https://images.unsplash.com/photo-1578314675249-a6910f80cc4e?auto=format&fit=crop&w=400&q=80" alt="Iced Coffee">
                                        </a>
                                    </div>
                                    <h3 class="post-title"><a href="<?= base_url('keranjang') ?>">Es Kopi Susu Senja</a></h3>
                                    <p class="post-description">
                                       Rp 20.000 <br>
                                       <a href="<?= base_url('keranjang') ?>" class="btn btn-warning btn-sm" style="margin-top: 10px; width: 100%;"><i class="fa fa-shopping-cart"></i> Tambah ke Keranjang</a>
                                    </p>
                                </div>
                 
                                <div class="post-slide">
                                    <div class="post-img">
                                        <div class="post-abs"><p>Classic Espresso</p></div>
                                        <a href="<?= base_url('keranjang') ?>">
                                            <img src="https://images.unsplash.com/photo-1510591509098-f4fdc6d0ff04?auto=format&fit=crop&w=400&q=80" alt="Espresso">
                                        </a>
                                    </div>
                                    <h3 class="post-title"><a href="<?= base_url('keranjang') ?>">Single Origin Espresso</a></h3>
                                    <p class="post-description">
                                       Rp 18.000 <br>
                                       <a href="<?= base_url('keranjang') ?>" class="btn btn-warning btn-sm" style="margin-top: 10px; width: 100%;"><i class="fa fa-shopping-cart"></i> Tambah ke Keranjang</a>
                                    </p>
                                </div>
                                
                                <div class="post-slide">
                                    <div class="post-img">
                                        <div class="post-abs"><p>Latte Art</p></div>
                                        <a href="<?= base_url('keranjang') ?>">
                                            <img src="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?auto=format&fit=crop&w=400&q=80" alt="Latte">
                                        </a>
                                    </div>
                                    <h3 class="post-title"><a href="<?= base_url('keranjang') ?>">Hot Cafe Latte</a></h3>
                                    <p class="post-description">
                                       Rp 25.000 <br>
                                       <a href="<?= base_url('keranjang') ?>" class="btn btn-warning btn-sm" style="margin-top: 10px; width: 100%;"><i class="fa fa-shopping-cart"></i> Tambah ke Keranjang</a>
                                    </p>
                                </div>
                                
                                <div class="post-slide">
                                    <div class="post-img">
                                        <div class="post-abs"><p>V60 Pour Over</p></div>
                                        <a href="<?= base_url('keranjang') ?>">
                                            <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096?auto=format&fit=crop&w=400&q=80" alt="Pour Over">
                                        </a>
                                    </div>
                                    <h3 class="post-title"><a href="<?= base_url('keranjang') ?>">Manual Brew V60</a></h3>
                                    <p class="post-description">
                                       Rp 28.000 <br>
                                       <a href="<?= base_url('keranjang') ?>" class="btn btn-warning btn-sm" style="margin-top: 10px; width: 100%;"><i class="fa fa-shopping-cart"></i> Tambah ke Keranjang</a>
                                    </p>
                                </div>

                                <div class="post-slide">
                                    <div class="post-img">
                                        <div class="post-abs"><p>Caramel Macchiato</p></div>
                                        <a href="<?= base_url('keranjang') ?>">
                                            <img src="https://images.unsplash.com/photo-1485808191679-5f86510681a2?auto=format&fit=crop&w=400&q=80" alt="Caramel Macchiato">
                                        </a>
                                    </div>
                                    <h3 class="post-title"><a href="<?= base_url('keranjang') ?>">Iced Caramel Macchiato</a></h3>
                                    <p class="post-description">
                                       Rp 25.000 <br>
                                       <a href="<?= base_url('keranjang') ?>" class="btn btn-warning btn-sm" style="margin-top: 10px; width: 100%;"><i class="fa fa-shopping-cart"></i> Tambah ke Keranjang</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 text-center" style="margin-top: 40px; margin-bottom: 60px;">
                        <a href="<?= base_url('menu') ?>" class="btn-selengkapnya">
                            Lihat Selengkapnya <i class="fa fa-arrow-right" style="margin-left: 8px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="section4" class="parallax-window" data-parallax="scroll" data-image-src="https://images.unsplash.com/photo-1521017432531-fbd92d768814?auto=format&fit=crop&w=1900&q=80">
            <h3>Apa Kata Mereka</h3>
            <h2>Testimoni Pelanggan</h2>
            <div class="testimonial-area owl-theme owl-carousel" >
                <div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">
                    <div class="single-testimonial">
                        <div class="testimonial-info">
                            <div class="testimonial-content">
                                <p>"Tempatnya sangat nyaman untuk mengerjakan tugas kuliah. Kopi susu gula arennya juara, rasanya pas dan tidak terlalu manis."</p>
                                <h4>Budi Santoso</h4>
                                <h5>Mahasiswa Teknik Informatika</h5>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">
                    <div class="single-testimonial">
                        <div class="testimonial-info">
                            <div class="testimonial-content">
                                <p>"Baristanya sangat ramah dan merekomendasikan manual brew beans Ethiopia yang fruity banget. Pasti bakal sering kesini!"</p>
                                <h4>Nadia Salsabila</h4>
                                <h5>Freelance Designer</h5>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">
                    <div class="single-testimonial">
                        <div class="testimonial-info">
                            <div class="testimonial-content">
                                <p>"Koneksi WiFi kencang, banyak colokan, dan yang paling penting kopinya selalu konsisten rasanya. Cocok untuk meeting santai."</p>
                                <h4>Reza Pahlevi</h4>
                                <h5>Entrepreneur</h5>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>

    <section id="section5" class="blog-area" style="background-color: #fdfbf7; padding: 80px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="blog100-form-title container">
                        <h3>Cerita Kopi Senja</h3>
                        <h2>Berita & Artikel Terbaru</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="blog-card">
                        <div class="row m-0" style="display: flex; flex-wrap: wrap;">
                            <div class="col-xs-3 col-sm-3 p-0" style="padding: 0;">
                                <div class="blog-date-badge">
                                    <span class="day">15</span>
                                    <span class="month">Agustus</span>
                                    <span class="year">2026</span>
                                </div>
                            </div>
                            <div class="col-xs-9 col-sm-9">
                                <div class="blog-content">
                                    <h2>Mengenal Perbedaan Kopi Arabica dan Robusta.</h2>
                                    <p>Banyak yang belum tahu bedanya kopi Arabica dan Robusta. Di artikel ini kita akan membahas tingkat keasaman, kafein, dan *notes* rasanya.</p>
                                    <a href="#" class="blog-read-more">Baca Selengkapnya <i class="fa fa-long-arrow-right" style="margin-left: 5px;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="blog-card">
                        <div class="row m-0" style="display: flex; flex-wrap: wrap;">
                            <div class="col-xs-3 col-sm-3 p-0" style="padding: 0;">
                                <div class="blog-date-badge" style="background-color: #3e2723;">
                                    <span class="day">02</span>
                                    <span class="month">Sept</span>
                                    <span class="year">2026</span>
                                </div>
                            </div>
                            <div class="col-xs-9 col-sm-9">
                                <div class="blog-content">
                                    <h2>Tips Menyeduh Kopi V60 di Rumah Ala Barista.</h2>
                                    <p>Menyeduh kopi ala *cafe* bisa Anda lakukan sendiri di rumah. Simak panduan rasio air, kopi, serta suhu yang ideal untuk metode V60.</p>
                                    <a href="#" class="blog-read-more">Baca Selengkapnya <i class="fa fa-long-arrow-right" style="margin-left: 5px;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section6" class="contact">
            <div class="contact100-form-title container">
                <h3>Ingin Tempat Spesial?</h3>
                <h2>Langkah Reservasi Mudah</h2>
                
                <div class="contact100-form">
                    <div class="row res-step-wrapper">
                        
                        <div class="col-md-3 col-sm-6 col-xs-12 res-col">
                            <div class="res-step-card">
                                <i class="fa fa-calendar-check-o res-icon"></i>
                                <h4 class="res-title">1. Tentukan Jadwal</h4>
                                <p class="res-text">Pilih tanggal dan jam kedatangan yang sesuai dengan rencana santai atau meeting Anda.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 res-col">
                            <div class="res-step-card">
                                <i class="fa fa-users res-icon"></i>
                                <h4 class="res-title">2. Kapasitas Tamu</h4>
                                <p class="res-text">Beri tahu kami jumlah orang yang hadir agar kami menyiapkan meja yang paling nyaman.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 res-col">
                            <div class="res-step-card">
                                <i class="fa fa-star res-icon-vip"></i>
                                <h4 class="res-title">3. Pilih Kelas</h4>
                                
                                <div class="class-desc-box">
                                    <p><strong>Reguler:</strong> Area semi-outdoor nyaman dengan aroma kopi khas.</p>
                                    <p><strong>VIP <span class="vip-badge">AC</span>:</strong> Ruang private kedap suara untuk meeting eksklusif.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 res-col">
                            <div class="res-step-card">
                                <i class="fa fa-check-circle res-icon"></i>
                                <h4 class="res-title">4. Konfirmasi</h4>
                                <p class="res-text">Isi form data diri, lalu tunggu tim kami mengonfirmasi bahwa meja siap untuk Anda tempati.</p>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <a href="<?= base_url('reservasi') ?>" class="btn-reservasi-sekarang">
                                Lanjut Isi Form Reservasi <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section id="section7" class="row address parallax-window" data-parallax="scroll" data-image-src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?auto=format&fit=crop&w=1900&q=80">
        <div class="col-md-12">
            <div class="row">
                    <div class="col-md-5 col-md-offset-1 addess-description">
                        <span>Lokasi Kami</span>
                        <h2>Alamat Kopi Senja</h2>
                        <p>Kunjungi kedai kami dan nikmati suasana santai dengan seduhan kopi terbaik di kota.</p>
                        <ul>
                            <li class="address-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10 lineHeight">
                                        Utama: Jl. Kopi Raya No. 42, Semarang<br>Cabang: Jl. Senja Indah No. 10, Semarang
                                    </div>
                                </div>
                            </li>
                            <li class="address-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i class="fa fa-phone"></i>                                       
                                     </div>
                                     <div class="col-md-10 col-sm-10 col-xs-10 lineHeight">
                                        CS Utama: +62 812 3456 7890<br>Delivery: +62 898 7654 3210
                                    </div>
                                </div>
                            </li>
                            <li class="address-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i class="fa fa-envelope"></i>                                       
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10 lineHeight">
                                        Email 1: halo@kopisenja.com<br>Email 2: karir@kopisenja.com
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 addess-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32658821.818401575!2d99.41920736768124!3d-2.2753629505597477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sen!2sid!4v1658315009264!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer-area">
            <div class="container main-footer">
                
                <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget pr-60">
                                <div class="footer-logo pb-25">
                                    <div class="col-md-4 noPadding text-center">
                                        <a class="" href="index.html"><img class="img-responsive" src="https://cdn-icons-png.flaticon.com/64/924/924514.png" alt="restorant" /></a>
                                    </div>
                                    <div class="col-md-8 noPadding logo-text">
                                        <a class="" href="index.html"><img class="img-responsive" src="https://placehold.co/150x40/3e2723/ffffff?text=Kopi+Senja" alt="restorant" /></a>
                                        <p class="colorfullText font-bold" >Kedai Kopi Estetik</p>
                                    </div>        
                                </div>
                                <p>Tempat yang tepat untuk menemukan inspirasi di setiap sruputan. Buka setiap hari melayani kopi dan kehangatan.</p>
                                <div class="footer-social">
                                    <ul class="list-group">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>Informasi</h3>
                                <p class="lock"></p>
                                <ul>
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Tentang Kedai</p></a>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Kopi Terlaris</p></a>
                                            </div>
                                        </div>
                                    </li>                                
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Blog Kami</p></a>
                                            </div>
                                        </div>
                                    </li> 
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Menu Baru</p></a>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Kebijakan Privasi</p></a>
                                            </div>
                                        </div>
                                    </li>                               
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>Tautan Berguna</h3>
                                <p class="lock"></p>
                                <ul>
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Franchise / Kemitraan</p></a>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Lowongan Kerja</p></a>
                                            </div>
                                        </div>
                                    </li>                                
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>FAQ</p></a>
                                            </div>
                                        </div>
                                    </li> 
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Promo & Event</p></a>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="footer-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <div class="footer-icon"></div>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10">
                                                <a href=""><p>Pemesanan Katering</p></a>
                                            </div>
                                        </div>
                                    </li>                               
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-widget">
                                <h3>Hubungi Kami</h3>
                                <p class="lock"></p>
                                <p>Jl. Kopi Raya No. 42<br>Semarang, Jawa Tengah</p>
                                <p>+62 812 3456 7890<br>+62 898 7654 3210</p>
                                <ul>
                                    <li class="address-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <i class="fa fa-address-card"></i>
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10 single-widget-description noPadding">
                                                <span>Instagram: @kopisenja</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="address-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <i class="fa fa-phone"></i>                                       
                                             </div>
                                             <div class="col-md-10 col-sm-10 col-xs-10 single-widget-description noPadding">
                                                <span>WhatsApp Available</span>
                                            </div>
                                        </div>
                                        </li>
                                    <li class="address-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2 col-xs-2">
                                                <i class="fa fa-envelope"></i>                                       
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-10 single-widget-description noPadding">
                                                <span>halo@kopisenja.com</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>   
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Copyright © -Kedai Kopi Senja- 2026. Dimodifikasi untuk Tema Kopi.</p>
                        </div> 
                    </div>
                </div>    
            </div>
        </footer>

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
            <div class="modal-dialog custom-modal-width" role="document">
                <div class="modal-content custom-login-modal">
                    <div class="custom-login-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h3 class="custom-login-title">Kopi Senja</h3>
                        <p class="custom-login-subtitle">Masuk ke akun Anda</p>
                    </div>
                    <div class="custom-login-body">
                        
                        <?php if(session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger text-center" style="border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 13px; padding: 10px;">
                                <i class="fa fa-exclamation-triangle" style="margin-right: 5px;"></i> <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <?php if(session()->getFlashdata('success')): ?>
                            <div class="alert alert-success text-center" style="border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 13px; padding: 10px;">
                                <i class="fa fa-check-circle" style="margin-right: 5px;"></i> <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?= base_url('loginAction') ?>" method="POST">
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control custom-input" placeholder="Username" required>
                            </div>
                            <div class="form-group" style="margin-bottom: 5px;">
                                <label>Kata Sandi</label>
                                <input type="password" name="password" class="form-control custom-input" placeholder="••••••••" required>
                            </div>
                            <a href="#" class="forgot-pass">Lupa Sandi?</a>
                            <div style="clear: both;"></div>
                            <button type="submit" class="btn btn-custom-login">Masuk Akun</button>
                            <hr>
                            <p class="text-center">Belum punya akun?
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#registerModal">Daftar sekarang</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
            <div class="modal-dialog custom-modal-width" role="document">
                <div class="modal-content custom-login-modal">
                    <div class="custom-login-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h3 class="custom-login-title">Daftar Akun</h3>
                    </div>
                    <div class="custom-login-body">
                        <form action="<?= base_url('register_action') ?>" method="POST">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control custom-input" required>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control custom-input" required>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <input type="password" name="password" class="form-control custom-input" required>
                            </div>
                            <button type="submit" class="btn btn-custom-login" style="margin-top: 15px;">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?= base_url('js/vendor/jquery-1.12.0.min.js') ?>"></script>
        <script src="<?= base_url('js/jquery-easing/jquery.easing.min.js') ?>"></script>
        <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('js/parallax.min.js') ?>"></script>
        <script src="<?= base_url('js/ajax-mail.js') ?>"></script>
        <script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
        <script src="<?= base_url('js/jquery.nicescroll.min.js') ?>"></script>
        <script src="<?= base_url('js/main.js') ?>"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyIMWhs-crjT0yhctbRjfJFq75FlEhSzE&callback=initMap"></script>
        
        <?php if(session()->getFlashdata('error') || session()->getFlashdata('success')): ?>
        <script>
            $(document).ready(function() {
                $('#loginModal').modal('show');
            });
        </script>
        <?php endif; ?>

    </body>
</html>