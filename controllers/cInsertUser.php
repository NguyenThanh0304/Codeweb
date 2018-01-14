<?php 
	class cInsertUser
	{
		public function InsertUser($name,$phone,$iduser)
		{
			include_once '../../../models/mInsertUser.php';
			$insert = new mInsertUser();
			$insert->insertUserDB($name,$phone,$iduser);
		}
	}
 ?>
