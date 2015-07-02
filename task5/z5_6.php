<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="" method="GET">
<input type="hidden" 	name="a" value="default">
<input type="checkbox" 	name="a" value="Checkbox1">

<input type="hidden"	name="b" value="default">
<input type="checkbox" 	name="b" value="Checkbox2">
<input type="submit" 	value="click"></form>
<?php 

echo $_GET['a'];
echo "<br>";
echo $_GET['b'];

 ?>
</body>
</html>