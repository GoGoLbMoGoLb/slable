 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	

 <form action="" enctype="multipart/form-data" method="post">
  <input type="file"  name="file" id="" >
  <input type="submit" value="sdf">
 </form> 
 </body>
 </html>
<?php 

var_export($_FILES);
chdir('Tools');
copy($_FILES['file']['tmp_name'], $_FILES['file']['name']);
//-------------------------------
 /*<form action="" enctype="multipart/form-data" method="post">
  <input type="file"  name="file" id="" >
  <input type="submit" value="sdf">
 </form><?php 

var_export($_FILES);
copy($_FILES['file']['tmp_name'], tempnam('.', 'fffg').'_'.$_FILES['file']['name']);
*/
?>
