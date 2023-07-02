<?php
require "function.php";

if (!isset($_SESSION["login_pelanggan"]) || $_SESSION["login_pelanggan"] !== true) {
    header("Location: login.php");
    exit;
}
$id_pelanggan = $_SESSION['pelanggan'];

if (isset($_POST['pesan'])) {
    if (input($_POST, $id_pelanggan) > 0) {
        header('location:riwayat_pemesanan.php');
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Pesan</title>
    <meta charset="UTF-8">
    <meta name="description" content="SolMusic HTML Template">
    <meta name="keywords" content="music, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="favicon_repair.png" rel="shortcut icon" />

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap"
        rel="stylesheet">
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

    <!-- Order section -->
    <section class="order-section spad">
        <div class="container container-form">
            <div class="card">
            
                <h5 class="card-title">Form <span>Pemesanan</h5><span>
                    <div class="card-body">
                        <form action="#" method="post">
                            <label class="form-label">1. DETAIL KERUSAKAN BARANG</label><br>
                            <select class="form-select" aria-label="Default select example" name="elektronik" required>
                                <option selected>Pilih Jenis Elektronik</option>
                                <option value="1">Televisi</option>
                                <option value="2">Kulkas</option>
                                <option value="3">AC</option>
                                <option value="4">Mesin Cuci</option>

                            </select>
                            <br><br>
                            <input type="text" class="form-control" id="merekInput" placeholder="Merk dan Tipe"
                                autocomplete="off" name="merek"><br>
                            <input type="text" class="form-control" id="deskripsiInput" placeholder="Deskripsi"
                                autocomplete="off" name="deskripsi"><br>
                            <label class="text">2. WAKTU PEMESANAN</label>
                            <input type="date" class="form-control" id="tanggalInput" placeholder="Tanggal"
                                autocomplete="off" name="tanggal"><br>
                            <input type="time" class="form-control" id="jamInput" placeholder="Jam" autocomplete="off"
                                name="jam"><br>
                            <div class="button-container">
                                <a href="daftar_harga.php" class="wa-link"><input type="button" value="Harga"></a>
                                <input type="submit" value="Pesan" name="pesan">
                            </div>

                        </form>

                    </div>
            </div>
        </div>
    </section>
    <!-- Order section end -->

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