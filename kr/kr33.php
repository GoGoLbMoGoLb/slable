<?php 
	$a=time()-(60*60*24*7*30*13+5);
	//echo date('Y-m-d',$a);
	$b=strtotime("-1 year 1 month 5 days");
	echo date('Y-m-d',$b);
 ?>