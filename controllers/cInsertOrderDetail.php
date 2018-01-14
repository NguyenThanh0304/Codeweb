<?php 
	class cInsertOrderDetail
	{
		public function InsertOrderDetail($iduser)
		{
			include_once '../../../models/mInsertOrderDetail.php';
			$insert = new  mInsertDetailOrder();
			$insert->insertDetailOrder($iduser);
		}
	}
 ?>