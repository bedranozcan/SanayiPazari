<?php
include"Ust.php";
if(!isset($_GET['id']))
$_GET['id']=0;


$products=$db->prepare("SELECT * FROM products WHERE id=?");
$products->execute(array(intval($_GET['id'])));
$products=$products->fetch();
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ürünler</h3>
              </div>  
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ürün Detayı</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<?php
if(isset($_GET['Durum']))
{
  if($_GET['Durum'])
  {
 ?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Güncelleme Yapıldı</strong>
                  </div>
 <?php   
  }
  else
    {
 ?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Güncelleme Başarısız</strong>
                    </div>
 <?php   
  }
}

?>
                    <form  action="urun_guncelle.php" method="POST" class="form-horizontal form-label-left" novalidate>
                      <span class="section"><?php echo $products['productName'] ?></span>

                      <input type="hidden" name="id" value="<?php echo $products['id'] ?>">

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoryId">Kategori</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" 
                          id="categoryId" name="categoryId" value="<?php echo $products['categoryId'] ?>"placeholder="Ürünün Kategorisini Seçiniz Giriniz."  type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productName">Ürünün Adı</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" 
                          id="productName" name="productName" value="<?php echo $products['productName'] ?>"placeholder="Ürünün Adını Giriniz."  type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productsPrice">Fiyat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" 
                          id="productsPrice" name="productsPrice" value="<?php echo $products['productsPrice'] ?>"placeholder="Ürünün Fiyatını Giriniz."  type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productsTop">Vitrin Durumu</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" 
                          id="productsTop" name="productsTop" value="<?php echo $products['productsTop'] ?>"placeholder="Ürünün Vitrin Durumunu Seçiniz."  type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="offerCreateTime">Teklif Süre Başlangıç</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" 
                          id="offerCreateTime" name="offerCreateTime" value="<?php echo $products['offerCreateTime'] ?>"placeholder="Ürünün Teklif Başlangıç Zamanını Giriniz." type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="offerFinishedTime">Teklif Süre Sonu</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" 
                          id="offerFinishedTime" name="offerFinishedTime" value="<?php echo $products['offerFinishedTime'] ?>"placeholder="Ürünün Teklif Bitiş Zamanını Giriniz."  type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productDescription">Ürünün Açıklaması</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" 
                          id="productDescription" name="productDescription" value="<?php echo $products['productDescription'] ?>"placeholder="Ürünün Açıklaması Giriniz." type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productSubDescription">Ürünün Alt Açıklaması</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" 
                          id="productSubDescription" name="productSubDescription" value="<?php echo $products['productSubDescription'] ?>"placeholder="Ürünün Açıklaması Giriniz."  type="text">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" type="submit" class="btn btn-success"><?php echo ($_GET['id']>0?'Güncelle':'Ekle') ?></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php
include"Alt.php";
?>
        