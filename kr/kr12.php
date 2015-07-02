<?php 
//12--------------------------------
for ($i=1; $i <= 100 ; $i++) { 
	echo $i;
	echo "<br>";
}
for ($i=1; $i <= 100 ; $i++) { 
	echo "<p align='center'>".$i."</p>";
}
for ($i=1; $i <= 100 ; $i++) { 
	echo "<p align='center'>".$i."</p>";
}
$a=range(1, 100);
$c = count($a);
	for ($i=1; $i <= 100; $i=$i+3) { 
			$d = $i;
			echo "{$a[$d]} {$a[$d+1]} {$a[$d+2]}  <br>";
	}
echo "--------------------------------------------";echo "<br>";
 