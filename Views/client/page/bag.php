  <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BaLo Han Quoc</title>
<?php include_once 'header.php'; ?>
<div class="container">
        <div class="row" style="padding: 5px;background-color: #215f8a;width: 100%;margin-left: 0px;border-radius: 5px;margin-top: 10px">
          <h4 style="color: white">BaloNAM</h4>
        </div>

<!--Xử lý hiện tất cả giày nam trong database ra views-->

        <?php 
          include_once '../../../controllers/cSelectClient.php';
          $sql = "SELECT * FROM bag WHERE gender = 'Nam'";
          $temp = new cSelectClient();
          $listbagmale = $temp->SelectClient($sql);
         ?>
        <div class="row">
         <?php foreach($listbagmale as $listbag): ?>
           <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 col-mxs-12">            
            <div class="card h-100">
               <a href="#"><img class="card-img-top" src="../../../public/images/<?php echo $listbag['image']?>" alt="" style="height: 220px"></a>
              <div class="card-body" style="padding: 5px">
                <p style="text-decoration: line-through;"><i>Giá cũ: <?php echo number_format($listbag['price']) ?></i></p>
                <p style="color: red">Giá mới: <?php echo number_format($listbag['price'] * 0.9); ?></p>
                <p><b> <?php echo $listbag['name']; ?>  </b></p> 
                <a href="insertcart.php?id=<?php echo $listbag['id'] ?>&&idproducts=<?php echo $listbag['idproducts'] ?>"><img src="../../../public/images/cart1.jpg" alt="" style="width: 25%;margin-left: 25px;"></a>  
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

<!--Giày Nữ-->
      <div class="row" style="width: 100%;">
        <div class="row" style="padding: 5px;background-color: #215f8a;width: 100%;border-radius: 5px">
          <h4 style="color: white">Balo NỮ</h4>
        </div>

<!--Xử lý hiện tất cả giày nữ trong database ra views-->

        <?php 
          $sql = "SELECT * FROM bag WHERE gender = 'Nu'";
          $temp1 = new cSelectClient() ;
          $listbagfemale = $temp1->SelectClient($sql);
         ?>
        <div class="row" style="margin-left: 0px;margin-right: 0px">
         <?php foreach($listbagfemale as $listbagfe): ?>
           <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 col-mxs-12">            
            <div class="card h-100">
               <a href="#"><img class="card-img-top" src="../../../public/images/<?php echo $listbagfe['image']?>" alt="" style="height: 220px"></a>
              <div class="card-body" style="padding: 5px">
                <p style="text-decoration: line-through;"><i>Giá cũ: <?php echo number_format($listbagfe['price'])?></i></p>
                <p style="color: red">Giá mới: <?php echo number_format($listbagfe['price'] * 0.9); ?></p>
                <p><b> <?php echo $listbagfe['name']; ?> </b></p>  
                <a href="insertcart.php?id=<?php echo $listbagfe['id'] ?>&&idproducts=<?php echo $listbagfe['idproducts'] ?>"><img src="../../../public/images/cart1.jpg" alt="" width = "25%"; style="margin-left: 30px;"></a> 
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<?php include_once(__DIR__.'/footer1.php'); ?>