<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">

	<title>Document</title>
</head>
<body>
	<div class="content">
		<div class="head">
			<?php if (!isset($just_login)): ?>
				<a href="login.php">Login</a>
				<a href="register.php">Regisrtration</a>
			<?php else: ?>
			<h1 class="name"><?php echo $s['user']; ?></h1>
			<a href="logout.php">Logout</a>
			<?php if (is_sysadmin($s['user'])): ?>
				<a href="add_item.php">Add item</a>
			<?php endif; ?>
		<?php endif; ?>
		</div>
		<div class="mid">
			<?php 
			echo $content;
			if (isset($is_register)) {
				include '_reg_form.php';
			}
			elseif (isset($is_adding)) {
				include '_add_item.php';
			}
			 ?>
		</div>
		<div class="foot">dasd
			
		</div>
	</div>
</body>
</html>