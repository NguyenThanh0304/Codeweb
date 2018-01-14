<?php 
	session_start();
	include_once 'database.php';
	class mInsertDetailOrder extends database
	{
		public function insertDetailOrder($iduser)
		{
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$dt = new DateTime();
			$dt1 = $dt->format('Y-m-d H:i:s');
			include_once '../../../controllers/cInsertUser.php';
			parent::connect();
			$conn = parent::getcon();
			foreach($_SESSION['cart'] as $order)
			{
				$conn->query("INSERT INTO orderdetail VALUES(".$order['id'].",".$order['idproducts'].",'".$order['image']."','".$order['name']."',".$order['quantity'].",".$order['price'].",'".$dt1."',".$iduser.")");
			}
		}
	}
 ?>