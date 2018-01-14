<?php 
	/**
	* 
	*/
	include_once 'database.php';
	class mTemp extends database
	{
		private $row1 = array();
		
		function __construct()
		{
			# code...
		}
		public function Temp()
		{
			parent::connect();
			$conn = parent::getcon();
			$sql = "SELECT * FROM giay";
			$list = parent::selectDB($conn, $sql);
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$dt = new DateTime();
			$dt1 = $dt->format('Y-m-d H:i:s');
			foreach ($list as $value) {
				$date = $dt1;
				$conn->query("INSERT INTO shoes(idproducts,image,name,gender,price,date) VALUES(".$value['idproducts'].",'".$value['image']."','".$value['name']."','".$value['gender']."',".$value['price'].",'".$date."')");
 
			}
		}
		public function SelectTableProducts()
		{
			parent::connect();
			$conn = parent::getcon();
			$result = $conn->query("SELECT * FROM products");
			if(mysqli_num_rows($result) > 0)
			{
				while($row = $result->fetch_assoc())
					$this->row1[] = $row;
			}
			return $this->row1;
		}
	}
 ?>