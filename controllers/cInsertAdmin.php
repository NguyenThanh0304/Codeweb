<?php 
	/**
	* 
	*/
	class cInsertAdmin
	{
		
		function __construct()
		{
			# code...
		}
		public function InsertAdmin($sql)
		{
			include_once '../../../models/mInsertAdmin.php';
			$temp = new mInsertAdmin();
			$temp->InsertAdmin($sql);
		}
	}

 ?>