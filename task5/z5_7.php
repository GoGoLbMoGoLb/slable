<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="" method="GET">
	<input type="hidden" name="box[1]" value="0"><input type="checkbox" name="box[1]" value="qwe" id="">
	<input type="hidden" name="box[2]" value="0"><input type="checkbox" name="box[2]" value="asd"  id="">
	<input type="hidden" name="box[3]" value="0"><input type="checkbox" name="box[3]" value="fgh"  id="">
	<input type="hidden" name="box[4]" value="0"><input type="checkbox" name="box[4]" value="zxv"  id="">
	<input type="hidden" name="box[5]" value="0"><input type="checkbox" name="box[5]" value="rty"  id="">
	<input type="hidden" name="box[6]" value="0"><input type="checkbox" name="box[6]" value="erf"  id="">
	<input type="hidden" name="box[7]" value="0"><input type="checkbox" name="box[7]" value="yhg"  id="">
	<input type="hidden" name="box[8]" value="0"><input type="checkbox" name="box[8]" value="frt"  id="">
	<input type="hidden" name="box[9]" value="0"><input type="checkbox" name="box[9]" value="wsd"  id="">
	<input type="hidden" name="box[10]" value="0"><input type="checkbox" name="box[10]" value="hyu"  id="">


	<input type="submit" value="clik">
</form>
<?php 
if (isset($_GET['box'])) {
		$b=$_GET['box'];	
		print_r($b);
	}


 ?>
</body>
</html>