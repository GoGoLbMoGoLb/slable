<?php 
	$var=1;
	echo empty($var);
	echo "<br>";
	function em($a)
	{
		if ($a==FALSE) {
			return TRUE;
		}
		else{return FALSE;}
	}
	echo em($var);
 ?>