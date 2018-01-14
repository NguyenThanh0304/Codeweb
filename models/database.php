<?php 
	class database
	{
		protected $con;
		protected $row = array();		
		public function __construct()
		{

		}
		public function connect()
		{
			$this->con = new mysqli('localhost', 'root', '', 'shop');
			mysqli_set_charset($this->con,'utf8');
			if ($this->con->connect_error) 
			{
		    	die("Connection that bai: " . $this->con->connect_error);
			}	
		}
		public function selectDB($con,$sql)
		{
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$this->row[] = $row;
				}
				return $this->row;
			}
			else
				echo "Số dòng <0";
		}
		public function selectDB1($con,$sql)// $row[id] = id của sản phẩm.
		{
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result))
				{
					$this->row[$row['id']] = $row;
				}
				return $this->row;
			}
			else
				echo "<p style='margin-left: 130px;font-size: 40px'>Num rows < 0</p>";
		}
		public function insertDB($con,$sql)
		{
			if ($con->query($sql) === TRUE)
			{
			    echo "<p style='margin-left: 130px;font-size: 40px'>Add susscess</p>";
			}
			else
			{
			    echo "<p style='margin-left: 130px;font-size: 40px'>Add fail:</p>";
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		public function updateDB($con, $sql)
		{
			if ($con->query($sql) === TRUE) 
			{
			    echo "<p style='margin-left: 130px;font-size: 40px'>Update susscess</p>";
			} else 
			{
			    echo "<p style='margin-left: 130px;font-size: 40px'>Update fail: </p> " . $conn->error;
			}
		}
		public function deleteDB($con, $sql)
		{
			if ($con->query($sql) === TRUE)
			{
			    echo "<span style='margin-left: 130px;font-size: 40px'>Delete susscess </span>";
			}
			else
			{
			    echo "<p style='margin-left: 130px;font-size: 40px'>Delete fail:</p>";
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}	
		}
		public function getcon()
		{
			return $this->con;
		}
		public function getrow()
		{
			return $this->row;
		}
	}

 ?>