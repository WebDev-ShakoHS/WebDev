<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	if(!isset($_SESSION['username']))
	{
    	// not logged in
    	header('Location: login.php');
    	exit();
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
	
<head>
	<title>WELCOME TO 3x2</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="header"><h2>You Are Signed Up</h2></div>
	
	<div class="content">
		
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php  if (isset($_SESSION['username'])) : ?>
			<center><p style="margin:10px; color:white;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></center>
			<center><p> <a href="index.php?logout='1'" style="color: black;"><button class="btn" >Logout</button></a> </p></center>
			<center><a href="page1.html"><button class="btn" style="margin:30px;">Continue To Site</button></a></center>
		<?php endif ?>
	</div>
</body>

</html>