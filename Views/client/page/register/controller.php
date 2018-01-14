
<?php
include 'data_access_helper.php';
$username = $_POST['email'];
$password = $_POST['pwd'];
$query = "SELECT * FROM users WHERE username =" . "'".$username."'";
$db = new DataAccessHelper;
$db -> connect();


if (!(empty($username) || empty($password))) {
$value = $db -> executeQuery($query);
if (mysqli_num_rows($value) == 0){
	$query_insert = "INSERT INTO users(username, password) VALUES("."'".$username."'".","."'".$password."'".")";
    $db->executeQuery($query_insert);
    redirect('http://localhost:9999/shop/views/client/page/index.php');
}else{
	echo 'Tên đăng nhập đã được sử dụng.Vui lòng Chọn tên khác';
}
}
else{
	echo 'Đăng kí Không Thành Công, Hãy Thử Lại';
}
function redirect($url){
	header("Location:".$url, true, 301);
	exit();
}
