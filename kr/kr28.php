<?php 


function output(){
$num=func_num_args();
$arr=func_get_args();
$res="";
for ($i=0; $i < $num; $i++) {
	$res=$arr[$i];
	echo $res;
	}
}
echo output("qqq","eeeee","d1232")."<hr>";

 ?>