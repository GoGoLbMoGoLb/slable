<?php 
require_once "_globals.php";
$is_register = TRUE;
$just_login=TRUE;
if (!empty($login) && !empty($password)){ 
	$users=mysqli_query($connect,
	"SELECT login, password FROM users Where login='{$login}'");
	$user=mysqli_fetch_row($users);

var_dump($users);
if ($user && $user[1] == md5($password)) {
		$s['user']=$user[0];
		header('Location:/');
	}else $content.='Access denied';
}	
	include '_temp.php';

 ?>