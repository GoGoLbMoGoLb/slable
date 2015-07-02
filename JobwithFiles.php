<?php 
$b=scandir('.',1);

function readall($dir){
while ($v=readdir($dir)) {
	echo $v;
	if (is_dir($v)) {
		echo "=>Dir";
		echo "<br>";
		if ($v !== '.' && $v !== '..'){
		echo "<br>";
		readall(opendir($v));
	  }
	}
	if (is_file($v)) {
		echo "=>File";
		echo "<br>";
	}
  }
}
$a= opendir('.');
readall($a);
echo "<br>";
echo "-------------------";echo "<br>";
sort($b);
foreach ($b as  $v) {
	echo $v;
	if (is_dir($v)) {
		echo "=> dir";
	}
	if (is_file($v)) {
		echo "=> file";
	}
	echo "<br>";
}
echo "-------------------";echo "<br>";
$h=fopen("kr14.php", "r");
var_dump($h);