<?php 
	/**
	* 
	*/
	class cSelectClient
	{
		
		function __construct()
		{
			# code...
		}
		public function SelectClient($sql)
		{
			include_once '../../../models/mSelectClient.php';
			$temp = new mSelectClient();
			$list = $temp->SelectClient($sql);
			return $list;
		}
	}
 ?>