<?php
include"indexust.php";
?>
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/sanayidevrimi.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Özcan Ticaret</span>
							<h2>Sanayi Pazari</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">Keşfet</a>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/sanayi1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Özcan Ticaret</span>
							<h2>Sanayi Pazari</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">Keşfet</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->
	<!-- Features section -->
	<!--<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<!-- Features section end -->


	<!-- letest product section -->
	<section  id="urunler" class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>Yeni Ürünler</h2>
			</div>
			<div class="product-slider owl-carousel">
<?php
$Urunler=$db->query("SELECT * FROM  products ORDER BY id DESC LIMIT 5");

		while($products=$Urunler->fetch())	
			UrunListeGorunumu($products);	
		?>			
			</div>
		</div>
	</section>
	<section  id="onecıkan" class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>Öne Çıkan Ürünler</h2>
			</div>
			<div class="row">
				<?php
				$Urunler=$db->query("SELECT * FROM products WHERE productsTop=1 ORDER BY RAND() LIMIT 5");
				while($products=$Urunler->fetch())
				{

				?>
				<div class="col-lg-3 col-sm-6">
				<?php UrunListeGorunumu($products)?>
				</div>
<?php 
}
?>

			</div>
		</div>
	</section>
<?php
include"indexalt.php";
?>