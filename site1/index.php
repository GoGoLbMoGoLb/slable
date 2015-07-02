<?php 
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Главная страница</title>
 </head>
 <body>
 	<form action="testreg.php">
 		<div>
		<p>
			<label for="login">Ваш Логин:<br></label>
			<input type="text" name="login" size="15" maxlength="15">
		</p>
		<p>
			<label for="password">Ваш Пароль:<br></label>
			<input type="password" name="password" size="15" maxlength="15">
		</p>
		<p class="login-submit">
			<input type="submit" value="Войти">
		</p>
		<a href="register.php">Зарегистрироваться</a>
	</div>

 	</form>
 </body>
 </html>