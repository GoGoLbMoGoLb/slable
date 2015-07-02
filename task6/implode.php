<?php 
	
$a = array("df34", "dfsfe", "wr34rwg"," w erwer");

//var_dump(implode(" ", $a));
echo "<br>";
function del($r,$str){
	$res="";

for ($i=0; $i <count($str); $i++) { 
  if ($str[$i] == TRUE) {     
       $res = $res.$str[$i]; 
     }
	}  
	echo $res;
	echo "<br>";
	
}

(del($x=" ",$a));


