<?php 

$db=mysql_connect("localhost", "user", "");
$res=mysql_query("CREATE TABLE users ( id smallint, login varchar(15), password varchar(15);");

mysql_select_db("users");
 ?>