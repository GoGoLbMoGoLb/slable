<?php 
$a=array(132,45,798,456);
function output(&$a){

$num=count($a);
for ($i=0; $i < $num; $i++) {
	if (is_int($a[$i])) {
		$a[$i]=$a[$i]+10;
	}
	elseif (is_string($a[$i])) {
		return "false";
	}
  }return "true";
}
echo output($a)."<hr>";
print_r($a);
