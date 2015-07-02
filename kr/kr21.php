<?php 
function output1($a){
	echo $a;
 }
 echo output1(3)."<hr>";
 function output2($a,$b){
	echo $a;
	echo "<br>";
	echo $b;
 }
 echo output2(3,9)."<hr>";

 function output3($a="default",$b="default"){
	echo $a;
	echo "<br>";
	echo $b;
 }
echo output3(56)."<hr>";
 function output4($a="",$b=""){
	if (isset($a)) {
		echo $a;
	}echo "<br>";
	if (isset($b)) {
		echo $b;
	}
	echo $b;
 }
echo output4(56)."<hr>";
 function output5(){
 	$num=func_num_args();
	$d=func_get_args();
	if ($num > 0) {
		for ($i=0; $i <$num ; $i++) 
			echo "arg $i: ".$d[$i]."<br>";	
 	}
 	else{echo "EMPTY";}
}
echo output5(123,141,5155,15,1)."<hr>";

