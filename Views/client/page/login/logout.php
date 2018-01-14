<?php session_start();
unset($_SESSION['loginname']);
redirect('http://localhost:9999/shop/views/client/page/index.php');
function redirect($url){
	header("Location:".$url, true, 301);
	exit();}
?>