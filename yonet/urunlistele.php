<?php
include"Ust.php";
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
        <div class="x_panel"></div>

        <div class="x_title">
          <h2>Ürün Listesi<small></small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <p class="text-muted font-13 m-b-30">
           Web sayfanızda yer alan ürünlerin listesi aşağıdadır.
         </p>
         <?php
         if(isset($_GET['Durum']))
         {
          if($_GET['Durum'])
          {
           ?>
           <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>Silme İşlemi Başarılı</strong>
          </div>
          <?php   
        }
        else
        {
         ?>
         <div class="alert alert-danger alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <strong>Silme İşlemi Başarısız</strong>
        </div>
        <?php   
      }
    }

    ?>


    <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th></th>
          <th>Kategori</th>
          <th>Ürün Adı</th>
          <th>Fiyatı</th>
          <th>Vitrin</th>
          <th>Ürün Teklif Oluşturma Tarihi</th>
          <th>Ürün Teklif Son Kabul Tarihi</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $Urunler=$db->query("SELECT * FROM products ORDER BY id");
        while($products=$Urunler->fetch())
        {
         ?>
         <tr>
          <td><a href="urundetay2.php?id=<?php echo $products['id'] ?>"><i class="fa fa-edit"></i>
          </a></td>
          <td><?php  echo $products['categoryId'] ?></td>
          <td><?php  echo $products['productName'] ?></td>
          <td><?php  echo $products['productsPrice'] ?></td>
          <td><input type="checkbox" name=""<?php  echo ($products['productsTop']?'checked="checked"':'')?>></td>
          <td><?php  echo $products['offerCreateTime'] ?></td>
          <td><?php  echo $products['offerFinishedTime'] ?></td>
          <td><a href="urunsil.php?id=<?php echo $products['id'] ?>"><i class="fa fa-trash"></i></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>
<!-- /page content -->
<?php
include"Alt.php";
?>