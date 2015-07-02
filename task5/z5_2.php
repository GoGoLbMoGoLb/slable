<?php 
$a=$af=$aw="hello";
$a[0]="w";
$a[1]="i";
$a[2]="t";
$a[3]="c";
$a[4]="h";
echo "$a"."<br>";
$count=strlen($af);
$b=array("w","i","t","c","h");
for ($i=0; $i < $count; $i++)  
 	 $af[$i]=$b[$i];
  	echo $af."<br>";
$i=0;
while ($i < strlen($aw)) {
	$aw[$i]=$b[$i];
	$i++;
}echo $aw;
 ?>