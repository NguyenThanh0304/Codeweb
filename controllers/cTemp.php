<?php 
	/**
	* 
	*/
	include '../../../models/mtemp.php';
	class cTemp extends mTemp
	{
		
		function __construct()
		{
			# code...
		}
		public function SelectNameTableProducts()
		{
			$list = parent::SelectTableProducts();
			return $list;
		}
	}

 ?>