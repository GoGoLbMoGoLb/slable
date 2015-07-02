<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*if ($header) {
			echo $haeder;
		} */?>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
	<title>
		<?php $title=isset($title) ? $title : 'Undefind page';
		echo $title; ?>
	</title>
</head>
<body>
	<div class="content">
		<div class="head">
			<?php 
			if (!$is_logged_in):?>
			 	
			<a href="login.php">Login</a>
			<a href="registering.php">Registration</a>
			<?php else: ?>
				<h1><?php echo $s['user'];?></h1>
				<a href="/logout.php">Logout</a>
				<?php if (is_sysadmin($s['user'])):?>
					<a href="/add_item.php">Add item</a>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="main">
			<?php 
			echo $content;
			if ($is_registering) {
					include '_reg_form.php';
				} 
				elseif ($is_adding) {
					include '_item_form.php';
				}
			?>
		</div>
		<div class="foot">FOOTER</div>
	</div>
</body>
</html>