<?php 
	/**
	* 
	*/
	include_once '../../../models/database.php';
	class mUpdateDBAdmin extends database
	{
		
		function __construct()
		{
			# code...
		}
		public function UpdateDBAdmin($sql)
		{
			parent::connect();
			$con = parent::getcon();
			parent::updateDB($con, $sql);
		}
	}
 ?>