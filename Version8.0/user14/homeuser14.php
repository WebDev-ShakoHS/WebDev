<html>
<head>
<style>  
  td {color: #FF0000;}
  body {background-image: linear-gradient(to left, #00FFFF , #FF0000)}
  blockquote.co {
		float: left;
		background: red;
		font-size: 2.5em;
		width: 35%;
        color:aqua;
        font-family: cursive;
		text-align: center;
	}
    article {vertical-align: left;
    }
</style>
<script src="JS/webDevUser14_script.js"></script>
</head>
<body>

    <title>My First Website</title>
    <h1><a href="index.php">Go Back</a></h1>

<h2>Home</h2>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</script>
<p>We here at the Flat Earth Society firstmost believe the Earth is flat. Second most we believe valid emails are important, check yours below.</p>
<form method='POST'>
<input type="text" name="email" placeholder='example@gmail.com'>
<input type="submit" value="Submit Email">

<?php
$servername = "localhost";
$username = "michaelmorgovsky";
$password = "password";
$dbname = "savedemails";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$email = $_POST['email'];
function valid_email($email)
{
  $result = trim($email);
  if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
  {
    return " is a valid email";
  } 
  else 
  {
    return " is not a valid email";
  }
}
$sql = "INSERT INTO emailsSaved (bmail) VALUES ('{$email}')";
if (mysqli_query($conn, $sql)) {
      echo " New record created successfully ";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo $email . valid_email($email);

?>

</body>
</html>