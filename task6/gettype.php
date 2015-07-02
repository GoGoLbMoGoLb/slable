<?php 

	$a=6;
	echo gettype($a);
	echo "<br>";
	function gt($val)
	{
		switch ($val) {
			case is_array($val):
				echo "array";
				break;
			case is_string($val):
				echo "string";
					break;
			case is_bool($val):
				echo "boolean";
					break;
			case is_callable($val):
				if ($val==TRUE) {
					echo "TRUE";
					}else { echo "FALSE";}
					break;
			case is_integer($val):
				echo "integer";
					break;
			case is_double($val):
				echo "double";
					break;
			case is_null($val):
				echo "Null";
					break;
			
		}
		//echo is_array($val) ? 'array' : NULL;

	}
	gt($a);
 ?>