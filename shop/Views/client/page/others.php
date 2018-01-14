  <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Other</title>
<?php include_once 'header.php'; ?>
        <div class="row" style="padding: 5px;background-color: #215f8a;">
          <h4 style="color: white;padding-left: 20px">PHỤ KIỆN
            <a class="" style="padding-left: 700px;font-size: 15px"> CHUỘT</a>
            <a class="" style="padding-left: 20px;font-size: 15px"> LOA</a>
            <a class=""  style="padding-left: 20px;font-size: 15px"> BÀN PHÍM</a>
            <a class="" style="padding-left: 20px;font-size: 15px"> TAI NGHE</a>
             <a class="" style="padding-left: 20px;font-size: 15px"> USB</a>
          </h4>
        </div>
        <?php 
          include_once '../../../controllers/cSelectAllAdmin.php';
          $sql = "SELECT * FROM others";
          $temp = new cSelectAllAdmin();
          $list = $temp->SelectAllAdmin($sql);
         ?>
        <div class="row">
         <?php foreach($list as $listothers): ?>
           <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 col-mxs-12" style="padding-top: 20px;padding-bottom: 10px">            
            <div class="card h-100">
               <a href="#"><img class="card-img-top" src="../../../public/images/<?php echo $listothers['image'] ?>" alt="" style="height: 230px"></a>
              <div class="card-body">
                <p style="text-decoration: line-through;"><i>Giá cũ: <?php echo number_format($listothers['price']) ?></i></p>
                <p style="color: red">Giá mới: <?php echo number_format($listothers['price'] * 0.9); ?></p>
                <p><b> <?php echo $listothers['name']; ?>  </b></p> 
                <a href="insertcart.php?id=<?php echo $listothers['id'] ?>&&idproducts=<?php echo $listothers['idproducts'] ?>"><img src="../../../public/images/cart1.jpg" alt="" width="36%" style="margin-left: 30px"></a>  
              </div>
              <div class="card-footer">
                <small class="text-muted"><a style="color: yellow;font-size: 20px">&#9733; &#9733; &#9733; &#9733; &#9734;</a>(10 đánh giá)</small>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

<?php include_once(dirname(__FILE__).'/footer1.php'); ?>