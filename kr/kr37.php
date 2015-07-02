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
		$get=$_GET['aa'];
		if ($get == "") {

			echo "<div style='width:200px; height:200px; background-color:black;'></div>";	
	}
	if ($get != "") {
		$get=htmlspecialchars(stripcslashes(strip_tags(trim($get))));
		//$get=htmlspecialchars($get);
		//$get=trim($get);
		$color=$get;
		echo "<div style='width:200px; height:200px; background-color:$color;'></div>";	
	}
	}
	
	?>
	
</form>
</body>
</html>