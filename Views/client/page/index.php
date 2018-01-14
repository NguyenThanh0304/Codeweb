  <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang chủ</title>
<?php include_once(dirname(__FILE__).'/header.php'); ?>
<div class="container">
<!--ÔNG NÀO LÀM QUẦN ÁO THÌ ĐỂ VÀI TẤM HÌNH Ở ĐÂY-->

<!--XỬ LÝ HIỆN 6 MẪU QUẦN ÁO TRONG DATABASE RA THEO THỜI GIAN GẦN NHẤT -->
        <div class="row" style="padding: 5px;background-color: #337b59;width: 100%;margin-left: 0px;border-radius: 5px;margin-top: 10px;padding-top: 17px">
          <div>
            <p style="font-size: 22px"><b style="color: white">SẢN PHẨM MỚI NHẤT</b></p>
          </div>
        </div>

        <div class="row" style="min-height: 100px">       
          <?php 
           include_once '../../../controllers/cSelectAllAdmin.php';
           $sql = "SELECT * FROM shoes ORDER BY id LIMIT 6";
          $temp1 = new cSelectAllAdmin();
          $listshoes1 = $temp1->SelectAllAdmin($sql);
        ?>
        <div class="row" style="">
        <?php foreach ($listshoes1 as $valu): ?>
          <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 col-mxs-12" >
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../../../public/images/<?php echo $valu['image'] ?>" alt="" style="height: 200px"></a>
              <div class="card-body">
                <p style="text-decoration: line-through;"><i>Giá cũ: <?php echo number_format($valu['price']) ?></i></p>
                <p style="color: red">Giá mới: <?php echo number_format($valu['price'] * 0.9) ?></p>
                <p><b><?php echo $valu['name'] ?></b></p>   
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
       <!--row 4.4-->
        <div class="row" style="padding: 5px">
          <div>
            <p style="font-size: 22px"><b>Xem nhiều hơn các mẫu quần áo đẹp khác »<a href="clothes.php"> tại đây </a>« </b></p>
          </div>
        </div>
       <!--row 4.5-->


<!--XỬ LÝ HIỆN 6 MẪU QUẦN ÁO TRONG DATABASE RA THEO THỜI GIAN GẦN NHẤT -->

       <?php 
          $sqlshoes = "SELECT * FROM shoes ORDER BY id DESC LIMIT 6";
          $temp2 = new cSelectAllAdmin();
          $listshoes = $temp2->SelectAllAdmin($sqlshoes);
        ?>
        <div class="row" style="">
        <?php foreach ($listshoes as $valu): ?>
          <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 col-mxs-12" >
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../../../public/images/<?php echo $valu['image'] ?>" alt="" style="height: 200px"></a>
              <div class="card-body">
                <p style="text-decoration: line-through;"><i>Giá cũ: <?php echo number_format($valu['price']) ?></i></p>
                <p style="color: red">Giá mới: <?php echo number_format($valu['price'] * 0.9) ?></p>
                <p><b><?php echo $valu['name'] ?></b></p>   
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="row" style="padding: 5px">
          <div>
            <p style="font-size: 22px"><b>Xem nhiều hơn các mẫu giày đẹp khác »<a href="http://localhost:1901/shop/views/client/page/shoes.php"> tại đây </a>« </b></p>
          </div>
        </div>
       <!--row 4.7-->


<!--ÔNG NÀO LÀM LINH KIỆN THÌ ĐỂ VÀI TẤM HÌNH Ở ĐÂY-->
       
          
        <div class="row" style="min-height: 100px">       
          <?php 
          $sql = "SELECT * FROM others ORDER BY date DESC LIMIT 6";
          $temp = new cSelectAllAdmin();
          $list = $temp->SelectAllAdmin($sql);
        ?>
        <div class="row" style="">
        <?php foreach ($list as $valu): ?>
          <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 col-mxs-12" >
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../../../public/images/<?php echo $valu['image'] ?>" alt="" style="height: 200px"></a>
              <div class="card-body">
                <p style="text-decoration: line-through;"><i>Giá cũ: <?php echo number_format($valu['price']) ?></i></p>
                <p style="color: red">Giá mới: <?php echo number_format($valu['price'] * 0.9) ?></p>
                <p><b><?php echo $valu['name'] ?></b></p>   
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
       <!--row 4.4-->
        <div class="row" style="padding: 5px">
          <div>
            <p style="font-size: 22px"><b>Xem tất cả phụ kiện »<a href="others.php"> tại đây </a>« </b></p>
          </div>
        </div>
       <!--row 4.9-->

<!--ÔNG NÀO LÀM BA LÔ THÌ ĐỂ VÀI TẤM HÌNH Ở ĐÂY-->
        <div class="row" style="">
        <?php foreach ($listshoes1 as $valu): ?>
          <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 col-mxs-12" >
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../../../public/images/<?php echo $valu['image'] ?>" alt="" style="height: 200px"></a>
              <div class="card-body">
                <p style="text-decoration: line-through;"><i>Giá cũ: <?php echo $valu['price'] ?></i></p>
                <p style="color: red">Giá mới: <?php echo $valu['price'] * 0.9 ?></p>
                <p><b><?php echo $valu['name'] ?></b></p>   
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
       <!--row 4.10-->
        <div class="row" style="padding: 10px">
          <div>
            <p style="font-size: 22px"><b>Xem nhiều hơn các mẫu ba lô đẹp khác »<a href="balo.html"> tại đây </a>« </b></p>
          </div>
        </div>    
      </div>
    </div>
  </div>
<?php include_once(dirname(__FILE__).'/footer1.php'); ?>
