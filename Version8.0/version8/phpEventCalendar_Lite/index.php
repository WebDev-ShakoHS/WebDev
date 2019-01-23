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
  <a href="/version8/webDevUser4.html">Home</a>
  <a href="/version8/survey.html">Survey</a>
  <a href="/version8/images.php">Images</a>
  <a href="/version8/poll.html">Poll</a>
  <a href="/version8/rewind.html">Meme of The Year</a>
  <a href="/version8/donate.html">Donate</a>
  <a class="active" href="/version8/phpEventCalendar_Lite/index.php">Calender</a>
</div>
	</body>
</html>
<?php
    require_once('conf.php');
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Event Calendar (Preview Demo)</title>
    <!--display_script_include_once_head($bootstrap=false, $fullCalendar=false,$datetimePicker=false,$colorPicker=false,$jqueryUI=false)-->
    <?php C_Core::display_script_include_once_head(true);?>
</head>
<body>
<?php
    require_once(dirname(__FILE__) .'/server/html/login.html.php');
?>
    <!--display_script_include_once_foot($bootstrap=false, $fullCalendar=false,$datetimePicker=false,$colorPicker=false,$jqueryUI=false)-->
    <?php C_Core::display_script_include_once_foot(true);?>
    <?php
        //=====Load Custom JS
        C_Core::display_custom_js('user');
    ?>
   
</body>
</html>