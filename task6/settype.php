<?php 
$a="4";
echo gettype($a);
echo "<br>";
function st($val, $type)
{
	if ($type=="integer") {
		$val=intval($val);
		echo gettype($val);
	}
	if ($type=="boolean") {
		$val=boolval($val);
		echo gettype($val);
	}
	if ($type=="float") {
		$val=floatval($val);
		echo gettype($val);
	}
	if ($type=="string") {
		$val=strval($val);
		echo gettype($val);
	}
}	
st($a,$c="integer");

 ?>