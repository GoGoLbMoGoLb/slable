<?php 
if ($_FILES) {
  header("Location: $_SERVER[PHP_SELF]");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
var_dump($_FILES);
chdir('galery');
echo "<br>",getcwd();
if (@$f = $_FILES['file']) {
 foreach ($f['name'] as $k => $v){
  $tmp = tempnam('.', '');
  copy($f['tmp_name'][$k], $tmp . $f['name'][$k] );
  unlink($tmp);
 }
}
 ?>

<form style="" method ="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple>
    <input type="hidden" name="hidden"><br>
    <input type="checkbox" name="flowers" id="">flowers<br>
    <input type="checkbox" name="animals" id="">animmals<br>
    <input type="checkbox" name="nature" id="">nature<br>
    <button type="send">Send</button>
</form>

<?php 
$photos = scandir('.'); 
$photos = array_filter($photos, function($name){
 if ($name == '.' || $name == '..') return False;
  else return True;
});
var_dump($photos);echo "<br>";
foreach ($photos as $value):
?>
 <img src="./<?php echo $value; ?>" 
  width="150" height="150" alt="">
<?php 
endforeach;
$p=$_POST['name'];
switch ($p) {
 	case 'flowers':
 		# code...
 		break;
 	case 'animmals':
 		# code...
 		break;
 	case 'nature':
 		# code...
 		break;
 	
 	default:
 		# code...
 		break;
 } ?>
</body>
</html>