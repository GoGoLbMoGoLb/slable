<?php 
session_start();


function base_con(){
	return mysqli_connect('localhost', 'root', "",'slable');
 }

function is_sysadmin($name){
	global $connect,$s;
	$query=mysqli_query($connect, 
		"SELECT * FROM users where name='{$s['user']}'");
 	$user = mysqli_fetch_assoc($query);
 	return $user['sysadmin'];
}
$connect=base_con();
$p=$_POST;
$g=$_GET;
$s=&$_SESSION;

if ($s['user']) {
	$is_logged_in=TRUE;
	$current_user =$s['user'];
}else{
	$is_logged_in=FALSE;
}
?>
