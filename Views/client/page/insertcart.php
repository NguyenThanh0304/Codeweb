<?php 
	session_start();
	$id = $_GET['id'];//1
	$idproducts1 = $_GET['idproducts'];//2
	
	$sqlshoes = "SELECT * FROM shoes";
	$sqlclothes = "SELECT * FROM clothes";
	$sqlothers = "SELECT * FROM others";
	$sqlbag = "SELECT * FROM bag";
	include '../../../controllers/cSelectAllAdmin.php';
	$temp = new cSelectAllAdmin();
	$listshoes = $temp->SelectAllAdmin($sqlshoes);
	$temp1 = new cSelectAllAdmin();
	$listclothes = $temp1->SelectAllAdmin($sqlclothes);
	$temp2 = new cSelectAllAdmin();
	$listothers = $temp2->SelectAllAdmin($sqlothers);
	$temp3 = new cSelectAllAdmin();
	$listbag = $temp3->SelectAllAdmin($sqlbag);

	if($idproducts1 == 1)
	{
		if(isset($_SESSION['cart'][$id]))
		{
			if($_SESSION['cart'][$id]['idproducts'] == $idproducts1)
			{
				$_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] + 1;
				header("location: shoes.php");
			}
			else
			{
					$_SESSION['cart'][$id * 10]['id'] = $listshoes[$id]['id'];
					$_SESSION['cart'][$id * 10]['idproducts'] = $listshoes[$id]['idproducts'];
					$_SESSION['cart'][$id * 10]['image'] = $listshoes[$id]['image'];
					$_SESSION['cart'][$id * 10]['name'] = $listshoes[$id]['name'];
					$_SESSION['cart'][$id * 10]['price'] = $listshoes[$id]['price'];
					$_SESSION['cart'][$id * 10]['date'] = $listshoes[$id]['date'];
					$_SESSION['cart'][$id * 10]['quantity'] = 1;
					header("location: shoes.php");
			}	
		}
		else
		{
			$_SESSION['cart'][$id]['id'] = $listshoes[$id]['id'];
			$_SESSION['cart'][$id]['idproducts'] = $listshoes[$id]['idproducts'];
			$_SESSION['cart'][$id]['image'] = $listshoes[$id]['image'];
			$_SESSION['cart'][$id]['name'] = $listshoes[$id]['name'];
			$_SESSION['cart'][$id]['price'] = $listshoes[$id]['price'];
			$_SESSION['cart'][$id]['date'] = $listshoes[$id]['date'];
			$_SESSION['cart'][$id]['quantity'] = 1;	
			header("location: shoes.php");
		}
	}
	if($idproducts1 == 2)
	{
		if(isset($_SESSION['cart'][$id]))
		{
			if($_SESSION['cart'][$id]['idproducts'] == $idproducts1)
			{
				$_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] + 1;
				header("location: clothes.php");
			}
			else
			{
				$_SESSION['cart'][$id * 10]['id'] = $listclothes[$id]['id'];
				$_SESSION['cart'][$id * 10]['idproducts'] = $listclothes[$id]['idproducts'];
				$_SESSION['cart'][$id * 10]['image'] = $listclothes[$id]['image'];
				$_SESSION['cart'][$id * 10]['name'] = $listclothes[$id]['name'];
				$_SESSION['cart'][$id * 10]['price'] = $listclothes[$id]['price'];
				$_SESSION['cart'][$id * 10]['size'] = $listclothes[$id]['size'];
				$_SESSION['cart'][$id * 10]['date'] = $listclothes[$id]['date'];
				$_SESSION['cart'][$id * 10]['quantity'] = 1;
				header("location: clothes.php");
			}	
		}
		else
		{
				$_SESSION['cart'][$id]['id'] = $listclothes[$id]['id'];
				$_SESSION['cart'][$id]['idproducts'] = $listclothes[$id]['idproducts'];
				$_SESSION['cart'][$id]['image'] = $listclothes[$id]['image'];
				$_SESSION['cart'][$id]['name'] = $listclothes[$id]['name'];
				$_SESSION['cart'][$id]['price'] = $listclothes[$id]['price'];
				$_SESSION['cart'][$id * 10]['size'] = $listclothes[$id]['size'];
				$_SESSION['cart'][$id]['date'] = $listclothes[$id]['date'];
				$_SESSION['cart'][$id]['quantity'] = 1;	
				header("location: clothes.php");			
		}
	}if($idproducts1 == 3)
	{
		if(isset($_SESSION['cart'][$id]))
		{
			if($_SESSION['cart'][$id]['idproducts'] == $idproducts1)
			{
				$_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] + 1;
				header("location: others.php");
			}
			else
			{
				$_SESSION['cart'][$id * 10]['id'] = $listothers[$id]['id'];
				$_SESSION['cart'][$id * 10]['idproducts'] = $listothers[$id]['idproducts'];
				$_SESSION['cart'][$id * 10]['image'] = $listothers[$id]['image'];
				$_SESSION['cart'][$id * 10]['name'] = $listothers[$id]['name'];
				$_SESSION['cart'][$id * 10]['price'] = $listothers[$id]['price'];
				$_SESSION['cart'][$id * 10]['date'] = $listothers[$id]['date'];
				$_SESSION['cart'][$id * 10]['quantity'] = 1;
				header("location: others.php");
			}	
		}
		else
		{
			$_SESSION['cart'][$id]['id'] = $listothers[$id]['id'];
			$_SESSION['cart'][$id]['idproducts'] = $listothers[$id]['idproducts'];
			$_SESSION['cart'][$id]['image'] = $listothers[$id]['image'];
			$_SESSION['cart'][$id]['name'] = $listothers[$id]['name'];
			$_SESSION['cart'][$id]['price'] = $listothers[$id]['price'];
			$_SESSION['cart'][$id]['date'] = $listothers[$id]['date'];
			$_SESSION['cart'][$id]['quantity'] = 1;	
			header("location: others.php");
		}
	}
	if($idproducts1 == 7)
	{
		if(isset($_SESSION['cart'][$id]))
		{
			if($_SESSION['cart'][$id]['idproducts'] == $idproducts1)
			{
				$_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] + 1;
				header("location: bag.php");
			}
			else
			{
				$_SESSION['cart'][$id * 10]['id'] = $listbag[$id]['id'];
				$_SESSION['cart'][$id * 10]['idproducts'] = $listbag[$id]['idproducts'];
				$_SESSION['cart'][$id * 10]['image'] = $listbag[$id]['image'];
				$_SESSION['cart'][$id * 10]['name'] = $listbag[$id]['name'];
				$_SESSION['cart'][$id * 10]['price'] = $listbag[$id]['price'];
				$_SESSION['cart'][$id * 10]['date'] = $listbag[$id]['date'];
				$_SESSION['cart'][$id * 10]['quantity'] = 1;
				header("location: bag.php");
			}	
		}
		else
		{
			$_SESSION['cart'][$id]['id'] = $listbag[$id]['id'];
			$_SESSION['cart'][$id]['idproducts'] = $listbag[$id]['idproducts'];
			$_SESSION['cart'][$id]['image'] = $listbag[$id]['image'];
			$_SESSION['cart'][$id]['name'] = $listbag[$id]['name'];
			$_SESSION['cart'][$id]['price'] = $listbag[$id]['price'];
			$_SESSION['cart'][$id]['date'] = $listbag[$id]['date'];
			$_SESSION['cart'][$id]['quantity'] = 1;	
			header("location: bag.php");
		}
	}
	
?>