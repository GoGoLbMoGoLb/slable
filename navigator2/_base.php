<?php 
require_once "_globals.php";
function init_table($conn){
  $res=mysqli_query($conn,'CREATE TABLE users (
  id int AUTO_INCRIMENT PRIMARY KEY, 
  login varchar(15) NOT NULL, 
  password varchar(15) NOT NULL,
  email varchar(50) UNIQUE,
  sysadmin BOOL default FALSE)');

  $rf=mysqli_query($conn,
  'CREATE TABLE items (
  id int AUTO_INCRIMENT PRIMARY KEY, 
  name varchar(50) NOT NULL, 
  type varchar(15) NOT NULL,
  price INT(50) NOT NULL,
  count INT default 0)' );
  header('Location: '.$_SERVER['PHP_SELF']);
}
if (!$connect) {
	if (isset($g['crt_base'])) {
		$base_con=mysql_connect("localhost", "root", "");
		$base=mysqli_query($base_con,"CREATE DATABASE slabel ");
		init_table($connect);
		
	}
}






