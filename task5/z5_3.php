<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
	<title></title>
</head>
<body>
<form action="" method="GET">
<input type="text" name="qwe" id="">
<input type="submit" value="click" name="submit" id="">
<br>
<input type="text" name="asd" id="">
<input type="submit" value="click" name="submit1" id="">
<br>
<input type="text" name="zxc" id="">
<input type="submit" value="click" name="submit2" id="">
</form>
<?php 
if (isset($_GET['qwe'])) {
	if ($_GET['qwe']) {
		echo $_GET['qwe']."<br>";
	}
	if ($_GET['qwe']==='' ) {
		echo "default1"."<br>";
	}
}
if (isset($_GET['asd'])) {
	switch ($_GET['asd']) {
	case $_GET['asd']:
		echo $_GET['asd']."<br";
		break;
	case NULL:
		echo $_GET['asd']="default2"."<br>";
		break;
	}
}
if(($_GET['zxc']===$_GET['zxc'])or(($_GET['zxc']='default3')){
echo $_GET['zxc'];}
 ?>
</body>
</html>