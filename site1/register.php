<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
</head>
<body>
	<h2>Регистрация</h2>
	<form action="save.php" method="POST">
		<div>
		<p>
			<label for="login">Ваш Логин:<br></label>
			<input type="text" name="login" size="15" maxlength="15">
		</p>
		<p>
			<label for="password">Ваш Пароль:<br></label>
			<input type="password" name="password" size="15" maxlength="15">
			<select name="code" id="">
				<option value="md5">md5</option>
				<option value="rot13">rot13</option>
				<option value="crypt">crypt</option>
			</select>	
		</p>
		<br>
		<p><input type="checkbox" name="save" id="">Запомнить пароль?</p>

		<p class="login-submit">
			<input type="submit" value="Зарегистрироваться">
		</p>
	</div>
	</form>
</body>
</html>