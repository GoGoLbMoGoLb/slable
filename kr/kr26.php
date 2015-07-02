<?php 
$a=array(132,45,798,456);
function output($d){
$num=count($d);
	for ($i=0; $i < $num; $i++) { 
		echo $d[$i]+10;
		echo "<br>";
	}
}
echo output($a)."<hr>";
print_r($a);

 ?>,