<?php 	
$connect=mysqli_connect("localhost", "root", "", "slable" );
$qw=mysqli_query($connect,"SELECT id, count(name), sum(age) as sage FROM `users` left join ages on users.id=ages.user_id group by name having sage >149");

echo var_dump($qw);
 ?>