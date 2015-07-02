
<!DOCTYPE html>
html
<html>
<head>
 <meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php 

$a=1;
$b='hello';
$c=array(1,2,5=>'hello', 'cat', 'key'=>'door', 'animal'=>'cat');
const C='constanta';
echo "\$a=> $a";
echo "<br>";
echo "\$b=> $b";
echo "<br>";
foreach ($c as $k => $v) {
	echo "\$c[$k]=> $v";
	echo "<br>";
}
echo "C=> ".C;
echo "<br>";
echo "Переменная \$a равна ".$a;
echo "<br>";
echo "Переменная \$b равна ".$b;
echo "<br>";
foreach ($c as $k => $v) {
	echo "Элемент массива \$c[$k] равен ".$v;
	echo "<br>";
}
echo "Константа C равна ".C;
?>
</body>
</html>
