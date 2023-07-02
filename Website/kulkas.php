<?php 
require "function.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Tips and Trick Kulkas</title>
    <meta charset="UTF-8">
    <meta name="description" content="SolMusic HTML Template">
    <meta name="keywords" content="music, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="img/favicon_repair.png" rel="shortcut icon" />

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap"
        rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@200&family=K2D:wght@800&display=swap"
		rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />

    <!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css" />




    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      

        .title h1 {
            font-family: 'K2D', sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 50px;
            line-height: 104px;
            /* identical to box height */
            text-align: center;
        }

        .title h3 {
            font-family: 'K2D', sans-serif;
            font-weight: 300;
            font-size: 30px;
            text-align: center;
            color: #000000;
        }

        .video {
            margin-top: 50px;
            margin-bottom: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .whatsapp-button {
            text-decoration: none;
            color: #ffffff;
            background-color: #212121;
            font-size: 37px;
            border: 1px solid #f0f0f0;
            padding: 15px 50px;
            cursor: pointer;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            text-align: center;
        }

        .whatsapp-button:hover {
            color: #000000;
            background-color: #ededed;
            border-color: #D9D9D9;
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section clearfix">
        <a href="index.html" class="site-logo">
            <img src="img/logo_repair.png" alt="">
        </a>

        <div class="header-right">
            <div class="user-panel">
                <?php if (!isset($_SESSION["login_pelanggan"]) || $_SESSION["login_pelanggan"] !== true) { ?>
                    <a href="login.php" class="hr-btn">Login</a><span>|</span>
                    <a href="registrasi.php" class="register">Create an account</a>
                <?php } else { ?>
                    <a href="profil.php" class="hr-btn">Profil</a><span>|</span>
                    <a href="keluar.php" class="register">Keluar</a>
                <?php } ?>
            </div>
        </div>
        <ul class="main-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="#">Pemesanan</a>
                <ul class="sub-menu">
                    <li><a href="pesan.php">Pesan</a></li>
                    <li><a href="riwayat_pemesanan.php">Riwayat Pemesanan</a></li>
                    <li><a href="daftar_harga.php">Daftar Harga</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

    </header>

    <!-- Header section end -->


    <!-- Intro section end -->

    <section class="intro-section spad">
        <div class="container">
            <div class="title">
                <h1>TIPS and TRICK</h1>
                <h3>Cara Merawat LED Televisi Agar Tidak Mudah Rusak</h3>

            </div>
            <div class="video">
                <iframe width="949" height="519" src="https://www.youtube.com/embed/lhWUIwObDiw"></iframe>
            </div>
            <div class="script">
                <p>1. Gunakan Stabilizer</p>
                <p>Salah satu faktor yang menyebabkan TV LED cepat rusak adalah arus listrik yang tidak stabil. Sebab
                    aliran
                    listrik yang tidak stabil, kadang mengalirkan energi yang berlebih akan merusak komponen dalam TV.
                    Jika
                    dibiarkan dalam jangka waktu yang lama akan merusak TV LED lebih cepat dibandingkan apabila terdapat
                    aliran listrik yang stabil.
                    <br>Oleh karena itu, bagi yang arus listriknya tidak stabil, seperti sering tiba-tiba mati dan
                    nyala,
                    bisa memaksimalkan pemanfaatan stabilizer sebagai salah satu upaya mencegah adanya energi yang masuk
                    terlalu besar.
                    <br>Dengan stabilizer atau stavol, energy yang hendak masuk dari kabel ke TV menjadi konsisten.
                    Sehingga
                    tidak akan merusak komponen TV. Jadi mulai sekarang, manfaatkan stabilizer atau pun stavol supaya
                    lebih
                    awet.
                </p>
                <p>2. Hindari Mendekatkan TV dengan Komponen Magnet</p>
                <p>Banyak perangkat elektronik yang tidak bisa didekatkan dengan magnet, karena magnet dapat merusak
                    komponen yang ada didalam benda-benda elektronik. Apalagi jika daya tarik yang dimiliki magnet
                    tersebut
                    kuat, berarti pengaruhnya untuk merusak lebih besar lagi. Hal ini yang menjadi pemicu TV lebih cepat
                    rusak.
                    Sebisa mungkin hindari mendekatkan TV dengan komponen magnet, karena selain merusak komponen, magnet
                    juga dapat merusak kualitas speaker TV. Bahkan bisa jadi terjadi kerusakan permanen yang sulit
                    diperbaiki.</p>
                <p>3. Beri Jeda Saat Menggunakannya</p>
                <p>Kebiasaan menyalakan TV secara non stop atau sepanjang siang dan malam harus segera diakhiri. Beri
                    jeda
                    untuk komponennya berhenti bekerja. Sebab jika dinyalakan nonstop biasanya akan membuat komponen
                    didalamnya cepat panas.
                    <br>Bila Anda melakukan kebiasaan ini setiap hari, akan membuat TV cepat rusak. Jadi mulai saat ini,
                    hindari kebiasaan buruk tersebut. Jika sudah tidak digunakan, lebih baik segera dimatikan saja.
                    Selain
                    membuat lebih awet hal ini juga lebih menghemat penggunaan listrik.
                </p>
                <p>4. Jangan Menutup TV dengan Kain</p>
                <p>Anda pasti sering melihat, untuk melindungi TV biasanya orang-orang menutupnya dengan kain. Alasannya
                    untuk menghindari debu yang berjatuhan di TV melalui celah-celah yang ada. Padahal dengan
                    menutupinya
                    menggunakan kain, membuat tidak ada sirkulasi udara.
                    <br>Apalagi jika dalam kondisi TV baru saja dimatikan, kemudian komponennya sedang melakukan
                    pendinginan
                    dan Anda menutupinya menggunakan kain, akan terjadi overheat, dan komponen menjadi lebih cepat
                    rusak.
                    Jadi sebisa mungkin hindari hal ini, Anda bisa saja membersihkan celah-celah yang terbuka dengan
                    menggunakan kemoceng. Setelah memberi jeda agar komponen TV beristirahat sejenak. Ini lebih efektif
                    daripada menutupinya dengan kain.
                </p>
                <p>5. Hindari Meletakkan Di Tempat yang Salah</p>
                <p>Selanjutnya, cara merawat televisi artinya dalam meletakkannya tidak bisa sembarangan. Posisi menjadi
                    hal
                    yang harus diperhatikan. Sebisa mungkin hindari meletakkan di tempat yang lembab, dan berdebu atau
                    tidak
                    ada sinar matahari sama sekali.
                    <br>Tetapi hindari juga meletakkan di tempat yang terlalu panas. Sebisa mungkin tetap ada cahaya
                    tetapi
                    tidak terang benderang agar visualnya lebih maksimal. Berbicara mengenai visual yang terbaik, Anda
                    mungkin bisa memperbarui TV Anda dengan produk inovasi terbaru yang lebih canggih dan menawarkan
                    visual
                    yang lebih menawan.
                </p>
            </div>
            <br><br>
            <div class="d-flex justify-content-center">
                <a href="https://wa.me/6285175002568" target="_blank" class="whatsapp-button"
                    style="font-size: 24px; border-radius: 0px; text-align: center;">
                    Konsultasikan Permasalahan TV Anda
                </a>

            </div>


    </section>


    <hr>
    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 order-lg-2">
                    <div class="footer-widget">
                        <h2>Contact Us</h2>
                        <ul class="contact-list">
                            <li><a href="https://wa.me/6285175002568" target="_blank"><i class="fa fa-whatsapp"
                                        style="color: #25D366;"></i></a> +62 851-7500-2568</li>
                            <li><a href="https://www.instagram.com/repairlectric" target="_blank"><i
                                        class="fa fa-instagram" style="color: #C13584;"></i></a> repairlectric</li>
                            <li><a href="mailto:repairlectric@gmail.com" target="_blank"><i class="fa fa-envelope"
                                        style="color: #007BFF;"></i></a> repairlectric@gmail.com</li>
                        </ul>
                    </div>

                </div>
                <div class="col-xl-6 col-lg-5 order-lg-1">
                    <img src="img/logo_repair.png" alt="">
                </div>
            </div>

        </div>
        <div class="copyright">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy;
			<script>document.write(new Date().getFullYear());</script> by RepairLectric</a>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</div>
    </footer>
    <!-- Footer section end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>