
<?php 
include 'model/model.php';

// $path=explode('/', $_SERVER['REQUEST_URI']);
// $path=array_filter($path);
preg_match_all('#\/(\w*)#', $_SERVER['REQUEST_URI'],$path);

// var_dump($path[1]);
switch ($path[1][1]) {
	case '':
	case 'home':
		include 'controller/home.php';
		break;
	case 'all_photos':
		include 'controller/all_photos.php';
		break;
	case 'add_photo':
		include 'controller/add_photo.php';
		break;
	case 'add_category':
		include 'controller/add_category.php';	
		break;	
	
	    default:
		include 'controller/not_found.php';	
		break;
}

