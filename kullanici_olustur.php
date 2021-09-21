<?php
include"baglan.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Ticaret Çalışması </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form  action="kullanici_olustur.php" method="POST">
              <h1>Kayıt Ol</h1>

              <div>
                <input type="text"  name="kullanici_mail" class="form-control" placeholder="Mail Adresinizi Giriniz" required="" />
              </div>
              <div>
                <input type="password"  name="kullanici_sifre" class="form-control" placeholder="Şifrenizi Giriniz" required="" />
              </div>
              <div>
                <input type="text" name="kullanici_adsoyad" class="form-control" placeholder="Adınızı Soyadınızı Giriniz" required="" />
              </div>
              <div>
                <input type="text" name="kullanici_tc" class="form-control" placeholder="TC Kimlik Numaranızı Giriniz" required="" />
              </div>
              <div>
                <input type="text"  name="kullanici_adres" class="form-control" placeholder="Adresinizi Giriniz" required="" />
              </div>
              <div>
                <input type="text" name="kullanici_telefon" class="form-control" placeholder="Telefon Numaranızı Giriniz" required="" />
              </div>
              <div>
                 <input type="submit"  value="Kayıt Ol" class="btn btn-default submit" style="float: none; margin: 0;"  >
              </div>

              <div class="clearfix"></div>

             
            </form>
          </section>
        </div>
        <div id="register" class="animate form registration_form">
          <section class="login_content">
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
