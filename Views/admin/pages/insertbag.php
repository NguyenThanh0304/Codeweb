<?php 
	include 'header.php';
	include 'leftcontent.php';
 ?>

<div id="page-wrapper">
	<div style="width: 80%;border:2px solid black;margin: 0 auto;border-radius: 4px">
		<?php 
						include_once '../../../controllers/cTemp.php';
						date_default_timezone_set('Asia/Ho_Chi_Minh');
						$dt = new DateTime();
						$date = $dt->format('Y-m-d H:i:s');
						$temp = new cTemp();
						$list = $temp->SelectNameTableProducts();
					 ?>
		<form style="width: 90%;margin: 0 auto" method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<legend>Thêm sản phẩm</legend>
			</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">Chọn danh mục sản phẩm</label>
				<select  id="cbdanhmuc" name="cbdanhmuc" style="width: 20%" class="form-control" required="required">
				<?php foreach ($list as $value): ?>
					<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
				<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">Chọn hình ảnh</label>
			    <input type="file" class="form-control-file" id="image" name="image">
			</div>
		  	<div class="form-group">
		    	<label for="formGroupExampleInput">Nhập tên sản phẩm</label>
		    	<input type="text" class="form-control" id="txtname" name="txtname">
			</div>
			<div>
				<label for="formGroupExampleInput">Chọn giới tính:   </label>
				<label class="radio-inline">
			    	<input type="radio" name="rdogender"  value="Nam">Nam
			    </label>
			    <label class="radio-inline">
			      	<input type="radio" name="rdogender" value="Nu">Nữ
			    </label>	
			</div>
			<div class="form-group">
		    	<label for="formGroupExampleInput2">Nhập giá</label>
		    	<input type="text" class="form-control" id="txtprice" name="txtprice">
			</div>
			<div class="form-group">
		    	<label for="formGroupExampleInput2">Thời gian</label>
		    	<input type="text" class="form-control" id="txtdate" name="txtdate" value="<?php echo $date?>" readonly>
			</div>
			<button type="submit" class="btn btn-primary" name="submit" id="submit" style="width: 100px;margin-bottom: 20px">Xác nhận</button>
		</form>
	</div>

	<?php 
	if(isset($_POST['submit']) && $_FILES['image']['name'] != null && $_POST['cbdanhmuc'] != null && $_POST['txtname'] != null && $_POST['txtprice'] != null && $_POST['rdogender'] != null)
	{
		if($_FILES['image']['type'] =="image/jpge" || $_FILES['image']['type'] =="image/png" || $_FILES['image']['type'] =="image/jpg" || $_FILES['image']['type'] =="image/jpeg")
		{
			if($_FILES['image']['size'] < 3145728)
			{
				move_uploaded_file($_FILES['image']['tmp_name'],__DIR__.("/../../../public/images/").$_FILES['image']['name']);
				include_once '../../../controllers/cInsertAdmin.php';
                $sql = "INSERT INTO bag(idproducts,image,name,gender,price,date) VALUES(".$_POST['cbdanhmuc'].",'".$_FILES['image']['name']."','".$_POST['txtname']."','".$_POST['rdogender']."','".$_POST['txtprice']."','".$_POST['txtdate']."')";
                $temp1 = new cInsertAdmin();
                $temp1->InsertAdmin($sql);
                
			}
			else
			{
				echo "<h1 style='margin-left: 100px'>Kích cỡ ảnh quá lớn.</h1>"."<br>"."<br>";
			}
		}
		else
		{
			echo "<h1 style='margin-left: 100px'>file không hợp lệ.</h1>"."<br>"."<br>";
		}
	}
	else
		echo "<h1 style='margin-left: 100px'>Vui lòng chọn file</h1>"."<br>"."<br>";
 ?>
</div>

 <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../vendor/flot/excanvas.min.js"></script>
    <script src="../vendor/flot/jquery.flot.js"></script>
    <script src="../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../vendor/flot/jquery.flot.time.js"></script>
    <script src="../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

