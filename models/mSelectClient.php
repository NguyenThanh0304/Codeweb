<?php 
	/**
	* 
	*/
	include_once '../../../models/database.php';
	class mSelectClient extends database
	{
		
		function __construct()
		{
			# code...
		}
		public function SelectClient($sql)
		{
			parent::connect();
			$conn = parent::getcon();
			$list = parent::selectDB($conn,$sql);
			return $list;
		}
	}
 ?>