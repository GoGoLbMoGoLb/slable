<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Slabel Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>
<body>

    <header class="navbar navbar-inverse">
        <div class="navbar-brand">
            Slabel PHP
        </div>
        <nav>
            <ul class="nav navbar-nav navbar-collapse collapsed">
                <li><a href="/galery/add_photo">Add photo</a></li>
                <li><a href="/galery/all_photos">Gallery</a></li>
            </ul>
        </nav>
    </header>
    
	<?php if (isset($content_template_name)) {
		include $content_template_name;
	} ?>
    
    <footer class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="navbar-brand">
            About us
        </div>
         <nav>
            <ul class="nav navbar-nav navbar-collapse collapsed">
                <li><a href="#">Contact</a></li>
                <li><a href="#">Additional information</a></li>
            </ul>
        </nav>
    </footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>