<?php
include"../baglan.php";
if(isset($_GET['id']))
{
	$Sil=$db->prepare("DELETE FROM products WHERE id=?");
	$Durum=$Sil->execute(array(intval($_GET['id'])));

	header("Location:urunlistele.php?Durum=".$Durum);
	exit;
} 
 ?>