<?php 
require_once "_globals.php";
$is_registering = TRUE;

if (empty($p['name']) || empty($p['pass'])) {
	$content = "enter login and password";
} else {
	$hash_pass=md5($p['pass']);
	$query="
		INSERT INTO users(name, password, email) 
		values('{$p['name']}', '{$hash_pass}', '{$p['email']}') ";
	mysqli_query($connect, $query);
}
include '_html.php';
 ?>