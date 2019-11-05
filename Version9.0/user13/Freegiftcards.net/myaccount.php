<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!--style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style-->
    <script>
  
  function deleteFunction(){
    
    confirm("Are you sure you want to delete your account?");
      }
  
</script>
</head>
<body>    <div class="container p4">

    <div class="page-header p4">
      <h1>Your Account</h1>
    </div>
    <table>
        <tr>
        <td>First Name: </td>
         <td> <?php echo $_SESSION["firstname"]; ?></td>

        </tr>        
        <tr>
        <td>Last Name: </td>
         <td> <?php echo $_SESSION["lastname"]; ?></td>

        </tr>
                
        <tr>
        <td>Username: </td>
         <td> @<?php echo $_SESSION["username"]; ?></td>

        </tr>
        
        <tr>
        <td>Email:</td>
         <td><?php echo $_SESSION["email"]; ?></td>

        </tr>
        <tr>
        <td>Password:</td>
         <td> <?php echo $_SESSION["password"]; ?></td>


        </tr>

    </table>
    <br>
     <a href="reset-password.php">Reset Your Password</a>
<br>
    <p>
                <a href="webDevUser13.html" class="btn btn-primary">Home</a>

        <a href="logout.php" class="btn btn-info">Sign Out of Your Account</a>
        <a href="delete-page.php?id=<?=$_SESSION['id']?>" class="btn btn-danger" onclick="deleteFunction()">Delete Account</a>

    </p>
        </div>

</body>
</html>
