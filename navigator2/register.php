<?php 
require_once '_globals.php';
$is_register = TRUE;
	if (empty($login) || empty($password)) {
		$content="eNTER password and login";
	}
	else{
		
		$login=stripcslashes(htmlspecialchars(trim($login)));
		$password=stripcslashes(htmlspecialchars(trim($password)));

		$hash_pass=md5($password);
		$query=
			"'INSERT INTO users (login, password, email) 
			values ('{$login}','{$password}','{$hash_pass}')";
		$user=mysqli_query($connect,$query);
	    if ($_GET['Click']) {
    		header('Location: _reg_form.php');
  		} 
	}
	/*if ($user) {
		$content="You are registering";
	}
	$conjuction=mysqli_query($connect,"SELECT login FROM users");
	$row=mysqli_fetch_row($conjuction);
	if (!empty($row['login'])) {
		$content="This login cyshetvuet!";

	}
	else{
		$content="Try one more time";
	}*/
	include '_temp.php';
 ?>