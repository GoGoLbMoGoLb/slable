<?php 
//1-------------------------------
$a=1;
$b=2;
$$a=$b;
echo $a;			echo "<br>";
echo $b;			echo "<br>";

$a=$b;
echo $a;			echo "<br>";
echo $b;			echo "<br>";



echo "--------------------------------------------";echo "<br>";
//2---------------------------------
$d="slkdmaksmd";
$n="asdasdasd";
echo $d.$n;			echo "<br>";
echo $d.=$n;		echo "<br>";
echo "--------------------------------------------";echo "<br>";
//3--------------------------------
$arr=array();
$arr[0]=458;
$arr[]="0";
$arr[]="1,2,3,4,5";
$arr[]=range(10,15);
$arr["adsd"]=123;
$arr[10]=(1235);
print_r($arr);		echo "<br>";
echo "--------------------------------------------";echo "<br>";
//4---------------------------------

echo $arr[0];		echo "<br>";
echo $arr["adsd"];	echo "<br>";
echo end($arr);		echo "<br>";
echo "--------------------------------------------";echo "<br>";
//5--------------------------------
$cd=array_shift($arr);
print_r($arr);		echo "<br>";
$dc=array_pop($arr);
print_r($arr);		echo "<br>";
$cdc=array_splice($arr, 2,1);
print_r($arr);		echo "<br>";
echo "--------------------------------------------";echo "<br>";
//6--------------------------------
$rt="ajkujkk";
$arr[0]=$rt;
var_export($arr);		echo "<br>";
echo "--------------------------------------------";echo "<br>";
//7--------------------------------
$arr1=array(1,2,3,5,6,3,4,6);
$i=0;
reset($arr1);
while (current($arr1)) {
	echo current($arr1);
	next($arr1);

}echo "<br>";
echo "--------------------------------------------";echo "<br>";
//8---------------------------------
$arr2=array();
$kl=array();
for ($i=0; $i < 25; $i++) {
 	$arr2[]=$i+10;
 	 } 
var_export($arr2);		echo "<br>";
echo "--------------------------------------------";echo "<br>";
//9-----------------------------
foreach ($arr2 as $v) {
	echo " ".$v;
}					echo "<br>";
echo "--------------------------------------------";echo "<br>";
//10------------------------------
foreach ($arr2 as  &$v) {
	$v=$v * 10;
	echo $v."слоников ";
}								echo "<br>";
var_export($arr2)	;			echo "<br>";
echo "--------------------------------------------";echo "<br>";
//11------------------------------
switch ($arr2) {
	case '3 собаки':
		echo "da";
		break;
	default:
		echo "net";
		break;
}							echo "<br>";
if (count($arr2)>10) {
	echo "много";
}
elseif (count($arr2)<5) {
	echo "не мало";
}echo "<br>";
/*switch ($arr2) {
	case '340 слоников':
		end($arr2);
		$lk=current($arr2);
		$lk="!!!!!!!!!!";
		break;
	default:
		$lk="##########";
		break;
}var_export($arr2);*/
foreach ($arr2 as $v) {
	if($v=="340 слоников")
	{
		$v="!!!!!!!!!!";
	}
	else{$v="##########";}
}var_export($arr2);			echo "<br>";
echo "--------------------------------------------";echo "<br>";
