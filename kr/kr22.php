<?php 
function output(){
 	$num=func_num_args();
	$d=func_get_args();
	$v=0;
	for ($i=0; $i < $num; $i++) { 
		if((int)$d[$i])
			$v+=$d[$i];
		else 
			return "arg must be int";
	}
	return $v;
}
	
echo output(123,"11agrg")."<hr>";
