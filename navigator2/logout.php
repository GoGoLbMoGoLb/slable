<?php 
require_once '_globals.php';
session_destroy();

header('Location: index.php');
include '_t.php';
 ?>