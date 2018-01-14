
<?php 
session_start();
include 'data_access_helper.php';
$username = $_POST['email'];
$password = $_POST['pwd'];
$query = "SELECT password FROM users WHERE userName =" . "'".$username."'";
$db = new DataAccessHelper;
$db -> connect();
$value = $db -> executeQuery($query);
$row= mysqli_fetch_assoc($value);
$pass = $row['password'];
$db->close();
if ($password == $pass){
	$_SESSION['loginname'] = $_POST['email'];
	redirect('http://localhost:9999/shop/views/client/page/index.php');

}else{
	redirect('http://localhost:9999/shopgiamgia/login/failed.php');

};
function redirect($url){
	header("Location:".$url, true, 301);
	exit();
}

?>