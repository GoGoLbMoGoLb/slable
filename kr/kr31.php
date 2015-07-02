<?php 
function up($a){
	return strtoupper($a);
}
function low($a){
	return strtolower($a);
}
function out($func,$str){
	if ($func=="up") {
		return up($str);
	}
	if ($func=="low") {
		return low($str);
	}
}
$a="jgkLLldmps";
$up= up($a);
echo $up;
echo "<br>";
$low=low($a);
echo $low;
echo "<br>";
echo out("up",$a);echo "<br>";
echo out("low",$a);