<form action="" method="POST">
	<input type="text" name="name" id="" required placeholder="login">
	<input type="password" name="pass" id="" required placeholder="password">
	<?php 
	if (!isset($just_login)) :?>
			<input type="email" name="email" id="" placeholder="email">
	<?php endif; ?>
	
	<input type="submit" value="Click">
</form>