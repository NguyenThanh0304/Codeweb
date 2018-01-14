<?php 
	/**
	* 
	*/
	class cSelectAllAdmin
	{
		
		function __construct()
		{
			# code...
		}
		public function SelectAllAdmin($sql)
		{
			include_once '../../../models/mSelectAllAdmin.php';
			$temp = new mSelectAllAdmin();
			$list = $temp->SelectAllAdmin($sql);
			return $list;
		}
	}
 ?>