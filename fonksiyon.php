<?php
function UrunListeGorunumu($products)
{
	?>
				
				<div class="product-item">
					<a href="urundetay.php?id=<?php echo $products['id'] ?>">
					<div class="pi-pic">
						<img src="./img/product/1.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>Sepete Ekle</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6><?php echo number_format($products['productsPrice'],2,",","."). "TL" ?></h6>
						<p><?php echo $products['productName'] ?></p>
					</div>
				</div>
			</a>
<?php				
} 
?>