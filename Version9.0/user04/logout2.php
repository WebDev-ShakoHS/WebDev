<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: index2.php");
exit;
?>


<html lang="en">
<!--Version 3.0
        Name:Ritu Bollena
        Date Completed:1/31/20
    -->

<head>
	<link rel="icon" href="home%20favicon.jpeg" type="image/gif" sizes="16x16">
</head>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="SHS WebDev Menu Sample">

	<title>Web Dev User 04 </title>

	<!-- Bootstrap core JS -->
	<!-- These are needed to get the responsive menu to work -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="JS/SampleJS.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="CSS/SampleCSS.css">


	<!-- Custom styles for this template -->
	<style type="text/css">
		.menu {
			margin: 0px;
		}

		.wideMargin {
			margin: 15px;
		}

		#footer {
			font-size: 12px;
			text-align: center;
		}

	</style>
</head>

<body>
	<div class="menu">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav">
					<!---------------------------------- Edit These Items in your Menu ------------->
					<a href="index.html" class="nav-item nav-link ">Home</a>
					<a href="lululemon.html" class="nav-item nav-link">Lululemon</a>
					<a href="AE.html" class="nav-item nav-link" tabindex="-1">American Eagle</a>
					<a href="brandymelville.html" class="nav-item nav-link" tabindex="-1">Brandy Melville</a>
					<a href="urbanoutfitters.html" class="nav-item nav-link" tabindex="-1">Urban Outfitters</a>
					<a href="nike.html" class="nav-item nav-link" tabindex="-1">Nike</a>
					
					<!----------------------------------^ Edit These Items in your Menu ^ ------------->
				</div>
				<div class="navbar-nav ml-auto">
				<a href="login2.php" class="nav-item nav-link active">Login</a>
				<a href="register2.php" class="nav-item nav-link active">Register</a>
				<a href="logout2.php" class="nav-item nav-link active">Logout</a>
				</div>
			</div>
		</nav>
	</div>

	<div class="wideMargin" id="content">
		
		
	
	</div>
	
	
</body>

</html>