<?php 
	/**
	* 
	*/
	include_once '../../../models/database.php';
	class mInsertAdmin extends database
	{
		
		function __construct()
		{
			# code...
		}
		public function InsertAdmin($sql)
		{
			parent::connect();
			$conn = parent::getcon();
			parent::insertDB($conn, $sql);
		}
	}
 ?>