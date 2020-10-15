<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

</html>
<?php
session_start();
include "Model/DBConfig.php";
$db = new Database;
$db->connect();

if (isset($_GET['controller'])) {
	$controller = $_GET['controller'];
} else {
	$controller = '';
}

switch ($controller) {
	case 'thanh-vien': {
			require_once('Controller/thanhvien/index.php');
		}
	default:
		return;
}
?>