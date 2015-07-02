<?php 
$db=array(
	'host'=>'localhost',
	'user'=>'root',
	'pass'=>'',
	'db'  =>'gallery'
	);


$conn=mysqli_connect($db['host'], $db['user'], $db['pass']);
initialize_db($conn,$db);
initialize_tables($conn);

function initialize_db($conn,$db){
	mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS {$db['db']}");
	mysqli_select_db($conn, $db['db']);
}
function initialize_tables($conn){
    mysqli_query($conn,
        "CREATE TABLE IF NOT EXISTS images(
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(50),
            path VARCHAR(200),
            description TEXT,
            category_id INT
        )");
    mysqli_query($conn,
        "CREATE TABLE IF NOT EXISTS categories(
            id INT AUTO_INCREMENT PRIMARY KEY,
            category VARCHAR(50)
        )");
    mysqli_query($conn,
        "CREATE TABLE IF NOT EXISTS hashtags(
            id INT AUTO_INCREMENT PRIMARY KEY,
            tag VARCHAR(50)
        )");
    mysqli_query($conn,
        "CREATE TABLE IF NOT EXISTS i_t(
            image_id INT,
            tag_id INT
        )");
}
function save_image($image){
    $tmp=tempnam('public','');
    copy($image['tmp_name'], $tmp);
    echo $tmp;

}
