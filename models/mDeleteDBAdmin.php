<?php 
	include_once '../../../models/database.php';
	/**
	* 
	*/
	class mDeleteDBAdmin extends database
	{
		
		function __construct()
		{
			# code...
		}
		public function DeleteDBAdmin($sql)
		{
			parent::connect();
			$conn = parent::getcon();
			parent::DeleteDB($conn,$sql);
		}
	}
 ?>