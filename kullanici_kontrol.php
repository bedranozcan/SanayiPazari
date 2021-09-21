<?php
include"baglan.php";


	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_sifre=$_POST['kullanici_sifre'];
	$kullanici_adsoyad=$_POST['kullanici_adsoyad'];
	$kullanici_tc=$_POST['kullanici_tc'];
	$kullanici_adres=$_POST['kullanici_adres'];


 $kontrol = $db->query("SELECT * FROM uye WHERE kullanici_mail='{$_POST["kullanici_mail"]}'");
 if(kontrol->rowCount()=="0")
 {
 	$db->query("
		INSERT INTO kullanici(	kullanici_mail,kullanici_sifre,kullanici_adsoyad,kullanici_tc,kullanici_adres,kullanici_telefon) 
		VALUES('{$_POST["kullanici_mail"]}','{$_POST["kullanici_sifre"]}','{$_POST["kullanici_adsoyad"]}','{$_POST["kullanici_tc"]}','{$_POST["kullanici_adres"]}')");
 }
 else
 {
 	echo "Kullanıcı adı daha önce alınmış tekrar deneyin<br>";
 }
 header("Refresh: 3; url=kullanici_olustur.php");
 die(' 3 saniye sonra yönlendirileceksiniz.');
?>