<?php 
include"../baglan.php";

if(isset($_POST['id']))
{
	if($_POST['id']>0)
	{
		$Guncelle=$db->prepare("UPDATE products SET
			categoryId=:categoryId,
			productName=:productName,
			productsPrice=:productsPrice,
			productsTop=:productsTop,
			offerCreateTime=:offerCreateTime,
			offerFinishedTime=:offerFinishedTime,
			productDescription=:productDescription,
			productSubDescription=:productSubDescription
			WHERE id=:id");

		$Durum=$Guncelle->execute(
			array(
				'categoryId'=>$_POST['categoryId'],
				'productName'=>$_POST['productName'],
				'productsPrice'=>$_POST['productsPrice'],
				'productsTop'=>$_POST['productsTop'],
				'offerCreateTime'=>$_POST['offerCreateTime'],
				'offerFinishedTime'=>$_POST['offerFinishedTime'],
				'productDescription'=>$_POST['productDescription'],
				'productSubDescription'=>$_POST['productSubDescription'],
				'id'=>$_POST['id']

			)
		);
 		print_r($Guncelle->errorInfo());
		header("Location:urundetay2.php?id=".intval($_POST["id"]));
		exit;
	}

	else
	{
		$Ekle=$db->prepare("INSERT INTO products(categoryId,productName,productsPrice,productsTop,offerCreateTime,offerFinishedTime,productDescription,productSubDescription) VALUES(:categoryId,:productName,:productsPrice,:productsTop,:offerCreateTime,:offerFinishedTime,:productDescription,:productSubDescription)");

		$Durum=$Ekle->execute(
			array(
				"categoryId"=>$_POST["categoryId"],
				"productName"=>$_POST["productName"],
				"productsPrice"=>$_POST["productsPrice"],
				"productsTop"=>$_POST["productsTop"],
				"offerCreateTime"=>$_POST["offerCreateTime"],
				"offerFinishedTime"=>$_POST["offerFinishedTime"],
				"productDescription"=>$_POST["productDescription"],
				"productSubDescription"=>$_POST["productSubDescription"]
			)
		);

		$id=$db->lastinsertid();
 		//print_r($Ekle->errorInfo());
		header("Location:urundetay2.php?id=".intval($id));
		exit;
	}
}
?>
