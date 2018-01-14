<?php 
	class cUpdateDBAdmin
	{
		function __construct()
		{
			# code...
		}
		public function UpdateDBAdmin($sql)
		{
			include_once '../../../models/mUpdateDBAdmin.php';
			$temp = new mUpdateDBAdmin();
			$temp->UpdateDBAdmin($sql);	
		}	
	}
 ?>