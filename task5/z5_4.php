<?php 
$ar =$ab= array(1,2,5=>'hello', 'cat', 'key'=>'door', 'animal'=>'cat');
$count=count($ar);
for ($i=0; $i <$count; $i+=2) { 
	$ar[$i]='even';
}print_r($ar);
echo "<br>";
$i=0;
while ($i <= $count) {
	$ar[$i]='even';
	$i+=2;
}print_r($ar);
echo "<br>";
foreach ($ar as $key => $value) {
	if ($key) {
		
	}
	echo $value='even';
}
echo "<br>";
reset($ab);
echo current($ab);echo "<br>";
echo next($ab);echo "<br>";
echo next($ab);echo "<br>";
echo next($ab);echo "<br>";
echo next($ab);echo "<br>";
echo next($ab);echo "<br>";
echo next($ab);
?>