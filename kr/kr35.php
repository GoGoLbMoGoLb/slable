<?php 
$a=range(1, 10);
$count=count($a);
sort($a);
for ($i=1; $i < $count; $i++) { 
	if ($a[$i]%2==0) {
		unset($a[$i]);
	}
}
print_r($a);
echo "<br>";
function ch($var){
	if($var%2==0){
		return $var;
	}
}
print_r(array_filter($a));
 ?>