<link href="/./shop/public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/./shop/public/css/shop-css.css" rel="stylesheet">
<form style="border: 2px solid black;width: 60%;margin: 0 auto; border-radius: 5px" action="" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput" style="padding: 5px;margin-left: 20px;font-size: 20px"><b>Nhập họ tên: </b></label>
    <input type="text" class="form-control" id="" name="name" placeholder="Vui lòng nhập họ tên vào đây:" style="width: 80%;margin-left: 20px">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" style="padding: 5px;margin-left: 20px;font-size: 20px"><b>Nhập Số điện thoại: </b></label>
    <input type="text" class="form-control" id="" name="phone" placeholder="Vui lòng nhập số điện thoại vào đây:" style="width: 80%;margin-left: 20px">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" style="padding: 5px;margin-left: 20px">IdUser</label>
    <input type="text" class="form-control" id="" name="iduser" style="width: 80%;margin-left: 20px" value="<?php echo rand(1,100000)?>">
  </div>
  <button type="submit" class="btn btn-success" name="submit" style="margin: 0 auto;margin-left: 20px;margin-bottom: 20px;font-size: 30px">Xác Nhận</button>
</form>

<?php 
  include '../../../controllers/cInsertUser.php';
  if(isset($_POST['submit']) && $_POST['name'] != null)
  {
    $insertuser = new cInsertUser();
    $insertuser->InsertUser($_POST['name'],$_POST['phone'],$_POST['iduser']);
    include '../../../controllers/cInsertOrderDetail.php';
    $inserorderdetail = new cInsertOrderDetail();
    $inserorderdetail->InsertOrderDetail($_POST['iduser']);
  }
 ?>