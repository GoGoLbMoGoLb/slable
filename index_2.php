<?php 
$arr=array('fda', 'asdasafewf','hrththete', 'lld','ewer22','werw2');
function th($ch){
	if (strlen($ch)==3) {
		return TRUE;
	}		
	print_r(array_filter($arr,"th"));
