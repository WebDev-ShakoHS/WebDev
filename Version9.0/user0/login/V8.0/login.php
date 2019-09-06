<?php include('server.php') 
// Using server MySQL id & password
?>
<!DOCTYPE html>
<html>
	
<head>
	<title>WELCOME TO 3x2</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/page1/logo.png" />
</head>

<body>
	<div class="header"><h2>WELCOME TO 3x2</h2></div>
	
	<form method="post" action="login.php">
		
		<?php include('errors.php'); ?>
		
		<div class="input-group">
			<center><label style="color:white;">Username: use admin</label></center>
			<input type="text" name="username" >
		</div>
		
		<div class="input-group">
			<center><label style="color:white;">Password: use pass</label></center>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
			<center><button type="submit" class="btn" name="login_user">Login</button></center>
		</div>
		
		<p><center style="color:white;">Not A Member? <a href="register.php">Sign up</a></center></p>
		
	</form>
</body>

</html>