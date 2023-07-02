<?php
require "function.php";

if (!isset($_SESSION["login_pelanggan"]) || $_SESSION["login_pelanggan"] !== true) {
    header("Location: login.php");
    exit;
}
$id_user = $_SESSION['user'];

if (isset($_POST['pesan'])) {
    if (input($_POST) > 0) {
        echo "data berhasil ditambahkan";
    }
}

$data = mysqli_query($conn, "SELECT pelanggan.id_pelanggan, user.email, pelanggan.nama, pelanggan.alamat, pelanggan.nomor_hp
                             FROM pelanggan 
                             JOIN user ON pelanggan.id_user = user.id_user 
                             WHERE user.id_user='$id_user'");

$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Profil</title>
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
        header {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

        }

        .card {
            max-width: 500px;
            height: 350px;
            background: #ffffff;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 10px 10px 18px 0px rgba(112, 112, 112, 0.75);
            -webkit-box-shadow: 10px 10px 18px 0px rgba(112, 112, 112, 0.75);
            -moz-box-shadow: 10px 10px 18px 0px rgba(112, 112, 112, 0.75);
        }


        .card:hover {
            transform: scale(0.98);
            box-shadow: 0px 0px 30px 1px rgba(0, 0, 0, 0.25);
        }

        .card button {
            background: white;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 20px;
            color: #000000;
        }

        .card button:hover {
            color: #000000;
            background-color: #D9D9D9;
            border-color: #D9D9D9;
        }

        .btn {
            background-color: #fc0254;
            color: rgb(238, 238, 238);
            border-radius: 10px;
            cursor: pointer;
        }

        .btn:hover {
            border-color: #000000;
            background-color: #ededed;
            transform: scale(1.1);
        }

        .whatsapp-button {
            text-decoration: none;
            color: #ffffff;
            background-color: #0a183d;
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

        .card {
            padding-top: 20px;
            color: white;
            width: 100%;
            /* Menggunakan lebar 100% agar kartu memenuhi lebar container */
            max-width: 800px;
            /* Mengatur lebar maksimum kartu */
            border-radius: 20px;
            background: #212121;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(2px);
            height: 100%;
        }

        @media (min-width: 768px) {
            .card {
                width: 50%;
                /* Mengatur lebar kartu menjadi 50% pada layar dengan lebar minimal 768px */
            }
        }

        .container-form {
            display: flex;
            justify-content: center;
            align-items: center;

            /* Mengatur tinggi container agar mengisi tinggi viewport */
        }

        h5 {
            color: #ff2525;
            text-align: center;
            font-size: 60px;
            font-family: 'Baloo Bhaijaan 2', cursive;
        }

        .card p {
            color: #848484;
            text-align: center;
            font-size: 30px;
            font-family: 'Arsenal', sans-serif;
            font-style: italic;
        }

        label {
            color: #0B0A0A;
            font-size: 20px;
            font-family: 'Catamaran', sans-serif;
            font-weight: 600;
        }

        .card input,
        .card select {
            border-radius: 100px;
            background: #F1F1F1;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;
            height: 50px;
            color: black;
            font-size: 20px;
            font-family: 'Cairo', sans-serif;

        }

        .form-select {
            width: 400px;
        }

        .card input[type="submit"],
        .card input[type="button"] {
            border-radius: 100px;
            background: #212121;
            border-color: #C13584;
            width: 200px;
            height: 50px;
            flex-shrink: 0;
            color: #FFF;
            font-size: 20px;
            font-family: 'Baloo Bhaijaan 2', cursive;
        }

        .card input[type="submit"]:hover,
        .card input[type="button"]:hover {
            color: black;
            background-color: white;
            border: none;
        }

        footer {
            margin-top: 100px;
        }
        span{
            color: white;
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
				<?php if (!isset($_SESSION["login_pelanggan"]) || $_SESSION["login_pelanggan"] !== true) {?>
					<a href="login.php" class="hr-btn">Login</a><span>|</span>
					<a href="registrasi.php" class="register">Create an account</a>
				<?php }else{ ?>
					<a href="profil.php" class="hr-btn">Profil</a><span>|</span>
					<a href="keluar.php" class="register">Keluar</a>
				<?php }?>
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

    <!-- Intro section -->
    <section class="intro-section spad">
        <div class="container container-form">
            <div class="card">
                <h5 class="card-title">Profil <span>Saya</h5><span>
                <hr>
                <div class="card-body">
                    <div class="container text-left">
                        <div class="row row-cols-4">
                            <div class="col-3">Nama</div>
                            <div class="col-1">:</div>
                            <div class="col-8">
                                <?php echo $d['nama']; ?>
                            </div>
                            <div class="col-3">Email</div>
                            <div class="col-1">:</div>
                            <div class="col-8">
                                <?php echo $d['email']; ?>
                            </div>
                            <div class="col-3">No HP</div>
                            <div class="col-1">:</div>
                            <div class="col-8">
                                <?php echo $d['nomor_hp']; ?>
                            </div>
                            <div class="col-3">Alamat</div>
                            <div class="col-1">:</div>
                            <div class="col-8">
                                <?php echo $d['alamat']; ?>
                            </div>
                        </div>
                    </div><br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a class="btn " href="edit_profil.php?id=<?php echo $d['id_pelanggan']; ?>"
                            role="button">Edit</a>
                    </div>

                </div><br>

            </div>
        </div>

    </section>
    <!-- Intro section end -->

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