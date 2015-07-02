<?php 
require_once '_globals.php';
$is_adding = True;
if (!is_sysadmin($s['user'])) {
	header('Location: /');
	die();
}

if (empty($login) || empty($price) || empty($type)) {
	$content = 'AAAAAAAAAAAAAAA!!!!!!!!!!!!!!!!';
} else {
	$count = $count ? $count : 0;
	$query = "
		INSERT INTO items(name, price, type, count)
		values('{$login}',{$price},'{$type}','{$count}')
		";
	$content .= $query;
	mysqli_query($conn, $query);
}

include '_t.php';
 ?>