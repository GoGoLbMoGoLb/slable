<?php 
require_once "_globals.php";
$g=$_GET;
function init_table($con){
	mysqli_query($con,"CREATE TABLE users(
		id INT AUTO_INCRIMENT PRIMARY KEY,
		name VARCHAR(20) UNIQUE NOT NULL,
		password VARCHAR(100) NOT NULL,
		email VARCHAR(50) UNIQUE,
		sysadmin BOOL default False)");

	mysqli_query($con,"CREATE TABLE items(
		id INT AUTO_INCRIMENT PRIMARY KEY,
		name VARCHAR(50) UNIQUE NOT NULL,
		type VARCHAR(50) NOT NULL,
		price INT NOT NULL,
		count INT default 0
		)");
	header('Location: '.$_SERVER['PHP_SELF']);
}
 
if (!$connect) {
	if (isset($g['crt_base'])) {
			$base_con=mysqli_connect('localhost','root','');
			mysqli_query($base_con, "CREATE DATABASE slable");
			$connect=base_con();
			init_table($connect);
	}
	$query=mysqli_query($connect,"SELEECT * FROM users limit 0 ");
	if (!$query && isset($g['initialize'])) {
			$content .= '<a href="/?crt_base=true">crt_base</a>';
			init_table($connect);
	}
}

?>