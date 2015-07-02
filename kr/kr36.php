<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action="">

	<?php 
	echo "<input type='text' name='aa' id=''>";echo "<br>";
	echo "<input type='submit' value='Cklick'>";
	
	if (isset($_GET['aa'])) {
		$g=$_GET['aa'];
		if ($g == "") {
			echo "<div style='width:200px; height:200px; background-color:black;'></div>";	
	}
	if ($g!="") {
		$c=$g;
		echo "<div style='width:200px; height:200px; background-color:$c;'></div>";	
	}
	}
	
	?>
	
</form>
</body>
</html>