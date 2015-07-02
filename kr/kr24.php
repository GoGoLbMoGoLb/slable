<?php 
$a=array("asdad","sdad","qwr","12312",123,4343);
function output($f){
 	$count=count($f);
 	//$b=func_get_args();
 	//$num=func_num_args();
 	for ($i=0; $i <$count ; $i++) { 
 		echo $f[$i]."<br>";

 	}
}
	
echo output($a)."<hr>";
