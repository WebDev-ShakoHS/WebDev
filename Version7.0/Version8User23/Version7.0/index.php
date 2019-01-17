<html lang="en">
<!--Version 3.0
	Name: Matthew Scalf
	Date Completed: 9/18/18
 -->
<head> 

<!-- your webpage info goes here -->
<style>  
  td {color: #FF0000;}
    body {background-image: linear-gradient(to right, skyblue, silver);
     width: 500px;
        margin: 100px auto 0;
        height: 800px;
    
    }
</style>


    <title>Manchester City FC</title>
        <meta name="author" content="your name" />
        <meta name="description" content="" />
<scipt src="WebDevUser23.css"  
<script src="JS/WebDevUser23_script.js"></script>
        
</head>
<body>
<!-- webpage content goes here in the body -->


<img src="https://foundrysu.com/asset/Event/6013/mancity.png" style="width:100px;height:100px;">
    <h1>Manchester City FC</h1>
<h2>This is the number #1 MCFC fan site.</h2>
<h3>Made by Matt Scalf</h3>
<form method='POST'>
   <h2>Please input your name before continuing:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name I hope you enjoy the website</h3>";
?>
                <div id="nav">
     
                        <ul>
<h3>Manchester City's 5 best players</h3>
                                <li><a href="SongsUser23.php">Top Players</a></li>
<h3>Test your reaction time</h3>                            
                                <li><a href="GamesUser23.php">Reaction</a></li>

<h3>Stats and more info</h3>
                                <li><a href="HomeUser23.php">Home</a></li>
                        </ul>        
                </div>
                <div id="content">
                    
                </div>

<script>
(function() {
$('div.container').delegate('img', 'click', function() {
    console.log('clicked');
    $(this).clone().appendTo('.container');
});


                <div id="footer">
                </div>
               
</body>
</html>



<article>
	<h1>Donate to keep the website up</h1>
</article>

<div id="contact">
	<h2>Contact Me</h2>
	<form action="#">
		<ul>
			<li>
				<label for="name">Name: </label>
	 			<input name="name" id="name">
			</li>

			<li>
				<label for="email">Email Address: </label>
		 		<input name="email" id="email">
			</li>

			<li>
				<label for="comments">What's Up?</label>
				<textarea name="comments" id="comments" cols="30" rows="10"></textarea>
			</li>
			<li>
				<input type="submit" value="Submit">
			</li>
		</ul>
	</form>
</div>
<div id="credit">
	<h2>Donate to keep the website up</h2>
	<form action="#">
		<ul>
			<li>
				<label for="name">Credit card number: </label>
	 			<input name="name" id="name">
			</li>

			<li>
				<label for="email">Experiation date: </label>
		 		<input name="email" id="email">
			</li>

			<li>
				<label for="comments">Security number?</label>
				<textarea name="comments" id="comments" cols="30" rows="10"></textarea>
			</li>
			<li>
				<input type="submit" value="Submit">
			</li>
		</ul>
	</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script>
(function() {
	
$('html').addClass('js');
var contactForm = {
	container: $('#contact'),
	config: {
		effect: 'slideToggle',
		speed: 500
	},
	init: function(config) {
		$.extend(this.config, config);
		$('<button></button>', {
			text: 'Contact Me'
		})
			.insertAfter( 'article:first' )
			.on( 'click', this.show );
    
	},
	show: function() {
		var cf = contactForm,
			container = cf.container,
			config = cf.config;
		if ( container.is(':hidden') ) {
			contactForm.close.call(container);
			container[config.effect](config.speed);
		}
	},
	close: function() {
		var $this = $(this), // #contact
			config = contactForm.config;
		if ( $this.find('span.close').length ) return;
		$('<span class=close>X</span>')
			.prependTo(this)
			.on('click', function() {
				// this = span
				$this[config.effect](config.speed);
			})
	}
};
contactForm.init({
	// effect: 'fadeToggle',
	speed: 300
});
})();


</script>

	

<script></script>
</body>
</html>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Leave a comment</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>