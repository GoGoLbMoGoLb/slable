<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="" method="POST" >
	<?php 
	for ($i=1; $i <= 100; $i++) { 

	echo "<input type='text' name='val' value='element $i'>";
	
	}echo "<br>";
	?>
	<input type="submit" value="click">
</form>
<?php 
var_dump($_GET['val']);
?>
</body>
</html>
