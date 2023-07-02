<?php
require "function.php";

if (isset($_POST['registrasi'])) {
    registrasi($_POST);
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Registrasi</title>
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
        h1 {
            color: white;
            font-size: 60px;
        }
        p {
            color: #cacaca;
            text-align: center;
        }

        .login-section .container-form,
        .registrasi-section .container-form {
            display: flex;
            justify-content: center;
            align-items: center;

            /* Mengatur tinggi container agar mengisi tinggi viewport */
        }

        .login-section p,
        .registrasi-section p {
            margin-bottom: 20px;
            padding-top: 10px;
        }

        .login-section .card,
        .registrasi-section .card {
            background: #ffffff;
            padding-top: 20px;
            color: white;
            width: 70%;
            /* Menggunakan lebar 100% agar kartu memenuhi lebar container */
            max-width: 500px;
            /* Mengatur lebar maksimum kartu */
            background: #212121;
            height: 100%;
            box-shadow: 0px 8px 8px rgba(0, 0, 0, 0.25);
        }

        .login-section .card input[type="submit"],
        .registrasi-section .card input[type="submit"] {
            border-radius: 100px;
            background: #ff2525;
            border-color: #fc0254;
            width: 200px;
            height: 50px;
            flex-shrink: 0;
            color: #FFF;
            font-size: 20px;
        }

        .login-section .card input[type="submit"]:hover,
        .login-section .card input[type="button"]:hover,
        .registrasi-section .card input[type="submit"]:hover,
        .registrasi-section .card input[type="button"]:hover {
            color: black;
            background-color: rgb(192, 192, 192);
            border: none;
        }

        .login-section label, .registrasi-section label {
            color: #868686;
            color: #cacaca;
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
    <section class="login-section spad">
        <div class="container container-form">
            <div class="card"><br>
                <h1 class="card-title" align="center">Registrasi</h1>
                <p><em>Silahkan isi form berikut untuk melanjutkan.</em></p>
                <div class="card-body">
                    <form action="#" method="post">
                        <input type="text" class="form-control" id="merekInput" placeholder="Email" autocomplete="off"
                            name="email" required><br>
                        <input type="password" class="form-control" id="jamInput" placeholder="Password"
                            autocomplete="off" name="password" required><br>
                        <input type="password" class="form-control" id="jamInput" placeholder="Verifikasi Password"
                            autocomplete="off" name="password2" required><br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <input type="submit" value="Registrasi" name="registrasi"><br><br>
                        </div><br>
                        <p align="center">Sudah Memiliki Akun? <a href="login.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
                <div class="col-xl-9 col-lg-8 order-lg-1">
                    <img src="img/logo_repair.png" alt="">
                </div>
                <div class="col-xl-3 col-lg-4 order-lg-2">
                    <div class="footer-widget"><br>
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
            </div><br>
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
