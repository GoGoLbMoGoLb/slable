<?php 
echo "№18"."<br>";
$a=$b=$c=$d=array(1,2,6,99,55,8,78,59,4,3) ;
sort($a);
print_r($a);
echo "<br>";
rsort($b);
print_r($b);
echo "<br>";
shuffle($c);
print_r($c);
echo "<br>";
print_r(array_rand($d,3));
echo "<hr>"."№19"."<br>";
//19--------------------------------------
$w=range(20, 29);
$v=array_merge($a,$w);

print_r($v);
echo "<hr>"."№20"."<br>";
//20-------------------------
$words=array('hdfljd', 'dasf','kndal', 'dma','jafjfl','jaha','djkf0j','knal','NJHJ','hkfoo',
'hd2fljd', 'da3sf','knda4l', 'dm5a','jaf6jfl','jah7a','fdjkf0j','kynal','NJfgHJ','hnnfoo');
$result=array_combine($words, $v);
print_r($result);echo "<br>";
echo "words= ".count($words);echo "<br>";
echo "narray= ".count($v);echo "<br>";

?>