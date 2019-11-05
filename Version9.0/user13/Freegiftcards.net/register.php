<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$firstname = $lastname = $email = $username = $password = $confirm_password = "";
$firstname_err = $lastname_err = $email_err = $username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = trim($_POST["firstname"]);
    $lastname = trim($_POST["lastname"]);
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
  
     // Validate firstname
    if(empty($firstname)){
        $firstname_err = "Please enter your firstname.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM usersx WHERE firstname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_firstname);
            
            // Set parameters
            $param_firstname = $firstname;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
          
            } else{
                echo "CRUD: Unable to write into database.";
            }
        }
    }
    // Validate lastname
    if(empty($lastname)){
        $lastname_err = "Please enter your lastname.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM usersx WHERE lastname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_lastname);
            
            // Set parameters
            $param_lastname = $lastname;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
              
            } else{
                echo "CRUD: Unable to write into database.";
            }
        }
    }
  // Validate email
    if(empty($email)){
        $email_err = "Please enter an email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM usersx WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } 
            } else{
                echo "CRUD: Unable to write into database.";
            }
        }
    }
    // Validate username
    if(empty($username)){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM usersx WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } 
            } else{
                echo "CRUD: Unable to write into database.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty($password)){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } 
    
    // Validate confirm password
    if(empty($confirm_password)){
        $confirm_password_err = "Please confirm password.";     
    } else{
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($firstname_err) && empty($lastname_err) && empty($email_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO usersx (firstname, lastname, email, username, password) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_firstname, $param_lastname, $param_email, $param_username, $param_password);
            
            // Set parameters
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_email = $email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "CRUD: Unable to write into database.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account at Freegiftcrads.net</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                <label>FIRSTNAME</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                <span class="help-block"><?php echo $firstname_err; ?></span>
            </div>
                <div class="form-group <?php echo (!empty($_FILES)) ? 'has-error' : ''; ?>">
                <label>LASTNAME</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                <span class="help-block"><?php echo $lastname_err; ?></span>
            </div>  
             <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="index.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>