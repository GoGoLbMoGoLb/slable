<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Document</title>
</head>
<body>
<pre>
 <form action="">
  <?php 
  $t = array();
   $c = 'abcde';
   for($i=0;$i<strlen($c);$i++){
    if (array_key_exists($c[$i], $_GET)) {
     $t[] = $c[$i];
    } else{
     echo "{$c[$i]}<input type='checkbox' name='{$c[$i]}' value='1'><br>";
    }
   }
   ?>
  <input type="submit" value="">
 </form>
 <hr>
 <form action="">
 <?php 
   foreach ($t as $value) {
    echo "{$value}<input type='checkbox' name='{$value}' value='1'><br>";
   }
  ?>
 <input type="submit" value=""></form>
<?php 
 
 var_export($_GET);

?>
</pre>
</body>
</html>