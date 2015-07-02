<?php 
session_start();
function base_conn(){
	return mysqli_connect('localhost', 'root', '','slable');
};
function is_sysadmin($name){
	global $connect,$s;
	$query=mysqli_query($connect, 
		"SELECT * FROM users where login='{$s['login']}'");
 	$user = mysqli_fetch_assoc($query);
 	$name=$user['sysadmin'];
}
$connect = base_conn();
$s=$_SESSION;
if (isset($_GET)) 
	$g=$_GET;

if (isset($_POST['login'])) 
	$login=$_POST['login'];

if (isset($_POST['password']))
	$password=$_POST['password'];

if (isset($_POST['email']))
	$email=$_POST['email'];

if (isset($_POST['name']))
	$name=$_POST['name'];

if (isset($_POST['type']))
	$type=$_POST['type'];

if (isset($_POST['price']))
	$price=$_POST['price'];

if (isset($_POST['count']))
	$count=$_POST['count'];
//echo $login;

if ($s) {
	$is_logged_in = True;
	$current_user = $s;
} else {
	$is_logged_in = False;
}
?>
