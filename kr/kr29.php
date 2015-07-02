<?php 
$a=array("sdas","asqqq","rrrr");

function output($a){
$num=count($a);
$res="";
for ($i=0; $i < $num; $i++) {
	$res=$a[$i];
	echo $res;
	}
}
echo output($a)."<hr>";

 ?>