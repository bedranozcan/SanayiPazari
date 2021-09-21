<?php
include"baglan.php";
include"fonksiyon.php";
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php echo $Ayar['ayar_baslik']?></title>
	<meta charset="UTF-8">
	<meta name="description" content=" <?php echo $Ayar['ayar_description']?>">
	<meta name="keywords" content="<?php echo $Ayar['ayar_keywords']?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


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
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./" class="site-logo">
							<img src="" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Arama yapın ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<a href="kullanici_giris.php"><button type=button class="btn btn-primary" >Giriş Yap</button></a>
								<a href="kullanici_olustur.php"><button type=button class="btn btn-primary" >Hesap Oluştur</button>
								<br>
								<br>
								<a href=yonet/login.php><button type=button class="btn btn-success" >Admin Girişi</button></a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="index.php">Anasayfa</a></li>
					<li><a href="#urunler">Ürünler</a></li>
					<li><a href="#onecıkan">Öne Çıkan Ürünler</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->
