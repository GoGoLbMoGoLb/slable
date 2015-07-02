<?php 
if (isset($_POST['login'])) {
	$login=$_POST['login'];
	if ($login=='') {
		unset($login);
	}
}
if (isset($_POST['password'])) {
	$password=$_POST['password'];
	if ($password=='') {
		unset($password);
	}
}
if (isset($_POST['code'])) {
	$code=$_POST['code'];

	}

if (empty($login) or empty($password)) {
	exit("вы не заполнили необходимые поля");
	}
$login=stripcslashes($login);
$login=htmlspecialchars($login);

$password=stripcslashes($password);//убирает слешы и другие знаки
$password=htmlspecialchars($password);//убирает html тэги

$login=trim($login);//убирает пробелы
$password=trim($password);

include "bd.php";
$save_user=mysql_query("INSERT INTO users (login, password) VALUES('$login', '$password')");
if ($save_user==TRUE) {
	echo "Вы зарегистрировались! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
}
$result = mysql_query("SELECT id FROM users");
var_dump($result);
$row = mysql_fetch_row($result);
if (!empty($row['id'])) {
	exit("Введеный Bами логин уже зарегистрирован. Введите другой логин");
}

else{

	echo "Вы не зарегистрированны.";
}
?>