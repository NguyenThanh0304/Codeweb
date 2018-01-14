<?php 
	/**
	* 
	*/
	include_once '../../../models/database.php';
	class mSelectAllAdmin extends database
	{
		
		function __construct()
		{
			# code...
		}
		public function SelectAllAdmin($sql)
		{
			parent::connect();
			$conn = parent::getcon();
			$list = parent::selectDB1($conn, $sql);
			return $list;
		}
	}
 ?>