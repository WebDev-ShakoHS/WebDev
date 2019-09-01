<?php include('server.php') 
// Code from GitHub User: peredurabefrog
// A basic encryption for passwords in a MySQL Databse 
?>

<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO 3x2</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	        <link rel="shortcut icon" type="image/x-icon" href="images/page1/logo.png" />
</head>

<body>
	<div class="header"><h2>Register</h2></div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		
		<div class="input-group">
			<center><button type="submit" class="btn" name="reg_user">Register</button></center>
		</div>
		
		<p><center>Already a member? <a href="login.php">Sign in</a></center></p>
	</form>
</body>

</html>