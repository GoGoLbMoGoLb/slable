<?php 

function output(){
$num=count($a);
$res="";
for ($i=0; $i < $num; $i++) {
	$res=$a[$i];
	echo $res;
	}
}
echo output($a)."<hr>";


 ?>