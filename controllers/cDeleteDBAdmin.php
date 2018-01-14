<?php 
	/**
	* 
	*/
	class cDeleteDBAdmin
	{
		
		function __construct()
		{
			# code...
		}
		public function DeleteDBAdmin($sql)
		{
			include_once '../../../models/mDeleteDBAdmin.php';
			$temp = new mDeleteDBAdmin();
			$temp->DeleteDBAdmin($sql);
		}
	}

 ?>