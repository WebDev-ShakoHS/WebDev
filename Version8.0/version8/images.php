<!DOCTYPE HTML>
<html>
	<head>
		<style>
	/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
    <style>
	article {
		width: 600px;
		margin: auto;
	}
	blockquote.co {
		float: right;
		background: #e3e3e3;
		font-size: 2em;
		width: 35%;
		text-align: center;
	}
	</style>
    <style>
        body {
            background: blue;
            color:white;
        }
    </style>
		
	</head>
	<body>
		<div class="topnav">
  <a href="webDevUser4.html">Home</a>
  <a href="survey.html">Survey</a>
  <a class="active" href="images.php">Images</a>
  <a href="poll.html">Poll</a>
  <a href="rewind.html">Meme of The Year</a>
  <a href="donate.html">Donate</a>
  <a href="/version8/phpEventCalendar_Lite/index.php">Calender</a>
</div>
	</body>
</html>
<?php

    // Include the UberGallery class
    include('resources/UberGallery.php');

    // Initialize the UberGallery object
    $gallery = new UberGallery();

    // Initialize the gallery array
    $galleryArray = $gallery->readImageDirectory('gallery-images');

    // Define theme path
    if (!defined('THEMEPATH')) {
        define('THEMEPATH', $gallery->getThemePath());
    }

    // Set path to theme index
    $themeIndex = $gallery->getThemePath(true) . '/index.php';

    // Initialize the theme
    if (file_exists($themeIndex)) {
        include($themeIndex);
    } else {
        die('ERROR: Failed to initialize theme');
    }


?>
<!DOCTYPE HTML>
<html>
	<head>
		
	</head>
	<body>
		<a href="webDevUser4.html">Return Home</a>
	</body>
</html>