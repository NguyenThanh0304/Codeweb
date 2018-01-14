<?php
echo "Dang Nhap thanh Cong" ;
redirect('http://localhost:9999/shop/views/client/page/index.php');
function redirect($url){
	header("Location:".$url, true, 301);
	exit();
}
?>
