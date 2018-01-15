  <!DOCTYPE html>
<html lang="en">

  <head>
  

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quần Áo</title>
<?php include_once 'header.php'; ?>
<?php include_once 'zoom.php'; ?>

 
        <div class="row" style="padding: 5px;background-color: black">
          <h4 style="color: white">QUẦN ÁO NAM</h4>
        </div>

<!--Xử lý hiện tất cả áo nam trong database ra views-->

        <?php 
          include_once '../../../controllers/cSelectClient.php';
          $sql = 'SELECT * FROM clothes WHERE gender="NAM"';
          $temp = new cSelectClient();
          $listclothes = $temp->SelectClient($sql);
         ?>
        <div class="row">
         <?php foreach($listclothes as $clothes): ?>
           <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 col-mxs-12">            
            <div class="card h-100">
               <a href="#"><img class="card-img-top" src="../../../public/images/<?php echo $clothes['image']?>" alt="" style="height: 220px"></a>
              <div class="card-body">
                <p style="text-decoration: line-through;"><i>Giá cũ: <?php echo number_format($clothes['price']) ?></i></p>
                <p style="color: red">Giá mới: <?php echo number_format($clothes['price'] * 0.9); ?></p>
                <p><b> <?php echo $clothes['name']; ?>  </b></p> 
                <p><?php echo $clothes['size']; ?></p>
                <a href="insertcart.php?id=<?php echo $clothes['id'] ?>&&idproducts=<?php echo $clothes['idproducts'] ?>"><img src="../../../public/images/cart1.jpg" alt="" style="width: 30%;margin-left: 25px;"></a>  
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

<!--Áo Nữ-->
      <div class="row" style="width: 100%">
        <div class="row" style="padding: 5px;background-color: black">
          <h4 style="color: white">QUẦN ÁO NỮ</h4>
        </div>

<!--Xử lý hiện tất cả áo nữ trong database ra views-->

      <?php 
          include_once '../../../controllers/cSelectClient.php';
          $sql = 'SELECT * FROM clothes WHERE gender="NỮ"';
          $temp = new cSelectClient();
          $listclothes = $temp->SelectClient($sql);
         ?>
        <div class="row">
         <?php foreach($listclothes as $clothes): ?>
           <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 col-mxs-12">            
            <div class="card h-100">
               <a href="#"><img class="card-img-top" src="../../../public/images/<?php echo $clothes['image']?>" alt="" style="height: 220px"></a>
              <div class="card-body">
                <p style="text-decoration: line-through;"><i>Giá cũ: <?php echo number_format($clothes['price']) ?></i></p>
                <p style="color: red">Giá mới: <?php echo number_format($clothes['price'] * 0.9); ?></p>
                <p><b> <?php echo $clothes['name']; ?>  </b></p> 
                <p><?php echo $clothes['size']; ?></p>
                <a href="insertcart.php?id=<?php echo $clothes['id'] ?>&&idproducts=<?php echo $clothes['idproducts'] ?>"><img src="../../../public/images/cart1.jpg" alt="" style="width: 30%;margin-left: 25px;"></a>  
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        <?php endforeach; ?>


<?php include_once(__DIR__.'/footer1.php'); ?>