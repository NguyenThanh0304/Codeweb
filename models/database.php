<?php 
	class database
	{
		protected $con;
		protected $row = array();
		public function bhihi()
		{
			echo "ahihi do cho";
		}		
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
		public function selectDB1($con,$sql)
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
				echo "Số dòng < 0";
		}
		public function insertDB($con,$sql)
		{
			if ($con->query($sql) === TRUE)
			{
			    echo "Thêm thành công.";
			}
			else
			{
			    echo "Thêm không thành công.";
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