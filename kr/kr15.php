
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="" method="POST" >
	<?php 
	$gt=$_POST['val'][$i];
	for ($i=1; $i <= 100; $i++) { 
		if (isset($gt){
			if($gt !== "element $i") {
			$rt=strtoupper(trim($gt));
		echo "<input type='text' name='val[]' value='$rt'>";
		}
		else{echo "<input type='text' name='val[]' value='element $i'>";}
	}

	echo "<input type='submit' value='click'>";
	
		
		$count=count($_POST['val']);
		$c=0;
		for ($i=0; $i < $count; $i++) { 
			if (!empty($gt)) {
				$c++;
			}
		}
		echo "<p>Your fikes $c </p>";
		print_r($gt);

	
?>
	
</form>
</body>
</html>

