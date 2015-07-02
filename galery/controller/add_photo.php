<?php
$content_template_name="add_photo.php";
if (array_key_exists('image', $_FILES)){
    $file_image = $_FILES['image'];
    $file_error = $file_image['error'];

    if(!$file_error){
        save_image($_FILES['image']);
    }
}

  include 'view/_base.php';?>