<?php 
function data(){
	$d=getdate();
	/*foreach ($d as $k => $v) {
		echo $k." ".$v;
		echo "<br>";
	}*/
	echo $d['weekday']." ".$d['year']." time ".$d['hours'].":".$d['minutes'].":".$d['seconds'];

}
echo data();