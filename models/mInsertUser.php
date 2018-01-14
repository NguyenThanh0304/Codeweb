<?php 
	include_once 'database.php'; 
	class mInsertUser extends database
	{
		public function insertUserDB($name,$phone,$iduser)
		{
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$dt = new DateTime();
			$dt1 = $dt->format('Y-m-d H:i:s');
			include_once '../../../controllers/cInsertUser.php';
			parent::connect();
			$conn = parent::getcon();
			$sql = "INSERT INTO orders(name,phone,date,iduser) VALUES('".$name."',".$phone.",'".$dt1."',".$iduser.")";
			if (mysqli_query($conn, $sql)) {
		    	echo "Xác nhận đơn hàng thành công";
			} else 
			{
			    echo "Xác nhận đơn hàng Thất bại. " . $sql . "<br>" . mysqli_error($conn);
			}				
		}
	}
?>
