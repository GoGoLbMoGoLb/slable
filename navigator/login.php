<?php 
require_once '_globals.php';
$is_registering = TRUE;
$just_login=TRUE;
if (!empty($p['name']) && !empty($p['pass'])) {
	$users=mysqli_query($connect,
		"SELECT name, password FROM users WHERE name='{$p['name']}'
		");
	$user=mysqli_fetch_row($users);
	var_dump($_SESSION);
	if ($user && $user[1] == md5($p['pass'])) {
		$s['user']=$user[0];
		header('Location:/');
	}else $content.='sdadasd!!';

}
include '_html.php';

 ?>