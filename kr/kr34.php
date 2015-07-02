<?php 
$c=array(123,414,51);
function push($a,$b){
	if (is_array($a)) {
		//$count=count($a);
		$a[]=$b;
	}return $a;
}
print_r (push($c,"5dfs55"));
