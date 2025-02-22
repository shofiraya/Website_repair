<?php

require "function.php";
$query = mysqli_query($conn, "SELECT teknisi.id_teknisi,teknisi.id_elektronik, elektronik.id_elektronik, elektronik.nama as nama_elektronik,teknisi.nama as nama_teknisi, teknisi.usia, teknisi.deskripsi_pengalaman
                             FROM teknisi 
                             JOIN elektronik ON teknisi.id_elektronik = elektronik.id_elektronik
                            ");
$ulasan = mysqli_query($conn, "SELECT ulasan.id_ulasan, ulasan.ulasan, pemesanan.id_pemesanan, pelanggan.id_pelanggan, pelanggan.nama AS nama_pelanggan, elektronik.id_elektronik, elektronik.nama AS nama_elektronik 
						FROM ulasan
						JOIN pemesanan ON ulasan.id_pemesanan = pemesanan.id_pemesanan
						JOIN elektronik ON pemesanan.id_elektronik = elektronik.id_elektronik
						JOIN pelanggan ON pemesanan.id_pelanggan = pelanggan.id_pelanggan");

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>RepairLectric</title>
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

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<a href="index.php" class="site-logo">
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
			<li><a href="#">About</a></li>
			<li><a href="#">Pemesanan</a>
				<ul class="sub-menu">
					<li><a href="pesan.php">Pesan</a></li>
					<li><a href="riwayat_pemesanan.php">Riwayat Pemesanan</a></li>
					<li><a href="daftar_harga.php">Daftar Harga</a></li>
				</ul>
			</li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</header>

	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="hr-img">
								<img src="img/teknisi.png" alt="" height="550px">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hs-text">
								<h2><span>Panggil</span> Teknisi Anda</h2>
								<p>Perbaikan Alat Elektronik dengan Harga Terjangkau
								</p>
								<a href="#" class="site-btn">Panggil Sekarang</a>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="hs-item">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="hr-img">
								<img src="img/teknisi.png" alt="" height="550px">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hs-text">
								<h2><span>Solusi</span> Terbaik Anda</h2>
								<p>Perbaikan Alat Elektronik dengan Harga Terjangkau
								</p>
								<a href="#" class="site-btn">Panggil Sekarang</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Concept section -->
	<section class="concept-section spad">
		<div class="container">
			<div class="section-title" align="center">
				<h2>Tips and Trick</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="video-container">
							<iframe src="https://www.youtube.com/embed/lhWUIwObDiw" frameborder="0"
								allowfullscreen></iframe>
						</div>
						<a href="television.php" class="btn">Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
					</div><br>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="video-container">
							<iframe src="https://www.youtube.com/embed/cibaET-peTk" frameborder="0"
								allowfullscreen></iframe>
						</div>
						<a href="kulkas.php" class="btn">Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
					</div><br>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="video-container">
							<iframe src="https://www.youtube.com/embed/AiZRISPq8Og" frameborder="0"
								allowfullscreen></iframe>
						</div>
						<a href="ac.php" class="btn">Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
					</div><br>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="video-container">
							<iframe src="https://www.youtube.com/embed/KkgdtX0xrE4" frameborder="0"
								allowfullscreen></iframe>
						</div>
						<a href="mesin_cuci.php" class="btn">Selengkapnya <i class="fa-solid fa-angles-right"></i></a>
					</div>
				</div><br>
			</div>
		</div>
		</div>
	</section>
	<!-- Concept section end -->

	<!-- How section -->
	<section class="how-section spad set-bg">
		<div class="container text-white">
			<div class="section-title" align="center">
				<h2>Cari Teknisimu</h2>
			</div>
			<div class="row">
				<?php
				while ($teknisi = mysqli_fetch_array($query)) {

					?>
					<div class="col-md-4">
						<div class="how-item">
							<h4>
								<?php echo $teknisi['nama_teknisi']; ?>
								<p>
									<?php echo $teknisi['usia'] . ' Tahun'; ?>
								</p>
							</h4>
							<p>
								<?php echo $teknisi['deskripsi_pengalaman']; ?>
							</p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- How section end -->

	<!-- Intro section -->
	<section class="intro-section spad">
		<div class="container" align="center" style="padding-top: 50px; padding-bottom: 80px;">
			<div class="section-title" align="center">
				<h2>Tentang Kami</h2>
			</div>
			<div class="script">
				<p>RepairLectric adalah platform website yang dirancang untuk memudahkan Anda dalam menemukan teknisi
					yang berkualitas dan terpercaya untuk perbaikan dan pemeliharaan alat elektronik rumah tangga.
					Dengan menggunakan platform ini, Anda dapat dengan mudah menemukan teknisi yang sesuai dengan
					kebutuhan Anda dan mendapatkan layanan yang cepat dan profesional. RepairLectric menawarkan berbagai
					layanan service untuk alat elektronik seperti AC, Kulkas, Televisi, dan Mesin Cuci. Dengan
					menggunakan layanan ini, Anda dapat memastikan bahwa peralatan elektronik rumah tangga Anda selalu
					dalam kondisi yang baik dan dapat berfungsi dengan optimal.</p>
			</div>
		</div>
		</div>
	</section>
	<!-- Intro section end -->

	<!-- Subscription section -->
	<section class="subscription-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="sub-text">
						<h2>Keunggulan RepairLectric</h2>
						<h3>Berikut Merupakan Keunggulan dari Website RepairLectric</h3>

					</div>
				</div>
				<div class="col-lg-6">
					<ul class="sub-list">
						<li><img src="img/icons/check-icon.png" alt="">Memiliki Teknisi Terpercaya</li>
						<li><img src="img/icons/check-icon.png" alt="">Pelayanan Cepat dan Tepat</li>
						<li><img src="img/icons/check-icon.png" alt="">Harga yang Terjangkau</li>
						<li><img src="img/icons/check-icon.png" alt="">Terdapat Video Tips & Trick</li>
						<li><img src="img/icons/check-icon.png" alt="">Tersedia Fitur Konsultasi</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Subscription section end -->



	<!-- Premium section end -->
	<section class="premium-section spad">
		<div class="container" align="center">
			<div class="section-title">
				<h2>Pesan Sekarang Juga</h2>
			</div>
			<a href="https://wa.me/6285175002568" target="_blank" class="whatsapp-button" style="font-size: 30px">
				Order Me Now
			</a>
		</div>
	</section>
	<!-- Premium section end -->
	<section class="how-section spad set-bg">
		<div class="container text-white">
			<div class="section-title" align="center">
				<h2>Ulasan Pelanggan</h2>
			</div>
			<div class="row">
				<?php
				while ($kolom_ulas = mysqli_fetch_array($ulasan)) {

					?>
					<div class="col-md-4">
						<div class="how-item">
							<h4>
								<?php echo $kolom_ulas['nama_pelanggan']; ?>
								<p>
									<?php echo $kolom_ulas['nama_elektronik']; ?>
								</p>
							</h4>
							<p>
								<?php echo $kolom_ulas['ulasan']; ?>
							</p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>


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